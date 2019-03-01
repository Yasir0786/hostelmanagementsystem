@extends('layouts.master')
@section('main-content')
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }} :{{ old('name') }}
                </div>
            @endif


        </div>
        <div class="row mb-2">
            <div class="col">
                <span class="h2">Persons List</span>
            </div>



        </div>

        <div class="row">

            <div class="col">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Alloted Room</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($people as $person)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td scope="row"> {{ $person->name }}</td>
                            <td>{{$person->phone }}</td>
                            <td>{{$person->address }}</td>
                            <td>{{$person->room->number }}</td>
                            <td class="d-flex justify-content-end">

                                <form class="form-inline" action={{route( 'people.destroy',[ 'id'=>$person->id])}} method="post"> @csrf @method('DELETE')
                                    <a  class="btn btn-primary mr-2"  href={{route( 'people.edit',[ 'id'=>$person->id])}}>Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach {{ $people->links() }}
                    </tbody>
                </table>

            </div>

        </div>

    </div>
@endsection