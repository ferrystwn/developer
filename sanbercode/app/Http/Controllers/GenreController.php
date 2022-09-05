<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genre;

class Genrecontroller extends Controller
{
  public function create()
  {
    return view('genre.add_genre');
  }

  public function store(Request $request)
    {
      $request->validate([
        'nama' => 'required',
    ]);

    $genre = new genre;

    $genre->nama = $request->nama;



    $genre->save();
    return redirect('/genre');
    
    }

    public function index()
    {
      $genre = genre::all();

      return view ('genre.tampil_genre', compact('genre'));
    }

    public function show($id)
    {
      $genredetail = genre::find($id);

      return view ('genre.detail_genre', compact('genredetail'));
    }

    public function edit($id)
    {
      $genredetail = genre::find($id);

      return view ('genre.edit_genre', compact('genredetail'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
          'nama' => 'required',
          
      ]);

      $genre = genre::find($id);

      $genre->nama = $request->nama;

      $nama->save();


      return redirect ('/genre');
    }

    public function destroy($id)
    {
      $genre = genre::find($id)->delete();

      return redirect('/genre');
    }
}
