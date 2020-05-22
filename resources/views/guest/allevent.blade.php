@extends('master')

@section('bootstrap')
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/fontAwesome.css">
<link rel="stylesheet" href="css/templatemo-style.css">
@endsection

@section('page-content')
<style>
    .content {
        margin-top: -70px;
    }

</style>
<ul class="cd-hero-slider">

    <li class="selected">
        <div class="heading">
            <h1>All Events</h1>


        </div>

        <div class="cd-full-width first-slide">
            <div class="container">
                <div class="row" style="width: 100%">
                    <div class="">
                    <div class="col-md-12">


                        @foreach($events as $event)
                        <!-- {{ $event->id }} -->
                        <div class="content p-20 col-sm-6 ">

                                <a href="{{ route('guest.show',['event'=>$event->id]) }}" data-lightbox="image-4"><img src="{{ 'images/'.$event->event_image }}" class="" width="300px" height="300px"></a>

                          <!--  <a href="{{ route('events.show',['event'=>$event->id]) }}"> <img src="{{ 'images/'.$event->event_image }}" class="img-responsive rounded-circle " ></a>-->
                            <h4>{{ $event->event_presenter_name }}</h4>
                            <br><br>
                            <div style="background-color:#FFBF00;padding-top:20px;padding-bottom:20px">
                                <p style="color: white"><b>{{ $event->event_title }}</b></p>
                                <p style="color: white">{{ $event->event_desc }}</p>
                                <a href="{{ route('guest.show',['event'=>$event->id]) }}"> <button type="button"
                                    class="btn btn-white">Details</button></a>
                            </div>
                        </div>
                         @endforeach


                        <div style="margin-top: 22px;"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </li>





</ul>
@endsection
