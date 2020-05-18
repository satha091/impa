@extends('master')

@section('bootstrap')
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
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
            <h1>Events</h1>

          </div>

          <div class="cd-full-width first-slide">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="content p-20 col-sm-6">
                     <a href="{{ url('events') }}">   <img src="img/Arunachalam.png"></a>
                                        <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                                        <br><br>


                                        <div style="background-color:#FFBF00;padding-top:10px;padding-bottom:10px">
                                            <p style="color: white"><b>Knowledge Session:</b></p>
                                            <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                                            <a href="{{ url('events') }}">  <button type="button" class="btn btn-white"> Register</button></a>
                                        </div>


                                      </div>
                                      <div class="content p-20 col-sm-6">
                                        <a href="{{ url('events') }}">   <img src="img/Arunachalam.png"></a>
                                                        <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                                                        <br><br>


                                                        <div style="background-color:#FFBF00;padding-top:10px;padding-bottom:10px">
                                                            <p style="color: white"><b>Knowledge Session:</b></p>
                                                            <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                                                            <a href="{{ url('events') }}">  <button type="button" class="btn btn-white"> Register</button></a>
                                                        </div>


                                                      </div>
                                                      <div class="primary-button">
                                                        <a href="{{ url('events') }}">More Events</a>
                                                      </div>
                                                  <div style="margin-top: 22px;"></div>
                                                   <div class="content p-20 col-sm-6">
                                                        <a href="{{ url('events') }}">   <img src="img/Arunachalam.png"></a>
                                                                        <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                                                                        <br><br>


                                                                        <div style="background-color:#FFBF00;padding-top:10px;padding-bottom:10px">
                                                                            <p style="color: white"><b>Knowledge Session:</b></p>
                                                                            <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                                                                            <a href="{{ url('events') }}">  <button type="button" class="btn btn-white"> Register</button></a>
                                                                        </div>


                                                                      </div>
                                                                      <div class="content p-20 col-sm-6">
                                                                        <a href="{{ url('events') }}">   <img src="img/Arunachalam.png"></a>
                                                                                        <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                                                                                        <br><br>


                                                                                        <div style="background-color:#FFBF00;padding-top:10px;padding-bottom:10px">
                                                                                            <p style="color: white"><b>Knowledge Session:</b></p>
                                                                                            <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                                                                                            <a href="{{ url('events') }}">  <button type="button" class="btn btn-white"> Register</button></a>
                                                                                        </div>


                                                                                      </div>



              </div>
            </div>
          </div>
        </li>
</ul>
@endsection
