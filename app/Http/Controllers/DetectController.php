<?php

namespace App\Http\Controllers;

use App\Detect;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DetectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$request->call(function (){
            $url= 'https://api.thingspeak.com/channels/1080631/fields/1.json?timezone=Asia/Taipei&results=2';
            $contents =file_get_contents($url);
            $NewString=preg_split('/,/',$contents);
            if($NewString[13] == '"field1":"1"}]}')
                $st ='1';
            else
                $st ='0';

            $detect =new Detect;
            $detect->detect=$st;
            date_default_timezone_set("Asia/Shanghai");
            $detect->time=date("Y-m-d");
            $detect ->save();
        //});

        //return view('welcome');
        /*$data=array(
                 'detect'=>$request->input('test'),
            'time'=>Carbon::now()

             );
        Detect::insert($data);
        return "1";
            return redirect()->route('admin.status.index');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detect  $detect
     * @return \Illuminate\Http\Response
     */
    public function show(Detect $detect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detect  $detect
     * @return \Illuminate\Http\Response
     */
    public function edit(Detect $detect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detect  $detect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detect $detect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detect  $detect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detect $detect)
    {
        //
    }
}
