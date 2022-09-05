@extends('page')
@section('judul')
Edit Genre
@endsection
@section('content')

<form action="/genre/{{$genredetail->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="nama" class="form-control" placeholder="nama">
  </div>
  @error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection