<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::all();
        return view('pages.slider.index', compact('sliders'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'slide_title' => 'required',
            'slide_subtitle' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/slider/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1920, 839) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/slider/' . $imageName;

            // Slider::create($data);
        }
        // dd($request->all());
        Slider::create($data);

        return redirect()->route('slider.index')->with('success', 'Slider created successfully');
    }


    public function update(Request $request, Slider $slider)
    {
        // Validate the request data
        $data = $request->validate([
            'slide_title' => 'required',
            'slide_subtitle' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
            $imagePath = public_path('/uploads/slider/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1920, 839) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/slider/' . $imageName;
        }

        // Update the slider model with the validated data
        $slider->update($data);

        return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
    }


    public function destroy(Slider $slider)
    {
        // Check if an image is associated with the slider
        if ($slider->image_url) {
            // Get the path of the image
            $imagePath = public_path($slider->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully');
    }
}
