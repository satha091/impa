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
<div class="container" style="background-color:#fff;">

    {{-- <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Success! </strong> Product have added to your wishlist.
      </div> --}}


        @if(session()->has('success'))



            <div class="alert alert-success alert-dismissible" id="mes" style="margin-top:20px;">

            <button type="button" class="close" data-dismiss="alert" onclick="javascript:document.getElementById('mes').style.display = 'none';">x</button>
            <strong>You have successfully created event</strong>
            </div>
        @endif
        @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="card">
                {{-- <div class="card-header" style="text-align: left;margin-bottom:25px;"><h3>Sign Up</h3></div> --}}

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}

                    {{-- @csrf --}}
      <form class="form-horizontal" action="{{ route('guest.store',['event'=>$event_id]) }}" method="post">
        @csrf

        <fieldset>

            <!-- Form Name -->
            <legend><h3>Add Register</h3></legend>



            <div class="form-group" style="display: none">
                <label class=" control-label col-md-4" for="title">Event Id</label>
                <div class="col-md-4">
                <input id="" name="event_id" value={{ $event_id }} type="text" placeholder="Event Id" class="form-control input-md" required>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">User name</label>
                <div class="col-md-4">
                <input id="" name="user_name" type="text" pattern="^[a-zA-Z\s\.]+$" title="Name should only contain upper case and lower case letters,dot,space. e.g. P John, P.John" placeholder="Enter User Name" class="form-control input-md" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="title">User Contact</label>
                <div class="col-md-4">
                <input id="" name="user_contact" type="text" placeholder="Pleser Enter Contact Details" class="form-control input-md" required>

                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label" for="title">E-mail</label>
                <div class="col-md-4">
                <input id="" name="user_email" type="text" placeholder="Pleser Enter E-mail" class="form-control input-md" required>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="title">User Organization</label>
                <div class="col-md-4">
                <input id="" name="user_organisation" type="text" placeholder="Pleser Enter User Organisation" class="form-control input-md" required>

                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="title">Location</label>
                <div class="col-md-4">
                <input id="" name="user_location" type="text" placeholder="Pleser Enter Location" class="form-control input-md" required>

                </div>
              </div>



              <div class="form-group">
                <label class="col-md-4 control-label" for="textinput"></label>
                <div class="col-md-3">
                <input  name="submit" type="submit" class="form-control input-md btn btn-warning">
                {{-- {-- <span class="help-block">help</span> --}}
                </div>
              </div>


      <!--  <input type="text" name="event_id" value={{ $event_id }} id="">
        <input type="text" name="user_name" id="" placeholder="Name">
        <input type="text" name="user_contact" id="" placeholder="Mobile">
        <input type="submit" value="Submit">-->
    </fieldset>
    </form>

</div>
</div>
</div>
</div>

<div class="col-md-1"></div>

</div>
</div>
</div>

@endsection
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


<script language="JavaScript" type="text/javascript">
$(document).ready(function() {

$("#image").change(function(e) {

for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

var file = e.originalEvent.srcElement.files[i];

var img = document.getElementById("imageshow");
var reader = new FileReader();
reader.onloadend = function() {
img.src = reader.result;
}
reader.readAsDataURL(file);
$("#image").before(img);

}
});

});


</script>
