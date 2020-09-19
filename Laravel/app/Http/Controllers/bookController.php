<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Http\Response;

class bookController extends Controller
{
    //TODO:add,update,createなどは(FormRequestをつくり)バリデーション追加
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index',compact('books'));
        //読み込み方がおかしいのでとりあえず修正。バグったら戻す
//        return view('book/index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->action === "back"){
            return redirect()->route('book.index');
        } else {
            $book = new Book;
            //TODO:DBとやり取りする処理はモデルに書いてMVCの役割を明確にさせる
            $book->name = $request->name;
            $book->del = $request->del;
            $book->save();
            return redirect()->route('book.index');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::find($id);
        return view('book.show',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Book::find($id);
        return view('book.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        if($request->action === 'back'){
            return redirect()->route('book.index');
        } else {
            $book = Book::find($id);
//            $book = new Book;
            $book->name = $request->name;
            $book->del = $request->del;
            $book->save();
            return redirect()->route('book.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Book::find($id);
        $books ->delete();
        return redirect()->route('book.index'); 
    }
}
