<?php

namespace App\Http\Controllers;

use App\Book;
use App\Sta;
use App\Item;
use App\User;
use App\Room;

use Illuminate\Http\Request;

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
        $items = Item::all();
        $rooms = Room::all();
        $stas = Sta::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'stas'=>$stas];
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sta  $sta
     * @return \Illuminate\Http\Response
     */
    public function show(Sta $sta)
    {
        //
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
