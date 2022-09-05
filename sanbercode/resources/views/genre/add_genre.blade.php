@extends('page')
@section('judul')
Add Genre
@endsection
@section('content')

<form action="/add_genre" method="POST">
  @csrf
  <div class="form-group">
    <label>Genre</label>
    <input type="text" name="genre" class="form-control" placeholder="genre">
  </div>
  @error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection