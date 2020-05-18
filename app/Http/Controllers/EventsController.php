<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Events;




class EventsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $events = Events::all();
        return $events;


    }

    public function create()
    {
        return view('events.create');

    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required','regex:^[a-zA-Z\s\.]+$'
        ]);


        $event = new Events;

        $event->event_title = $request->get('title');

        $event->event_desc = $request->get('description');

        $event->event_presenter_name = $request->get('presenter_name');

        if($request->hasFile('image'))
        {


        // $event->event_image = $request->get('image');
        $imagename = time().'.'.$request->image->getClientOriginalExtension();

        $event->event_image = $imagename;

        $request->image->move(public_path('images'), $imagename);
        }

        $event->event_presenter_designation = $request->get('presenter_designation');

        $event->event_presenter_org_details = $request->get('presenter_org_details');

        $event->event_date = $request->get('event_date');

        $event->event_time = $request->get('event_time');

        $event->event_duration = $request->get('event_duration');

        $event->event_meeting_link = $request->get('event_meeting_link');

        $event->event_meeting_id = $request->get('event_meeting_id');

        $event->event_meeting_password = $request->get('event_meeting_password');

        $event->event_status = $request->get('status');

        $event->event_category = $request->get('category');

        // $event->created_date = $request->get('event_desc');

        // $event->updated_date = $request->get('event_desc');

        $event->updated_by = auth()->user()->id;

        $event->save();

        return back()
            ->with('success','You have successfully created event');

        // return $request->all();

    }

}
