<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('pages.setting.index', compact('setting'));
    }


    public function logo(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'logo.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        $old_img  = $request->old_img;

        // Check if a new image was uploaded
        if ($request->hasFile('logo')) {
            // Delete the old image
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/logo/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(549, 160) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['logo'] = 'uploads/logo/' . $imageName;
        }

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Logo updated successfully');
    }

    public function favicon(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'favicon.*' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        $old_img  = $request->old_img;

        // Check if a new image was uploaded
        if ($request->hasFile('favicon')) {
            // Delete the old image
            if (file_exists(public_path($old_img))) {
                unlink(public_path($old_img));
            }

            // Handle image upload and update (same as before)
            $image = $request->file('favicon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/favicon/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(100, 100) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['favicon'] = 'uploads/favicon/' . $imageName;
        }

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Favicon updated successfully');
    }

    public function companyName(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'company_name' => 'required',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company name updated successfully');
    }

    public function address(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'address' => 'required',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company address updated successfully');
    }

    public function description(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'description' => 'required',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company description updated successfully');
    }

    public function phone(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'phone_1' => '',
            'phone_2' => '',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company phone updated successfully');
    }

    public function email(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'email_1' => '',
            'email_2' => '',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company email updated successfully');
    }

    public function social(Request $request, Setting $id)
    {
        // Validate the request data
        $data = $request->validate([
            'facebook' => '',
            'youtube' => '',
            'instagram' => '',
        ]);

        // // Update the cause model with the validated data
        $id->update($data);

        return redirect()->route('settings.index')->with('success', 'Company social media updated successfully');
    }
}
