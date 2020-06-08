<?php

namespace App\Http\Controllers;

use App\Book;
use App\Sta;
use App\Item;
use App\User;
use App\Room;
use App\Grade;
use App\Student;
Use App\Studentitem;
Use App\StuTimetable;
Use App\Course;
Use App\Classitem;
Use App\Classtimetable;

Use Carbon\Carbon;

use Illuminate\Http\Request;
ini_set("max_execution_time", "300");
class StaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $rooms = Room::all();
        $stas = Sta::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'stas'=>$stas];
        return view('admin.status.index',$data);
    }

    public function search()
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('admin.status.search',$data);
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
    //顯示資料
    public function detectshow()
    {
        $num=0;
        $stanum=0;
//        $session1=date("H:i:s");
//        $session2=date("H:i:s");
        $datetime = Carbon::now();      //定義日期
        $time = date("H:i:s");      //定義時間
        $hms = '0';
        $datetime1 = Carbon::create(null, null, null, 13, 10, 00);
        $datetime2 = Carbon::create(null, null, null, 16, 00, 00);
//        $hour = 'null';
//        $minute = 'null';
//        $second = 'null';

        //設定定義上課時間(時、分、秒)陣列 1~8節
        $starttime=array('08:10:00','09:10:00','10:10:00','11:10:00','13:10:00','14:10:00','15:10:00','17:10:00','18:10:00');

        //設定定義下課時間(時、分、秒)陣列 1~8節
        $endtime=array('09:00:00','10:00:00','11:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:55:00');


        //設定定義下課時間(分、秒)陣列 1~8節
        //$ms=array('00','10');

        $users = User::all();
        $rooms = Room::all();
        $items = Item::all();
        $stas = Sta::orderBy('id')->get();
        $students = Student::all();
        $studentitems = Studentitem::all();
        $stuTimetables = StuTimetable::all();
        $books = Book::all();
        $courses = Course::all();
        $classitems = Classitem::all();
        $classtimetables = Classtimetable::all();
        $grades = Grade::all();
        $data = [
            'users'=>$users,
            'rooms'=>$rooms,
            'items'=>$items,
            'stas'=>$stas,
            'students'=>$students,
            'studentitems'=>$studentitems,
            'stuTimetables'=>$stuTimetables,
            'books'=>$books,
            'courses'=>$courses,
            'classitems'=> $classitems,
            'classtimetables'=> $classtimetables,
            'grades'=>$grades
        ];
        //新增 上課教室 或 預約教室 的使用者
        foreach($users as $user) {
            foreach($students as $student) {
                foreach ($rooms as $room) {
//                    foreach($studentitems as $studentitem) {
//                        foreach ($stuTimetables as $stuTimetable) {
//                            for($i=0;$i<=7;$i++)
//                            {
//                                $hms = $starttime[$i];
//                                $datetime = Carbon::create(null, null, null, $hms);
//                                if(date("w") == $stuTimetable->day && Carbon::now()->between($datetime1, $datetime2)   && $user->id == 4 && $user->id == $student->use_id && $user->id == $stuTimetable->uesr_id && $stuTimetable->id == $studentitem->stu_timetable_id)
//                                {
//                                    foreach ($courses as $course) {
//                                        foreach ($classitems as $classitem) {
//                                            foreach ($classtimetables as $classtimetable) {
//                                                if ($course->id == $classitem->course_id && $classitem->classtimetable_id == $classtimetable->id && $classtimetable->room_id == $room->id)
//                                                {
//                                                    foreach ($stas as $sta)
//                                                    {
//                                                        //設定不會新增相同的資料  0表示無 1表示有
//                                                        if ($sta->user_id == 4 && Carbon::now()->between($sta->indaretime, $sta->outdatetime)) {
//                                                            $num += 1;
//                                                        }
//                                                        else {
//                                                            $num += 0;
//                                                        }
//                                                    }
//                                                    if ($num < 1)
//                                                    {
//                                                        foreach ($studentitems as $studentitem)
//                                                        {
//                                                            if ($user->id == 4 && $classitem->course_id == $course->id)
//                                                            {
//                                                                for ($j=0 ;$j<=7 ;$j++)
//                                                                {
//                                                                    if ($stuTimetable->session == ($j+1) )
//                                                                    {
//                                                                        $time = $endtime[$j];
//                                                                    }
//                                                                }
//                                                            }
//                                                        }
//                                                        $date = date("Y-m-d");
//
//                                                        $stas = new Sta;
//                                                        $stas->user_id = $user->id;
//                                                        $stas->room_id = $room->id;
//                                                        $stas->indaretime = Carbon::now();
//                                                        $stas->outdatetime = Carbon::create($date, $time);
//                                                        $stas->immediate = '電源已打開';
//                                                        $stas->door = 1;
//                                                        $stas->buzzer = 0;
//                                                        $stas->save();
//                                                    }
//                                                }
//                                            }
//                                        }
//                                    }
//                                }
//                            }
//                        }
//                    }
                    //新增預約使用者
                    foreach ($grades as $grade) {
                        if (($user->id == 1 xor $user->id == 2 xor $user->id == 3 xor $user->id == 4) && $user->id == $student->user_id && $grade->id == $student->grade_id) {
                            foreach ($books as $book) {
                                foreach ($items as $item) {
                                    if ($book->user_id == $user->id && Carbon::now()->between($book->indatetime, $book->outdatetime) && $item->book_id == $book->id && $item->room_id == $room->id) {
                                        foreach ($stas as $sta) {
                                            //設定不會新增相同的資料 0表示無 1表示有
                                            if (Carbon::now()->between($sta->indaretime, $sta->outdatetime) && ($item->room_id == $sta->room_id && $sta->user_id == $book->user_id)) {
                                                $num += 1;
                                            }
                                            else {
                                                $num += 0;
                                            }
                                        }
                                        if($num < 1)
                                        {
                                            $stas = new Sta;
                                            $stas->user_id = $user->id;
                                            $stas->room_id = $room->id;
                                            $stas->indaretime = Carbon::now();
                                            $stas->outdatetime = $book->outdatetime;
                                            $stas->immediate = '電源已打開';
                                            $stas->door = 1;
                                            $stas->buzzer = 0;
                                            $stas->save();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        //判斷教室使用狀態
//        foreach ($stas as $sta)
//        {
//            $stanum += 1;
//            for ($i=1 ; $i <= $stanum ; $i++)
//            {
//                if ($datetime->between($sta->indaretime, $sta->outdatetime))
//                {
//                    $stas = Sta::find($i);
//                    $stas->save();
//                }
//                else
//                {
//                    $stas = Sta::find($i);
//                    $stas->immediate='已關閉電源';
//                    $stas->door=0;
//                    $stas->save();
//                }
//            }
//        }
        return view('admin.status.detect',$data);
    }
    //在 StaController 的 edit 編輯資料頁面
    public function detectedit($id)
    {
        $stas = Sta::find($id);
        $data = ['sta' => $stas];
        return view('admin.status.detectedit', $data);
    }
    //在 StaController 的 update 內更新資料
    public function detectupdate(Request $request,$id)
    {
        $stas = Sta::find($id);
        $stas->buzzer=0;
        $stas->update($request->all());
        return redirect()->route('admin.status.detect');
    }

    public function store(Request $request)
    {
        $user=$request->user();
        DB::transaction(function () use ($user,$request){
            $stas=new Sta;
            $stas->user_id = $user->id;
            $stas->indaretime=$request->indatetime;
            $stas->outdatetime=$request->outdatetime;
            $stas->count=$request->count;
            $stas->immediate=$request->immdiate;
            $stas->door=$request->door;
            $stas->buzzer=$request->buzzer;

            $room_id=$request->name;
            $stas->room_id = $room_id;
            $stas->save();

            return redirect()->route('admin.status.index');
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sta  $sta
     * @return \Illuminate\Http\Response
     */
    public function indexshow(Request $request)
    {
        //
        $users = User::all();
        $rooms = Room::all();
        $stas = Sta::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'stas'=>$stas];
        return view('admin.status.indexshow',$data);
    }

    public function searchshow(Request $request)
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('admin.status.searchshow',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sta  $sta
     * @return \Illuminate\Http\Response
     */
    public function edit(Sta $sta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sta  $sta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sta $sta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sta  $sta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sta $sta)
    {
        //
    }
}
