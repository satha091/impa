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
.overlay{
    height: 800px;
}
    </style>
<div class="container" style="background-color:#fff;">

    {{-- <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Success! </strong> Product have added to your wishlist.
      </div> --}}


        @if(session()->has('success'))



            <div class="alert alert-success alert-dismissible" id="mes" style="margin-top:20px;">

            <button type="button" class="close" data-dismiss="alert" onclick="javascript:document.getElementById('mes').style.display = 'none';">x</button>
            <strong>{{ session('success') }}</strong>
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

                    <form class="form-horizontal" method="POST" action="{{route('events.update',['event'=>$event->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <fieldset>
                        <!-- Form Name -->
                        <legend><h3 class="col-md-offset-5">Edit Event</h3></legend>

                        <!-- Text input-->
                        <div class="form-group col-md-4">
                            <div>
                          <p class="col-md-offset-3 font-weight-bold" for="title">Title</p>
                          <div class="col-md-offset-3">
                          <input id="title" name="event_title" value="{{ $event->event_title }}" type="text" placeholder="Title" class="form-control input-md" required>

                          </div>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group col-md-4">
                            <div>
                          <p class="col-md-offset-3 font-weight-bold " for="textarea">Description</p>
                          <div class="col-md-offset-3">
                            <textarea class="form-control" id="description" name="event_desc" rows="1">{{ $event->event_desc }}</textarea>
                          </div>
                            </div>
                        </div>

                       <!-- Text input-->
                       <div class="form-group col-md-4">
                           <div>
                        <p class="col-md-offset-3 font-weight-bold" for="textinput">Presenter name</p>
                        <div class="col-md-offset-3">
                        <input id="presenter_name" name="event_presenter_name" type="text" value="{{ $event->event_presenter_name }}" pattern="^[a-zA-Z\s\.]+$" title="Name should only contain upper case and lower case letters,dot,space. e.g. P John, P.John" placeholder="Presenter name" class="form-control input-md" required>
                        </div>
                           </div>
                      </div>



                        <!-- Text input-->
                        <div class="form-group col-md-4">
                            <div>
                          <label class="col-md-offset-3 font-weight-bold" for="textinput">Image</label>
                          {{-- <img id="imageshow"/> --}}

                          <div class="col-md-offset-3">
                          <input id="image" name="event_image" type="file" placeholder="Image" class="form-control input-md" required>

                          </div>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group col-md-4">
                            <div>
                          <label class="col-md-offset-3 font-weight-bold" for="textinput">Presenter Designation</label>
                          <div class="col-md-offset-3">
                          <input id="presenter_designation" value="{{ $event->event_presenter_designation }}" name="event_presenter_designation" type="text" placeholder="Presenter Designation" class="form-control input-md">
                          {{-- <span class="help-block">help</span> --}}
                          </div>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group col-md-4">
                            <div>
                          <label class="col-md-offset-3 font-weight-bold" for="textarea">Presenter Org Details</label>
                          <div class="col-md-offset-3">
                            <textarea class="form-control" id="presenter_org_details" rows="1"  name="event_presenter_org_details">{{ $event->event_presenter_org_details }}</textarea>
                          </div>
                            </div>
                        </div>


                     <!--   <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Presenter Designation</label>
                            <div class="col-md-4">
                            <input id="presenter_designation"  value="{{ $event->presenter_designation }}" name="presenter_designation" type="text" placeholder="Presenter Designation" class="form-control input-md">
                            {{-- <span class="help-block">help</span> --}}
                            </div>
                          </div>-->

                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Date</label>
                            <div class="col-md-offset-3">
                            <input id="event_date" name="event_date" value="{{ $event->event_date }}" type="date" placeholder="Event Date" class="form-control input-md" required>
                            {{-- <span class="help-block">help</span> --}}
                            </div>
                              </div>
                          </div>

                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Time</label>
                            <div class="col-md-offset-3">
                            <input id="event_time" name="event_time" value="{{ $event->event_time }}" type="time" placeholder="Event Time" class="form-control input-md">

                            </div>
                              </div>
                          </div>


                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Duration</label>
                            <div class="col-md-offset-3">
                            <input id="event_duration" name="event_duration"  value="{{ $event->event_duration }}" type="text" placeholder="Event Duration" class="form-control input-md">
                            {{-- <span class="help-block">help</span> --}}
                            </div>
                              </div>
                          </div>

                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Meeting Link</label>
                            <div class="col-md-offset-3">
                            <input id="event_meeting_link" name="event_meeting_link" value="{{ $event->event_meeting_link }}" type="text" placeholder="Event Meeting Link" class="form-control input-md">
                            {{-- {-- <span class="help-block">help</span> --}}
                            </div>
                              </div>
                          </div>

                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Meeting Id</label>
                            <div class="col-md-offset-3">
                            <input id="event_meeting_id" name="event_meeting_id" value="{{ $event->event_meeting_id }}" type="text" placeholder="Event Meeting Id" class="form-control input-md">
                            {{-- {-- <span class="help-block">help</span> --}}
                            </div>
                              </div>
                          </div>

                          <div class="form-group col-md-4">
                              <div>
                            <label class="col-md-offset-3 font-weight-bold" for="textinput">Event Meeting Password</label>
                            <div class="col-md-offset-3">
                            <input id="event_meeting_password" name="event_meeting_password" value="{{ $event->event_meeting_password }}" type="text" placeholder="Event Meeting Password" class="form-control input-md">
                            {{-- {-- <span class="help-block">help</span> --}}
                            </div>
                              </div>
                          </div>


                        <!-- Select Basic -->
                        <div class="form-group col-md-4">
                            <div>
                          <label class="col-md-offset-3 font-weight-bold" for="selectbasic">Status</label>
                          <div class="col-md-offset-3">
                            <select id="status" name="event_status" class="form-control" required>
                              <option value="1" {{ $event->event_status===1 ? 'selected' :'' }}>Active</option>
                              <option value="2" {{ $event->event_status===2 ? 'selected' :'' }}>Inactive</option>
                            </select>
                          </div>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group col-md-4">
                            <div>
                          <label class="col-md-offset-3 font-weight-bold" for="selectbasic">Category</label>
                          <div class="col-md-offset-3">
                            <select id="event_category" name="event_category" class="form-control">
                              <option value="1" {{ $event->event_category===1 ? 'selected' :'' }}>Category one</option>
                              <option value="2" {{ $event->event_category===2 ? 'selected' :'' }}>Category two</option>
                            </select>
                          </div>
                            </div>
                        </div>


                        <!-- Multiple Checkboxes -->
                        {{-- <div class="form-group">
                          <label class="col-md-4 control-label" for="checkboxes">Participation Access</label>
                          <div class="col-md-4">
                          <div class="checkbox">
                            <label for="checkboxes-0">
                              <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                              Paid
                            </label>
                            </div>
                          <div class="checkbox">
                            <label for="checkboxes-1">
                              <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                              Invite only
                            </label>
                            </div>
                          <div class="checkbox">
                            <label for="checkboxes-2">
                              <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
                              Open
                            </label>
                            </div>
                          </div>
                        </div> --}}
                        <div style="margin-bottom: 44px"></div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput"></label>
                            <div class="col-md-3 col-md-offset-4">
                            <input  name="submit" type="submit" class="form-control input-md btn btn-warning" style="margin-top:8px;padding:8px 2px 8px 2px;border-radius: 10px;">
                            {{-- {-- <span class="help-block">help</span> --}}
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-md-offset-8">
                            <div class="col-md-5 col-md-offset-12 text-center " style="background-color: #f0ad4e;margin-top:8px;padding:8px 2px 8px 2px;border-radius: 10px;">
                            <a href="{{ url('events')}}" style="color: white !important">Back</a>
                          </div>
                            </div>

                        </fieldset>
                        </form>
                        <div style="margin-bottom: 34px"></div>
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

