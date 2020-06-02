<?php

namespace App\Http\Controllers;

use App\Change;
use App\Classitem;
use App\Classtimetable;
use App\Course;
use App\Room;
use App\StuTimetable;
use App\User;
use App\Studentitem;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        $courses =Course::all();
        $stutimetables = StuTimetable::orderBy('id')->get();
        $studentitems = Studentitem::all();
        $rooms = Room::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'courses'=>$courses ,'users'=>$users,'stutimetables'=>$stutimetables,'studentitems'=>$studentitems];
        return view('change.index',$data);
    }

    public function store(Request $request)
    {
        $user= $request->user();
        $change = new Change;
        $change ->user_id=$user->id;
        $change ->room_id = $request->room;
        $change ->course_id = $request->course;
        $change ->before_day= $request->before;
        $change ->before_session= $request->beforesession;
        $change ->after_day= $request->afterdate;
        $change ->after_session= $request->aftersession;
        $change ->save();

        return view('change.ok');
    }

    public function change( $id ,Course $course)
    {
        $users = User::all();
        $rooms = Room::all();
        $stutimetables = StuTimetable::all();
        $studentitems = Studentitem::all();
        $classitems = Classitem::all();
        $classtimetables = Classtimetable::orderBy('id')->get();
        $data = ['timeid'=>$id,'rooms'=>$rooms,'users'=>$users,'courses'=>$course ,'stutimetables'=>$stutimetables,'studentitems'=>$studentitems,'classitems'=>$classitems,'classtimetables'=>$classtimetables];
        return view('change.change',$data);
    }

    public function check(Request $request)
    {
        $user= $request->user();
        $change = new Change;
        $change ->user_id=$user->id;
        $change ->room_id = $request->room;
        $change ->course_id = $request->course;
        $change ->before_day= $request->before;
        $change ->before_session= $request->beforesession;
        $change ->after_day= $request->afterdate;
        $change ->after_session= $request->aftersession;
        $change ->save();

        $changes =Change::all();
        return view('change.check',$changes);
    }

    public function show(Request $request)
    {
        $users = User::all();
        $rooms = Room::all();
        $courses =Course::all();
        $changes = Change::all();
        $stutimetables = StuTimetable::all();
        $studentitems = Studentitem::all();
        $classitems = Classitem::all();
        $classtimetables = Classtimetable::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'courses'=>$courses,'changes'=>$changes,'stutimetables'=>$stutimetables,'studentitems'=>$studentitems,'classitems'=>$classitems,'classtimetables'=>$classtimetables];
        return view('change.show',$data);
    }
}
