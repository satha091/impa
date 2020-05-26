@extends('master')

@section('bootstrap')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


<link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontAwesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
@endsection

@section('page-content')
<style>
    .content {
        margin-top: 10px;
    }
    .overlay{
        height: 35%;
    }

</style>
<ul class="cd-hero-slider">

    <li class="selected">
        <div class="heading">
            <h4 style="color: white">{{ $event->event_title }}</h4>


        </div>


        <div class="container">



            <!--  <div class="content card col-sm-6 col-sm-offset-3" style="background-color:#FFBF00;">
                            <div class="card-body shadow" style="background-color:#ffff;box-shadow: 10px 10px 10px 10px ; ">
                                <img src="{{ url('images/'.$event->event_image) }}" class="" width="300px" height="300px">
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

                                                 </div>-->


            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Organisation</th>
                        <th>Location</th>
                        <th>Accepted On</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participants as $participant )
                        <tr>
                            <td>{{ $participant->user_name }}</td>
                            <td>{{ $participant->user_contact }}</td>
                            <td>{{ $participant->user_email }}</td>
                            <td>{{ $participant->user_organisation }}</td>
                            <td>{{ $participant->user_location }}</td>
                            <td>{{ $participant->accepted_on }}</td>
                            <td>
                                <form
                                    action="{{ route('participants.destroy',['id'=>$participant->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>
            <div style="margin-top: 150px;"></div>


        </div>

    </li>





</ul>
@endsection
