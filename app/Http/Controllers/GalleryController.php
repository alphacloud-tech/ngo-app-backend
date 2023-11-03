<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $gallerys = Gallery::latest() // Retrieve the latest gallery
            ->get();

        return view('pages.gallery.index', compact('gallerys'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'image_url.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        if ($request->hasFile('image_url')) {
            $imagePath = public_path('/uploads/gallery/'); // Define your storage path

            foreach ($request->file('image_url') as $image) {
                if ($image) {
                    // $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    // Move the uploaded image to the storage path
                    $image->move($imagePath, $imageName);

                    // Open the image using Intervention Image and apply resizing
                    $resizedImage = Image::make($imagePath . $imageName)
                        ->fit(600, 501) // Adjust the dimensions as needed
                        ->save($imagePath . $imageName);

                    // Save each image path in a separate database row
                    Gallery::create(['image_url' => 'uploads/gallery/' . $imageName]);
                }
            }
        }

        return redirect()->route('gallery.index')->with('success', 'gallery created successfully');
    }


    public function update(Request $request, Gallery $gallery)
    {
        // Validate the request data
        $data = $request->validate([
            'image_url' => 'required',
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
            $imagePath = public_path('/uploads/gallery/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(600, 501) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/gallery/' . $imageName;
            $gallery->update($data);
        }

        // Update the gallery model with the validated data

        return redirect()->route('gallery.index')->with('success', 'gallery updated successfully');
    }


    public function destroy(Gallery $gallery)
    {

        // Check if an image is associated with the gallery
        if ($gallery->image_url) {
            // Get the path of the image
            $imagePath = public_path($gallery->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'gallery deleted successfully');
    }


    public function activation(Request $request, Gallery $gallery)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $gallery->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
