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
        $data=array(
                 'detect'=>$request->input('test'),
            'time'=>Carbon::now()

             );
        Detect::insert($data);
        return "1";
//            return redirect()->route('admin.status.index');
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
