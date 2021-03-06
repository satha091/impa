@extends('master')

@section('bootstrap')
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('css/bootstrap-theme.min.css') }}">
<link rel="stylesheet" href="{{ url('css/fontAwesome.css') }}">
<link rel="stylesheet" href="{{ url('css/templatemo-style.css') }}">
@endsection

@section('page-content')
<style>
    .content {
        margin-top: -70px;
    }
    .block-20 {
        overflow: hidden;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 275px;
        position: relative;
        display: block;
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
                            <a href="{{ route('guest.show',['event'=>$event->id]) }}"
                                class="block-20 d-flex align-items-end"
                                style="background-image: url('{{ url('images/'.$event->event_image) }}');">
                                {{-- <img
                                    src="{{ url('images/'.$event->event_image) }}"
                                style="width: auto; height:250px"> --}}
                            </a>
                              <!--  <a href="{{ route('guest.show',['event'=>$event->id]) }}" data-lightbox="image-4"><img src="{{ url('images/'.$event->event_image) }}" class="" style="height: 300px; width: auto"></a>-->

                          <!--  <a href="{{ route('events.show',['event'=>$event->id]) }}"> <img src="{{ 'images/'.$event->event_image }}" class="img-responsive rounded-circle " ></a>-->
                            <h4>{{ $event->event_presenter_name }}</h4>
                            <br><br>
                            <div class="col-md-10  col-xs-offset-1" style="background-color:#FFBF00;min-height: 200px">
                                <p style="color: white"><b>{{ $event->event_title }}</b></p>
                                <p style="color: white">{{ $event->event_desc }}</p>

                                {{-- <a href="{{ route('guest.show',['event'=>$event->id]) }}"> <button type="button"
                                    class="btn btn-white">Details</button></a> --}}
                            </div>
                        </div>
                         @endforeach


                        <div style="margin-top: 10px;"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </li>





</ul>
@endsection
