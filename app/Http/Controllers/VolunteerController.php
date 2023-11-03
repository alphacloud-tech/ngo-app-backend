<?php

namespace App\Http\Controllers;

use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $volunteers = Volunteer::latest() // Retrieve the latest gallery
            ->get();

        return view('pages.volunteer.index', compact('volunteers'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'personal_experience' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'skills' => '',
            'image_url' => 'required',
        ]);

        // dd($data);
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/volunteer/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(700, 624) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/volunteer/' . $imageName;
        }

        Volunteer::create($data);

        return redirect()->route('volunteer.index')->with('success', 'volunteer created successfully');
    }


    public function update(Request $request, Volunteer $volunteer)
    {
        // dd($request->all());
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'personal_experience' => 'required',
            'position' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'skills' => '',
            'image_url' => '',
        ]);

        // dd($data);
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
            $imagePath = public_path('/uploads/volunteer/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(700, 624) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/volunteer/' . $imageName;
        }

        // Update the volunteer model with the validated data
        $volunteer->update($data);

        return redirect()->route('volunteer.index')->with('success', 'volunteer updated successfully');
    }


    public function destroy(Volunteer $volunteer)
    {

        // Check if an image is associated with the event
        if ($volunteer->image_url) {
            // Get the path of the image
            $imagePath = public_path($volunteer->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $volunteer->delete();

        return redirect()->route('volunteer.index')->with('success', 'volunteer deleted successfully');
    }


    public function activation(Request $request, Volunteer $volunteer)
    {
        $active = $request->input('active'); // Get the active status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the volunteer's active status
        $volunteer->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }


}
