<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table='film';
    protected $filllable = ['judul', 'ringkasan', 'tahun', 'poster'];
}