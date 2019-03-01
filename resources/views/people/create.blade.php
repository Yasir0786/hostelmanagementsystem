@extends('layouts.master')

@section('main-content')
    <div class="container" style="background-color: whitesmoke;margin-top: 80px;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action={{route( 'people.store')}} method="POST">
            @csrf

            <div class="form-group row">
                <label for="name" class="col"> Name </label>
                <input type="text" id="name" class="form-control" name="name"
                       placeholder="Name"/>

            </div>
            <div class="form-group row">
                <label for="phone" class="col"> Phone </label>
                <input type="text" id="phone" class="form-control" name="phone"
                       placeholder="Phone"/>

            </div>
            <div class="form-group row">
                <label for="address" class="col"> Address </label>
                <input type="text" id="address" class="form-control" name="address"
                       placeholder="Address"/>

            </div>
            <div class="form-group row">
                <label for="roomid" class="col"> Select Room </label>
                <select class="form-control" id="roomid" name="room_id">
                    <option value="0" disabled selected>Choose Room</option>
                    @foreach($rooms as $room)
                        <option value={{$room->id}}>{{$room->number}}| @if($room->Ac==1) AC @else No AC @endif | @if($room->bath==1) Attached Bath @endif</option>
                    @endforeach
                </select>

            </div>



            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Create Person</button>
                </div>
            </div>
        </form>
    </div>
@endsection