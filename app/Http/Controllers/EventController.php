<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventOrganizer;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;

use function GuzzleHttp\Promise\all;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        // $events = Event::latest()->get()->map(function ($event) {
        //     return [
        //         'title' => $event->title,
        //         'start' => $event->date->setTimezone('Africa/Lagos')->format('Y-m-d') . 'T' . $event->start_time->setTimezone('Africa/Lagos')->format('H:i:s'),
        //         'end' => $event->date->setTimezone('Africa/Lagos')->format('Y-m-d') . 'T' . $event->end_time->setTimezone('Africa/Lagos')->format('H:i:s'),
        //         'description' => $event->description,
        //         'location' => $event->location,
        //         // Add other event properties as needed
        //     ];
        // });



        $events = Event::latest()
            ->select('title', 'date', 'description',)
            ->get();

        $eventOrganizers  = EventOrganizer::latest() // Retrieve the latest event
            ->get();

        // dd($events);
        return view('pages.event.index', compact('events', 'eventOrganizers'));
    }


    public function store(Request $request)
    {

        // dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'image_url' => 'required',
            'location_map' => '',
            'event_organizer_id' => 'required'
        ]);

        // Parse the input date into a Carbon date object
        // $carbonDate = Carbon::createFromFormat('j F, Y', $request->date);

        // Format the Carbon date as 'Y-m-d' for saving in the database
        // $formattedDate = $carbonDate->format('Y-m-d');

        $date = Carbon::parse($request->input('date'))->setTimezone('UTC');
        $start_time = Carbon::parse($request->input('start_time'))->setTimezone('UTC');
        $end_time = Carbon::parse($request->input('end_time'))->setTimezone('UTC');

        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/uploads/event/'); // Define your storage path

            // Move the uploaded image to the storage path
            $image->move($imagePath, $imageName);

            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1920, 900) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Save the image path in the database
            $data['image_url'] = 'uploads/event/' . $imageName;
        }

        $data['date'] =  $date;
        $data['start_time'] =  $start_time;
        $data['end_time'] =  $end_time;

        // dd($data);

        Event::create($data);

        return redirect()->route('event.index')->with('success', 'event created successfully');
    }


    public function update(Request $request, Event $event)
    {
        // Validate the request data
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
            'image_url' => 'required',
            'location_map' => '',
            'event_organizer_id' => 'required|exists:event_event_organizers,id',
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
            $imagePath = public_path('/uploads/event/');

            $image->move($imagePath, $imageName);
            // ...


            // Resize the image
            $resizedImage = Image::make($imagePath . $imageName)
                ->fit(1920, 900) // Adjust the dimensions as needed
                ->save($imagePath . $imageName);

            // Update the image path in the database
            $data['image_url'] = 'uploads/event/' . $imageName;
        }

        // Update the event model with the validated data
        $event->update($data);

        return redirect()->route('event.index')->with('success', 'event updated successfully');
    }


    public function destroy(Event $event)
    {

        // Check if an image is associated with the event
        if ($event->image_url) {
            // Get the path of the image
            $imagePath = public_path($event->image_url);

            // Check if the image file exists and delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the resource from the database
        $event->delete();

        return redirect()->route('event.index')->with('success', 'event deleted successfully');
    }


    public function activation(Request $request, Event $event)
    {
        $active = $request->input('active'); // Get the active status from the request
        Log::debug("active status", ['active' => $active]);
        // Update the event's active status
        $event->update([
            'active' => $active,
        ]);

        return response()->json(['success' => true]);
    }
}
