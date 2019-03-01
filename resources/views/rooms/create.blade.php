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

        <form action={{route( 'rooms.store')}} method="POST">
            @csrf

            <div class="form-group row">
                <label for="roomnumber" class="col"> Room Number </label>
                <input type="text" id="roomnumber" class="form-control" name="number"
                       placeholder="Room Name"/>

            </div>
            <div class="form-group row">
                <label for="roomdesc" class="col"> Room Description </label>
                <input type="text" id="roomdesc" class="form-control" name="description"
                       placeholder="Room Description"/>

            </div>
            <div class="form-group row">
                <label for="roomcap" class="col"> Capacity </label>
                <select class="form-control" id="roomcap" name="capacity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>

            </div>

            <div class="radio form-group row">
                <label><input type="radio" name="Ac" value="0" checked>Without Ac</label>
            </div>
            <div class="radio form-group row">
                <label><input type="radio" name="Ac" value="1">With AC</label>
            </div>
            <div class="radio form-group row">
                <label><input type="radio" name="bath" value="0" checked>Without Attach bath</label>
            </div>
            <div class="radio form-group row">
                <label><input type="radio" name="bath" value="1">With Attach Bath</label>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Create Room</button>
                </div>
            </div>
        </form>
    </div>
@endsection