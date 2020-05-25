@extends('master')
@section('bootstrap')
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">



@endsection


@section('page-content')
<style>
.overlay{
    background-color: white;
}
    </style>

<div class="container">


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <div style="margin-bottom: 20px">
            <a href="{{ route('events.create') }}"><button class="btn btn-primary"> Add New</button></a>
        </div>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Event Title</th>
                <th>Event Description</th>
                <th>Event Presenter Name</th>
                <th>Event Presenter Designation</th>
                <th>Organization Details</th>
                <th>Event Date</th>
         <th>Show </th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{  $event->id }}</td>
                    <td>{{  $event->event_title }}</td>
                    <td>{{  $event->event_desc }}</td>

                    <td>{{  $event->event_presenter_name }}</td>
                    <td>{{  $event->event_presenter_designation }}</td>
                    <td>{{  $event->event_presenter_org_details }}</td>
                    <td>{{  $event->event_date }}</td>
                   <!-- <td><a href="{{ route('events.create') }}"> ADD</a></td>-->
                 <td><a href="{{ route('events.show',['event'=>$event->id])  }}"> Show</a></td>
                    <td><a href="{{ route('events.edit',['event'=>$event->id])  }}"> Edit</a></td>
                    <td>
                    <form action="{{ route('events.destroy',['event'=>$event->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
@endsection
