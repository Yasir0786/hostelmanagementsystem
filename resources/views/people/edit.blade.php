@extends('layouts.master')

<div class="container" style="background-color: whitesmoke;margin-top: 80px;">

    <form action={{route( 'people.update',['id'=>$person->id])}} method="POST">
        @csrf @method('PUT')
        <div class="form-group row">
            <label for="personname" class="col"> Name </label>
            <input type="text" id="roomnumber" class="form-control" name="name" placeholder="Name"

                   value={{$person->name}}
            />

        </div>
        <div class="form-group row">
            <label for="Phone" class="col"> Phone </label>
            <input type="text" id="Phone" class="form-control" name="phone" placeholder="Phone"

                   value={{$person->phone}}
            />

        </div>
        <div class="form-group row">
            <label for="address" class="col"> Address </label>
            <input type="text" id="address" class="form-control" name="address" placeholder="address"

                   value={{$person->address}}
            />

        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update Person</button>
            </div>
        </div>
    </form>
</div>