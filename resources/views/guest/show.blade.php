@extends('master')

@section('bootstrap')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/fontAwesome.css')}}">
<link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">
@endsection

@section('page-content')
<style>
    .content{
        margin-top: -80px;
    }

    </style>

<ul class="cd-hero-slider">

    <li class="selected">
        <div class="heading">
        <h1>Knowledge Session</h1>
        </div>
        <div class="cd-full-width first-slide">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="content card col-sm-6 col-sm-offset-3" style="background-color:#FFBF00;">
                    <div class="card-body shadow" style="background-color:#ffff;box-shadow: 10px 10px 10px 10px ; ">
                        <img src="{{ url('images/'.$event->event_image) }}" class="" style="height: 300px; width: auto;">
                        <h4>{{ $event->event_title }}</h4>
                                           </div>

                                           <div class="card-body shadow " style="background-color:#FFBF00;box-shadow: 10px 10px 10px 10px; ">
                                            <p style="color: white"> <b>{{ $event->event_desc }}</b></p>

                                            <p style="color: white"><b>Date : {{ $event->event_date }}</b></p>
                                            <p style="color: white"><b>Time: {{ $event->event_time }}</b></p>
                                            <p style="color: white"><b>Zoom Metting Id:{{ $event->event_meeting_id }}</b></p>
                                            <p style="color: white"><b>Password: {{ $event->event_meeting_password }}</b></p>
                                            <a href="{{ route('guest.register',['event'=>$event->id]) }}">    <button type="button"
                                            class="btn btn-white">Register</button></a>
                                            <div style="padding-top: 30px"></div>
                                        </div>

                                         </div>




              </div>

            </div>
          </div>
        </div>
      </li>
</ul>
@endsection
