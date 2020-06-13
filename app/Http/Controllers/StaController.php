<?php

namespace App\Http\Controllers;

use App\Book;
use App\Detect;
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
Use App\Schedule;
Use Carbon\Carbon;

use Illuminate\Http\Request;
ini_set("max_execution_time", "1200");
class StaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detestore(Request $request)
    {
        $url= 'https://api.thingspeak.com/channels/1080631/fields/1.json?timezone=Asia/Taipei&results=2';
        $contents =file_get_contents($url);
        $NewString=preg_split('/,/',$contents);
        if($NewString[13] == '"field1":"1"}]}')
            $st ='1';
        else
            $st ='0';

        $stas =new Sta();
        $stas->user_id = '4';
        $stas->room_id = '13';
        date_default_timezone_set("Asia/Shanghai");
        $stas->indaretime=date('Y-m-d H:i:s');
        $stas->outdatetime=date('Y-m-d H:i:s');
        $stas->immediate=$st;
        $stas->door='0';
        $stas->buzzer='0';

        $stas->save();
        return view('admin.status.detect1');
    }

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

        $n = 0;
        $datetime = Carbon::now();      //定義日期
        $time = date("H:i:s");      //定義時間

        $users = User::all();
        $rooms = Room::all();
        $items = Item::all();
        $stas = Sta::orderBy('id')->get();
        $students = Student::all();
        $studentitems = Studentitem::all();
        $stutimetables = StuTimetable::all();
        $books = Book::all();
        $courses = Course::all();
        $classitems = Classitem::all();
        $classtimetables = Classtimetable::all();
        $grades = Grade::all();
        $detects = Detect::all();
        $schedules = Schedule::all();
        $data = [
            'users'=>$users,
            'rooms'=>$rooms,
            'items'=>$items,
            'stas'=>$stas,
            'students'=>$students,
            'studentitems'=>$studentitems,
            'stutimetables'=>$stutimetables,
            'books'=>$books,
            'courses'=>$courses,
            'classitems'=> $classitems,
            'classtimetables'=> $classtimetables,
            'grades'=>$grades,
            'detects' =>$detects,
            'schedules' => $schedules
        ];
        //新增 上課教室 或 預約教室 的使用者
        foreach($users as $user) {
            foreach($students as $student) {
                foreach ($rooms as $room) {
                    if ($user->id == 3 && $user->id == $student->user_id) {
                        foreach ($courses as $course) {
                            foreach ($studentitems as $studentitem) {
                                foreach ($classitems as $classitem) {
                                    foreach ($stutimetables as $stutimetable) {
                                        foreach ($classtimetables as $classtimetable) {
                                            if (($course->id == $classitem->course_id && $course->id == $studentitem->coure_id) && $classtimetable->id == $classitem->class_timetable_id && $stutimetable->id == $studentitem->stu_timetable_id && ($room->id == $course->room_id && $room->id == $classtimetable->room_id)) {
                                                foreach ($schedules as $schedule) {
                                                    if (Carbon::now()->between($schedule->starttime, $schedule->endtime) && (date("w") == $stutimetable->day && $classtimetable->day) && ($schedule->id == $stutimetable->session && $stutimetable->session == $classtimetable->session)) {
                                                        foreach ($stas as $sta)
                                                        {
                                                            //設定不會新增相同的資料  0表示無 1表示有
                                                            if ($sta->user_id == 3 && Carbon::now()->between($sta->indaretime, $sta->outdatetime)) {
                                                                $num += 1;
                                                            }
                                                            else {
                                                                $num += 0;
                                                            }
                                                        }
                                                        if ($num < 1)
                                                        {
                                                            $date = date("Y-m-d");
                                                            $time = $sta->outdatetime;

                                                            $stas = new Sta;
                                                            $stas->user_id = $user->id;
                                                            $stas->room_id = $room->id;
                                                            $stas->indaretime = Carbon::now();
                                                            $stas->outdatetime = Carbon::create($date, $time);
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
                    }
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
                                            foreach ($detects as $detect)
                                            {
                                                if(($detect->time>=$book->indatetime&& $detect->time<=$book->outdatetime) && $n==0 && $detect->detect==1)
                                                {
                                                    $n += 1 ;
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
            }
        }
        //判斷教室使用狀態
        foreach ($stas as $sta)
        {
            $stanum = $sta->id;
            $hms = 0;
            foreach ($detects as $detect)
            {
                //偵測教室使用時間
                if (($datetime>=$sta->indaretime && $datetime >=$sta->outdatetime) && $detect->detect==0 && $hms==0)
                {

                    $hms += 1;
                    $stas = Sta::find($stanum);
                    $stas->immediate = '已關閉電源';
                    $stas->door=0;
                    $stas->save();
                }
                //偵測教室使用時間是否已超過
                if (($datetime>=$sta->indaretime && $datetime >=$sta->outdatetime) && $detect->detect==1 && $stas->door=1 && $hms==0)
                {
                    $hms += 1;
//                        $a = buzzer_function("H");
                    $stas = Sta::find($stanum);
                    $stas->immediate = '已過使用時間';
                    $stas->buzzer=1;
                    $stas->save();
                }
            }
        }
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
        $stas->door=0;
        $stas->buzzer=0;
        $stas->immediate = '已關閉電源';
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
