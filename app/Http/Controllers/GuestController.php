<?php

namespace App\Http\Controllers;

use App\Events;
use App\Mail\EventRegistred;
use App\Mail\RegistraionMail;
use App\Participants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all()->where('event_status',1);
        return view('guest.allevent', ['events' => $events]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register($id)
    {
        $event_title=Events::find($id)->event_title;
        return view('guest.register',['event_id'=>$id,'event_title'=>$event_title]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Participants $participants,$id)
    {
        $event =Events::find($id);
         $participants->create($request->all());
         Mail::to($request->user_email)->send(new EventRegistred($event));
        return back()
            ->with('success', 'You have successfully created event');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events,$id)
    {
        return view('guest.show',['event'=>$events->find($id)]) ;
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
