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
ini_set("max_execution_time", "300");
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
        //連接Arduino
        function openSerial($command)
        {
            $openSerial = false;
            try
            {
                exec("mode com3: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
                $fopen =fopen("com3", "w");    //fopen 函數可以用來開啟文件或 URL 內容  //"w" 以寫入模式開啟  //"w+" 以讀寫模式開啟
                $openSerial = true;
            }
            catch(Exception $e)     // 捕獲異常
            {
                echo 'Message: ' .$e->getMessage();
            }

            if($openSerial)
            {
                fwrite($fopen, $command); //fwrite() 函數寫入文件 -> fwrite(file,string,length) //file 必需。規定要寫入的打開文件 //string 必需。規定要寫入文件的字符串 //length 可選。規定要寫入的最大字節數
                fclose($fopen);           //fclose() 函數關閉一個打開文件 -> fclose(file) //file 必需。規定要關閉的文件
            }
        }
        openSerial("Without this line, the first control will not work. I don't know way.");

        function buzeer_function($a)
        {
            if($a=="H")
            {
                openSerial("H");
                return ($a);
            }
        }

        $num=0;
        $stanum=0;
        $n = 0;
//        $$tt = 0;
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
                                            foreach ($detects as $detect)
                                            {
                                                $datetime = $detect->time;
//                                                if($datetime->between($book->indatetime, $book->outdatetime) && $n==0)
                                                if(($datetime->between($book->indatetim,$book->outdatetime)) && $n==0 && $detect->detect==1)
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
                        $a = buzzer_function("H");
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
