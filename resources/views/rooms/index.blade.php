@extends('layouts.master')
@section('main-content')
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }} :{{ old('number') }}
                </div>
            @endif


        </div>
        <div class="row mb-2">
            <div class="col">
                <span class="h2">Room List</span>
            </div>

            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href={{route( 'rooms.create')}}>Add Room</a>
            </div>

        </div>

        <div class="row">

            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Capacity</th>
                        <th>AC</th>
                        <th>Attach bath</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td scope="row"> {{ $room->number }}</td>
                            <td>{{$room->description }}</td>
                            <td>{{$room->capacity }}</td>
                            @if($room->Ac==1)
                                <td>yes</td>
                            @else
                                <td>No</td>
                            @endif
                            @if($room->bath==1)
                                <td>yes</td>
                            @else
                                <td>No</td>
                            @endif
                            <td class="d-flex justify-content-end">

                                <form class="form-inline" action={{route( 'rooms.destroy',[ 'id'=>$room->id])}} method="post"> @csrf @method('DELETE')
                                    <a  class="btn btn-primary mr-2"  href={{route( 'rooms.edit',[ 'id'=>$room->id])}}>Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach {{ $rooms->links() }}
                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection