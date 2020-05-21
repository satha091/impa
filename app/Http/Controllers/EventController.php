<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
    // public function allevents()
    // {
    //     $events = Events::all();
    //     return view('events.allevent', ['events' => $events]);
    // }
    public function index()
    {
        $events = Events::all();
        return view('events.index', ['events' => $events]);
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
            'title' => 'required', 'regex:^[a-zA-Z\s\.]+$'
        ]);


        $event = new Events;

        $event->event_title = $request->get('title');

        $event->event_desc = $request->get('description');

        $event->event_presenter_name = $request->get('presenter_name');

        if ($request->hasFile('image')) {


            // $event->event_image = $request->get('image');
            $imagename = time() . '.' . $request->image->getClientOriginalExtension();

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
            ->with('success', 'You have successfully created event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events, $id)
    {

        return  $events->find($id);;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events,$id)
    {
       $event= $events->find($id);
        return view('events.edit',['event'=>$event]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events,$id)
    {
        $event=$events->find($id);

            $event->event_title=$request->event_title;
            $event->event_desc=$request->event_desc;
            $event->event_presenter_name=$request->event_presenter_name;
            // $event->event_image=$request->event_image;
            $event->event_presenter_designation=$request->event_presenter_designation;
            $event->event_presenter_org_details=$request->event_presenter_org_details;
            $event->event_date=$request->event_date;
            $event->event_time=$request->event_time;
            $event->event_duration=$request->event_duration;
            $event->event_meeting_link=$request->event_meeting_link;
            $event->event_meeting_id=$request->event_meeting_id;
            $event->event_meeting_password=$request->event_meeting_password;
            $event->event_status=$request->event_status;
            $event->event_category=$request->event_category;
            // $event->created_by=auth()->user()->id,
            $event->updated_by=auth()->user()->id;
            $event->save();

        return back()
            ->with('success', 'You have successfully Updated event');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events,$id)
    {
        $event=$events->find($id);
        $event->participants()->delete();
        $event->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the event!');
       // return redirect(route('events.index'));
       return back()
       ->with('success', 'You have successfully Deleted event');
        //
    }
}
