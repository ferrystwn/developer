@extends('page')
@section('judul')
Add Film
@endsection
@section('content')
<p>{{$filmdetail->judul}}</p>
<p>{{$filmdetail->ringkasan}}</p>
<p>{{$filmdetail->poster}}</p>
<p>{{$filmdetail->tahun}}</p>


<a href="/film" class="btn btn-secondary btn-sm">Back</a>

@endsection