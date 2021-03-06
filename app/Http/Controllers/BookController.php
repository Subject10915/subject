<?php

namespace App\Http\Controllers;

use App\Book;
use App\Item;
use App\Room;
use App\User;
use App\Sta;
use DB;

use DemeterChain\B;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('books.index');
    }

    public function transfer()
    {
        //
        return view('books.transfer');
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
        $user=$request->user();
        DB::transaction(function () use ($user,$request){
            $book=new Book;
            $book->user_id=$user->id;
            $book->indatetime=$request->indatetime;
            $book->outdatetime=$request->outdatetime;
            $book->count=$request->count;
            $book->reason=$request->reason;
            $book->save();

            $room_id=$request->name;
            $item = new Item;
            $item->book_id = $book->id;
            $item->room_id = $room_id;
            $item->save();
        });
        return view('books.bookok');

    }

    public function transferstore(Request $request)
    {
        //
        $user=$request->user();
        DB::transaction(function () use ($user,$request){
            $book=new Book;
            $book->user_id=$user->id;
            $book->indatetime=$request->indatetime;
            $book->outdatetime=$request->outdatetime;
            $book->count=$request->count;
            $book->reason=$request->reason;
            $book->save();

            $room_id=$request->name;
            $item = new Item;
            $item->book_id = $book->id;
            $item->room_id = $room_id;
            $item->save();
        });
        return view('books.transfer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('books.booksearchshow',$data);
    }

    public function ownshow(Request $request)
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('searchs.book',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public function search()
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('books.roombook',$data);
    }

    public function roomsta()
    {
        //

        /*$url= 'https://api.thingspeak.com/channels/1080631/fields/1.json?timezone=Asia/Taipei&results=2';
        $contents =file_get_contents($url);
        $NewString=preg_split('/,/',$contents);
        if($NewString[13] == '"field1":"1"}]}')
            $st ="have person";
        else
            $st ="no one";*/

        //$users = User::all();
        //$rooms = Room::all();
        //$stas = Sta::orderBy('id')->get();
        //$data = ['rooms'=>$rooms,'users'=>$users,'stas'=>$stas];
        return view('books.roomsta');
    }

    public function roomstashow(Request $request)
    {
        //
        $users = User::all();
        $rooms = Room::all();
        $stas = Sta::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'stas'=>$stas];
        return view('books.roomstashow',$data);
    }

    public function adminindex()
    {
        //
        $users = User::all();
        $items = Item::all();
        $rooms = Room::all();
        $books = Book::orderBy('id')->get();
        $data = ['rooms'=>$rooms,'users'=>$users,'items'=>$items,'books'=>$books];
        return view('admin.book.index',$data);
    }

    public function admincreate()
    {
        //
        return view('admin.book.create');
    }

    public function adminstore(Request $request)
    {
        //
        $user=$request->user();
        DB::transaction(function () use ($user,$request){
            $book=new Book;
            $book->user_id=$user->id;
            $book->indatetime=$request->indatetime;
            $book->outdatetime=$request->outdatetime;
            $book->count=$request->count;
            $book->reason=$request->reason;
            $book->save();

            $room_id=$request->room_id;
            $item = new Item;
            $item->book_id = $book->id;
            $item->room_id = $room_id;
            $item->save();
        });

        return redirect()->route('admin.book.index');
    }

    public function adminshow($id)
    {
        //
        $books=Book::find($id);
        $users = User::all();
        $items=Item::all();
        $rooms=Room::orderBy('id')->get();
        $data=['books'=>$books,'users'=>$users,'items'=>$items,'rooms'=>$rooms];
        return view('admin.book.delete',$data);
    }

    public function adminedit($id)
    {
        $books=Book::find($id);
        $data=['books'=>$books];
        return view('admin.book.edit',$data);
    }

    public function adminupdate(Request $request,$id)
    {
        $books=Book::find($id);
        $books->update($request->all());
        return redirect()->route('admin.book.index');
    }

    public function admindestroy($id)
    {
        Book::destroy($id);
        return redirect()->route('admin.book.index');
    }
}
