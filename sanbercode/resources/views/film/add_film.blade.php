@extends('page')
@section('judul')
Add Film
@endsection
@section('content')

<form action="/add_film" method="POST">
  @csrf
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" placeholder="Judul">
  </div>
  @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Ringkasan</label>
    <input type="text" name="ringkasan" class="form-control" placeholder="ringkasan">
  </div>
  @error('ringkasan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Poster</label>
    <input type="text" name="poster" class="form-control" placeholder="poster">
  </div>
  @error('poster')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  <div class="form-group">
    <label>Tahun</label>
    <input type="text" name="tahun" class="form-control" placeholder="tahun">
  </div>
  @error('tahun')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
 {{--  <div class="form-group">
    <label>Genre</label>
    <input type="text" name="genre" class="form-control" placeholder="genre">
  </div>
  @error('genre')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror --}}
  <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection