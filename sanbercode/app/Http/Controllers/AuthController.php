<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
      return view('form');
    }

    public function final(Request $request)
    {
      $namadepan = $request['name'];
      $namabelakang = $request['name1'];

      return view('final', compact('namadepan', 'namabelakang'));
    }
}
