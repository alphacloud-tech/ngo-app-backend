<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Category;
use App\Notifications\NewVolunteerNotification;
use App\User;
use App\Volunteer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Image;

class IndexController extends MainController
{
    public function index()
    {
        $data['sliders'] = DB::table('sliders')->get();

        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();

        $data['featuredCause'] = DB::table('causes')
            ->where('featured', true)
            ->orderBy('causes.created_at', 'desc')
            ->first();


        $data['events']  = DB::table('events')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        // Check if there are records and then exclude the last one
        if ($data['events']->count() > 0) {
            $lastRecord = $data['events']->pop(); // Remove the last record
        }

        $data['latentEvent'] = DB::table('events')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->first();


        // $data['testimonials']  = DB::table('testimonials')
        //     ->where('active', 1)
        //     ->orderBy('created_at', 'desc')
        //     ->get();


        $data['blogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->where('active', 1)
            ->get();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();


        return view('frontend.pages.index.index', $data);
    }


    public function about()
    {
        return view('frontend.pages.about.about');
    }


    public function cause()
    {
        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();
        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        $data['featuredCause'] = DB::table('causes')
            ->where('featured', true)
            ->first();

        return view('frontend.pages.cause.cause', $data);
    }

    public function causeDetail($id)
    {
        $data['cause'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.id', '=', $id)
            ->first();

        $data['recentCauses'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();

        $data['cause_categories'] = DB::table('cause_categories')
            ->orderBy('created_at', 'desc')
            ->get();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.cause.detail', $data);
    }


    public function causeByCat($name)
    {

        $data['cause_category'] = DB::table('cause_categories')
            ->where('name', '=', $name)
            ->first();
        // dd($cause_category_id);
        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->where('causes.cause_category_id', '=', $data['cause_category']->id)
            ->get();

        // $data['recentCauses'] = DB::table('causes')
        //     ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
        //     ->select('causes.*', 'cause_categories.name as category_name')
        //     ->where('causes.id', '!=', $id)
        //     ->orderBy('created_at', 'desc')
        //     ->limit(2)
        //     ->get();



        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.cause.cause_cat', $data);
    }


    public function event()
    {
        $data['events']  = DB::table('events')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.event.event', $data);
    }

    public function eventDetail($id)
    {
        $data['event']  = DB::table('events')
            ->join('event_organizers', 'events.event_organizer_id', '=', 'event_organizers.id')
            ->select(
                'events.*',
                'event_organizers.name',
                'event_organizers.email',
                'event_organizers.phone',
                'event_organizers.website'
            )
            ->where('active', 1)
            ->where('events.id', '=', $id)
            ->first();

        // dd($data);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.event.detail', $data);
    }



    public function blog()
    {

        $data['blogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->where('active', 1)
            ->paginate(6);


        $data['resentBlogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->orderBy('blog_posts.created_at', 'desc')
            ->where('active', 1)
            ->take(3)
            ->get();


        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();


        $data['categories'] = Category::all();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.blog.blog', $data);
    }

    public function blogDetail($id)
    {

        $data['resentBlogs'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->orderBy('blog_posts.created_at', 'desc')
            ->where('active', 1)
            ->take(3)
            ->get();


        $data['causes'] = DB::table('causes')
            ->join('cause_categories', 'causes.cause_category_id', '=', 'cause_categories.id')
            ->select('causes.*', 'cause_categories.name as category_name')
            ->orderBy('causes.created_at', 'desc')
            ->get();

        $data['blog'] = BlogPost::latest() // Retrieve the latest blog
            ->with('category') // Eager load the related category
            ->where('id', '=', $id)
            ->where('active', 1)
            ->first();

        $data['categories'] = Category::all();

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        // dd($data);
        return view('frontend.pages.blog.detail', $data);
    }


    public function contact()
    {
        return view('frontend.pages.contact.contact');
    }


    public function donation()
    {
        return view('frontend.pages.donation.donation');
    }
    public function faq()
    {
        return view('frontend.pages.faq.faq');
    }

    public function video()
    {
        return view('frontend.pages.gallery.video');
    }

    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.gallery', $data);
    }

    public function volunteer()
    {
        $data['volunteers'] = DB::table('volunteers')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.volunteer', $data);
    }

    public function becomeVolunteer()
    {
        $data['volunteers'] = DB::table('volunteers')
            ->where('active', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.become', $data);
    }


    public function volunteerDetail($id)
    {
        $data['volunteer']  = DB::table('volunteers')
            ->where('active', 1)
            ->where('volunteers.id', '=', $id)
            ->first();


        Session::put('getPath', $this->imagePath());
        $data['imgPath'] = $this->imagePath();

        return view('frontend.pages.gallery.detail', $data);
    }


    public function memberFrontend(Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048', // Adjust file validation rules as needed
            'name' => 'required',
            'personal_experience' => 'required',
            'position' => '',
            'email' => 'required',
            'phone' => 'required',
            'skills' => 'nullable', // Make sure to include skills field
        ]);

        $data = $request->all(); // Get all form data

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/volunteer/');

            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(700, 624) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the data array
            $data['image_url'] = 'uploads/volunteer/' . $imageName;
        }
        $data['position'] = 'volunteer';
        // Save the data to the database (assuming you have a Model for members)
        Volunteer::create($data);


        $adminUser = User::where('email', 'adesanjo470@gmail.com')->first();

        if ($adminUser) {
            $adminUser->notify(new NewVolunteerNotification($data));
        }

        return response()->json(['success' => true, 'message' => 'Thank you for registering, we will contact you soon']);
    }
}
