<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;

class Filmcontroller extends Controller
{
  public function create()
  {
    return view('film.add_film');
  }

  public function store(Request $request)
    {
      $request->validate([
        'judul' => 'required',
        'ringkasan' => 'required',
        'poster' => 'required',
        'tahun' => 'required',
    ]);

    $film = new film;

    $film->judul = $request->judul;
    $film->ringkasan = $request->ringkasan;
    $film->poster = $request->poster;
    $film->tahun = $request->tahun;



    $film->save();
    return redirect('/film');
    
    }

    public function index()
    {
      $film = film::all();

      return view ('film.tampil_film', compact('film'));
    }

    public function show($id)
    {
      $filmdetail = film::find($id);

      return view ('film.detail_film', compact('filmdetail'));
    }

    public function edit($id)
    {
      $filmdetail = film::find($id);

      return view ('film.edit_film', compact('filmdetail'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
          'judul' => 'required',
          'ringkasan' => 'required',
          'poster' => 'required',
          'tahun' => 'required',
      ]);

      $film = film::find($id);

      $film->judul = $request->judul;
      $film->ringkasan = $request->ringkasan;
      $film->poster = $request->poster;
      $film->tahun = $request->tahun;

      $film->save();


      return redirect ('/film');
    }

    public function destroy($id)
    {
      $film = film::find($id)->delete();

      return redirect('/film');
    }
}
