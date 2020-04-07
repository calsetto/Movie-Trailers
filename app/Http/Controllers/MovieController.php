<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Movie = Movie::paginate(6);
        return view('movieAdmin', compact('Movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'year'=>'required',
            'director'=>'required',
            'rate'=>'required',
            'image'=>'required',
            'description'=>'required',
            'cast'=>'required',
            'genre'=>'required',
            'link'=>'required'
        ]);

        $movie = new Movie();
        $movie->name = $request->name;
        $movie->year = $request->year;
        $movie->director = $request->director;
        $movie->rate = $request->rate;
        $movie->image = $request->image;
        $movie->description = $request->description;
        $movie->cast = $request->cast;
        $movie->genre = $request->genre;
        $movie->link = $request->link;
        $movie->save();
        return back()->with('mensaje', 'Movie added successfully!');

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
        $movie= Movie::findOrFail($id);
        return view('editMovie', compact('movie'));
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
        $request->validate([
            'name'=>'required',
            'year'=>'required',
            'director'=>'required',
            'rate'=>'required',
            'image'=>'required',
            'description'=>'required',
            'cast'=>'required',
            'genre'=>'required',
            'link'=>'required'
        ]);

        $movieUpdate = Movie::findOrFail($id);
        $movieUpdate->name = $request->name;
        $movieUpdate->year = $request->year;
        $movieUpdate->director = $request->director;
        $movieUpdate->rate = $request->rate;
        $movieUpdate->image = $request->image;
        $movieUpdate->description = $request->description;
        $movieUpdate->cast = $request->cast;
        $movieUpdate->genre = $request->genre;
        $movieUpdate->link = $request->link;

        $movieUpdate->save();
        return back()->with('mensajeUpdate', 'Movie edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleteMovie = Movie::findOrFail($id);
       $deleteMovie->delete();
       return back()->with('mensajeDelete', 'Movie deleted successfully!');
    }
}
