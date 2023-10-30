<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $partners = Partner::latest() // Retrieve the latest partners
            ->get();

        return view('pages.partner.index', compact('partners'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'image_url.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        if ($request->hasFile('image_url')) {
            $imagePath = public_path('/uploads/partner/'); // Define your storage path

            foreach ($request->file('image_url') as $image) {
                if ($image) {
                    // $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    // Move the uploaded image to the storage path
                    $image->move($imagePath, $imageName);

                    // Open the image using Intervention Image and apply resizing
                    $resizedImage = Image::make($imagePath . $imageName)
                        ->fit(106, 95) // Adjust the dimensions as needed
                        ->save($imagePath . $imageName);

                    // Save each image path in a separate database row
                    Partner::create(['image_url' => 'uploads/partner/' . $imageName]);
                }
            }
        }

        return redirect()->route('partner.index')->with('success', 'partner list created successfully');
    }


    public function update(Request $request, Partner $partner)
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
            $imagePath = public_path('/uploads/partner/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(106, 95) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/partner/' . $imageName;
            $partner->update($data);
        }

        // Update the partner model with the validated data

        return redirect()->route('partner.index')->with('success', 'partner list updated successfully');
    }


    public function destroy(Partner $partner)
    {

        // Check if an image is associated with the partner
        if ($partner->image_url) {
            // Get the path of the image
            $imagePath = public_path($partner->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $partner->delete();

        return redirect()->route('partner.index')->with('success', 'partner list deleted successfully');
    }


    public function activation(Request $request, Partner $partner)
    {
        $active = $request->input('active'); // Get the featured status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the cause's featured status
        $partner->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
