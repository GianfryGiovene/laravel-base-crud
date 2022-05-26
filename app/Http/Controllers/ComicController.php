<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    // ---------main section controller-------------


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $navBar = config('headerNav');
        $comics = Comic::all();
        return view('main.index',compact('comics'),compact('navBar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $navBar = config('headerNav');
        return view('main.create',compact('navBar'));
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
        $comics = $request->all();

        $newComic = new Comic;
        $newComic->fill($comics);
        $newComic->save();


        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        $navBar = config('headerNav');
        return view('main.show',compact('comic'),compact('navBar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        $navBar = config('headerNav');
        return view('main.edit',compact('comic'),compact('navBar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $comics = $request->all();
        $comic->update($comics);

        return redirect()->route('comics.show', $comic->id);

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
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
