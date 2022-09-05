@extends('page')
@section('judul')
Add Genre
@endsection
@section('content')
<p>{{$genredetail->genre}}</p>


<a href="/genre" class="btn btn-secondary btn-sm">Back</a>

@endsection