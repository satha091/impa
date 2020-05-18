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
        <h1>Knowledge Session</h1>
        </div>
        <div class="cd-full-width first-slide">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="content card col-sm-6" style="background-color:#FFBF00;">
                    <div class="card-body shadow" style="background-color:#ffff;box-shadow: 10px 10px 10px 10px ; ">
                        <img src="img/Arunachalam.png">
                        <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                                           </div>

                                           <div class="card-body shadow " style="background-color:#FFBF00;box-shadow: 10px 10px 10px 10px; ">
                                            <p style="color: white"> <b>Knowledge Session:</b></p>
                                            <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                                            <p style="color: white"><b>Date : 14/may/2020</b></p>
                                            <p style="color: white"><b>Time: 5:00pm</b></p>
                                            <p style="color: white"><b>Zoom Metting Id:816 5556 6623</b></p>
                                            <p style="color: white"><b>Password: 013055</b></p>
                                             </div>
                                         </div>

             <!--   <div class="content  col-sm-6">
  <img src="img/Arunachalam.png">
                  <h4>Dr A Arunachalam Mudaliyar Iyya</h4>
                  <div style="background-color:#FFBF00">
                  <p style="color: white"> <b>Knowledge Session:</b></p>
                  <p style="color: white">How to Mange expenditure,existing business and new Startups</p>
                  <p style="color: white"><b>Date : 14/may/2020</b></p>
                  <p style="color: white"><b>Time: 5:00pm</b></p>
                  <p style="color: white"><b>Zoom Metting Id:816 5556 6623</b></p>
                  <p style="color: white"><b>Password: 013055</b></p></div></div>-->
                 <!-- <p>Newline is free CSS template provided by templatemo site. Credits go to <a

  href="https://videos.pexels.com/videos/busy-street-in-the-city-1089" target="_blank">Pexels.com</a> for a video

  background and <a href="https://unsplash.com" target="_blank">Unsplash</a> for images. Please support templatemo

  by spreading a word. Thank you. If you have any question, feel free to contact us on Facebook page. Quisque dictum

  convallis mi. In dapibus auctor dictum donec mattis quis eros ultricies feugiat.</p>-->
  <!--<div class="primary-button ">
      <a href="#">Discover More</a>
    </div>-->


                <div class="content col-sm-5 col-sm-offset-1" style="background-color:#FFBF00;box-shadow: 10px 10px 5px,margin-top: -160px">
<h4 style="color: white; padding-bottom:30px">Register Form</h4>

                    <form action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="email" style="color: white">Name</label>

                          <input type="email" class="form-control " id="email">
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="email" style="color: white">Contact</label>

                          <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="email" style="color: white">Email</label>
                            <input type="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2 text-white" for="email" style="color: white">Company</label>

                            <input type="password" class="form-control" id="pwd">
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email" style="color: white">Location</label>

                            <input type="password" class="form-control" id="pwd">
                          </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
<div style="padding-bottom: 50px"></div>

                                 <!-- <p>Newline is free CSS template provided by templatemo site. Credits go to <a

                  href="https://videos.pexels.com/videos/busy-street-in-the-city-1089" target="_blank">Pexels.com</a> for a video

                  background and <a href="https://unsplash.com" target="_blank">Unsplash</a> for images. Please support templatemo

                  by spreading a word. Thank you. If you have any question, feel free to contact us on Facebook page. Quisque dictum

                  convallis mi. In dapibus auctor dictum donec mattis quis eros ultricies feugiat.</p>-->
                  <!--<div class="primary-button ">
                      <a href="#">Discover More</a>
                    </div>-->

                                </div>

              </div>
           <!--   <div class="primary-button">
                  <a href="{{ url('events') }}">More Events</a>
                </div>
            <div style="margin-top: 22px;"></div>-->
            </div>
          </div>
        </div>
      </li>
</ul>
@endsection
