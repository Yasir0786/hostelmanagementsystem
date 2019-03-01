<?php

namespace App\Http\Controllers;

use App\person;
use App\Room;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::orderby('id')->paginate(10);
        return view('people.index')->with('people', $person);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rm=Room::all();
        return view('people.create')->with('rooms',$rm);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = Person::create($request->all());
        if(!$person->exists)
            return redirect(route('people.create'))->with('status', 'creation failed');

        else
            return redirect(route('people.index') )->with('status','Person created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(person $person)
    {
        return view('people.edit')->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, person $person)
    {
        $person->update($request->all());
        return redirect(route('people.index'))->with('status', 'updated successfully')->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(person $person)
    {
        Person::destroy($person->id);
        return redirect()->route('people.index')->with('status', 'successfully deleted');
    }
}
