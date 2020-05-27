<?php

namespace App\Http\Controllers;

use App\Studentitem;
use App\Course;
use App\StuTimetable;
use App\User;
use Illuminate\Http\Request;

class StutimetableController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $studentitems = Studentitem::orderBy('id')->get();
        $courses = Course::all();
        $stutimetables = StuTimetable::orderBy('id')->get();
        $data = ['studentitems'=>$studentitems,'users'=>$users,'courses'=>$courses,'stutimetables'=>$stutimetables];
        return view('timetable.student',$data);
    }
}
