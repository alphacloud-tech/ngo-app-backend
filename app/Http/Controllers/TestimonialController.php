<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $testimonials = Testimonial::latest() // Retrieve the latest testimonials
            ->get();
        return view('pages.testimonial.index', compact('testimonials'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'quote' => 'required',
            'image_url' => 'required',
            'position' => '',
        ]);


        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/testimonial/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(300, 300) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/testimonial/' . $imageName;
        }
        Testimonial::create($data);

        return redirect()->route('testimonial.index')->with('success', 'testimonial created successfully');
    }


    public function update(Request $request, Testimonial $testimonial)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'quote' => 'required',
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
            $imagePath = public_path('/uploads/testimonial/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(300, 300) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/testimonial/' . $imageName;
        }

        // Update the testimonial model with the validated data
        $testimonial->update($data);

        return redirect()->route('testimonial.index')->with('success', 'testimonial updated successfully');
    }


    public function destroy(Testimonial $testimonial)
    {

        // Check if an image is associated with the testimonial
        if ($testimonial->image_url) {
            // Get the path of the image
            $imagePath = public_path($testimonial->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $testimonial->delete();

        return redirect()->route('testimonial.index')->with('success', 'testimonial deleted successfully');
    }


    public function activation(Request $request, Testimonial $testimonial)
    {
        $active = $request->input('active'); // Get the active status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the testimonial's active status
        $testimonial->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
