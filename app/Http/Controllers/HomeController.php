<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = books::all();
        return view('home',compact('books'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $book = new books;
        $book->title = $request->get('title');
        $book->description = $request->get('description');
        $book->qty = $request->get('qty');
        $book->publisher = $request->get('publisher');
        $book->save();
        
        return redirect('home')->with('success', 'Data buku telah ditambahkan');       

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = books::find($id);
        return view('edit',compact('book','id'));       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book= books::find($id);
        $book->title = $request->get('title');
        $book->description = $request->get('description');
        $book->qty = $request->get('qty');
        $book->publisher = $request->get('publisher');
        $book->save();
        return redirect('home')->with('success', 'Data buku telah diubah');       
   

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = books::find($id);
        $book->delete();
        return redirect('home')->with('success','Data buku telah di hapus');

    }
}
