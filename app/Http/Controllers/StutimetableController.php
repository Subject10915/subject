<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class StutimetableController extends Controller
{
    //
    public function index()
    {

        return view('timetable.student');
    }
}
