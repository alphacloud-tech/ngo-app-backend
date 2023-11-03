<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class BlogPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $blogs = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->get();
        $categories = Category::all();

        return view('pages.blog.index', compact('blogs', 'categories'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_url' => 'required',
            'category_id' => '',
            // 'category_id' => 'required|exists:categories,id'
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/blog/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(800, 408) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/blog/' . $imageName;
        }
        BlogPost::create($data);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully');
    }


    public function update(Request $request, BlogPost $blog)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image_url' => '',
            'category_id' => '',
        ]);


        $old_img  = $request->old_img;

        // Check if a new image was uploaded
        if ($request->hasFile('image_url')) {
            // Delete the old image
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/blog/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(800, 408) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/blog/' . $imageName;
        }

        // Update the blog model with the validated data
        $blog->update($data);

        return redirect()->route('blog.index')->with('success', 'Blog list updated successfully');
    }


    public function destroy(BlogPost $blog)
    {

        // Check if an image is associated with the blog
        if ($blog->image_url) {
            // Get the path of the image
            $imagePath = public_path($blog->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog list deleted successfully');
    }


    public function activation(Request $request, BlogPost $blog)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $blog->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
