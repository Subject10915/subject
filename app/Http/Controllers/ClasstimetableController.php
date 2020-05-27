<?php

namespace App\Http\Controllers;

use App\Classitem;
use App\Classtimetable;
use App\Room;
use App\Course;
use Illuminate\Http\Request;

class ClasstimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('searchs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classtimetable  $classtimetable
     * @return \Illuminate\Http\Response
     */
    public function show(Classtimetable $classtimetable)
    {
        //
        $rooms =Room::all();
        $classitems = Classitem::all();
        $courses = Course::all();
        $classtimetables = Classtimetable::orderBy('id')->get();
        $data = ['classitems'=>$classitems,'rooms'=>$rooms,'courses'=>$courses,'classtimetables'=>$classtimetables];
        return view('timetable.class',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classtimetable  $classtimetable
     * @return \Illuminate\Http\Response
     */
    public function edit(Classtimetable $classtimetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classtimetable  $classtimetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classtimetable $classtimetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classtimetable  $classtimetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classtimetable $classtimetable)
    {
        //
    }
}
