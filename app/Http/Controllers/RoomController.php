<?php

namespace App\Http\Controllers;

use App\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('number')->paginate(10);
        return view('rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = Room::create($request->all());
        if(!$room->exists)
            return redirect(route('rooms.index') )->with('status','room not created');
        else
            return redirect(route('rooms.index'))->with('status', 'success')->withInput($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(room $room)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(room $room)
    {
        return view('rooms.edit')->with('room', $room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, room $room)
    {
        $room->update($request->all());
        return redirect(route('rooms.index'))->with('status', 'updated successfully')->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(room $room)
    {
        Room::destroy($room->id);
        return redirect()->route('rooms.index')->with('status', 'successfully deleted');
    }
}
