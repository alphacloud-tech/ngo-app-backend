<?php

namespace App\Http\Controllers;

use App\Cause;
use App\CauseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class CauseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $causes = Cause::latest() // Retrieve the latest causes
            ->with('causeCategory') // Eager load the related category
            ->get();
        $causeCategories = CauseCategory::all();

        return view('pages.cause.index', compact('causes', 'causeCategories'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'target_amount' => 'required',
            'cause_category_id' => 'required|exists:cause_categories,id'
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/cause/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                // ->fit(500, 393) // Adjust the dimensions as needed
                ->fit(1491 , 849) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/cause/' . $imageName;

            // cause::create($data);
        }
        Cause::create($data);

        return redirect()->route('causes.index')->with('success', 'cause list created successfully');
    }


    public function update(Request $request, Cause $cause)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            // 'image_url' => 'required',
            'target_amount' => 'required',
            'cause_category_id' => 'required|exists:cause_categories,id'
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
            $imagePath = public_path('/uploads/cause/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1491 , 849) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/cause/' . $imageName;
        }

        // Update the cause model with the validated data
        $cause->update($data);

        return redirect()->route('causes.index')->with('success', 'cause list updated successfully');
    }


    public function destroy(Cause $cause)
    {

        // Check if an image is associated with the cause
        if ($cause->image_url) {
            // Get the path of the image
            $imagePath = public_path($cause->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $cause->delete();

        return redirect()->route('causes.index')->with('success', 'cause list deleted successfully');
    }


    public function updateFeatured(Request $request, Cause $cause)
    {
        $featured = $request->input('featured'); // Get the featured status from the request
        // Log::debug("Featured status", ['featured' => $featured]);
        // Update the cause's featured status
        $cause->update([
            'featured' => $featured,
        ]);

        return response()->json(['success' => true]);
    }
}
