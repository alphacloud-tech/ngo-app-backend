<?php

namespace App\Http\Controllers;

use App\EventOrganizer;
use Illuminate\Http\Request;

class EventOrganizerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $eventOrganizers = EventOrganizer::all();
        return view('pages.event.organizer.index', compact('eventOrganizers'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => '',
            'website' => '',
        ]);
        EventOrganizer::create($data);

        return redirect()->route('event-organizer.index')->with('success', 'event organizer created successfully');
    }


    public function update(Request $request, EventOrganizer $event_organizer)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => '',
            'website' => '',
        ]);

        // Update the cause category model with the validated data
        $event_organizer->update($data);

        return redirect()->route('event-organizer.index')->with('success', 'event organizer updated successfully');
    }


    public function destroy(EventOrganizer $event_organizer)
    {
        // Delete the resource from the database
        $event_organizer->delete();

        return redirect()->route('event-organizer.index')->with('success', 'event organizer deleted successfully');
    }
}
