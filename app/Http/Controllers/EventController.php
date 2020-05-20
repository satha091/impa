<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $event->created_by = auth()->user()->id;
        $event->updated_by = auth()->user()->id;

        $event->save();

        return back()
            ->with('success','You have successfully created event');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
