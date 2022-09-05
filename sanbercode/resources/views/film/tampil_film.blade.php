@extends('page')
@section('judul')
Film
@endsection
@section('content')
<a href="/film/create" class="btn btn-primary btn-sm my-2">Add Film</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Ringkasan</th>
      <th scope="col">Poster</th>
      <th scope="col">Tahun</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($film as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$item->judul}}</td>
          <td>{{$item->ringkasan}}</td>
          <td>{{$item->poster}}</td>
          <td>{{$item->tahun}}</td>
          <td>
            
            <form action="/film/{{$item->id}}" method="POST">
              @csrf
              @method('delete')
              <a href="/film/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
              <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
          </td>
        </tr>
    @empty
        <h1>Data Not Found</h1>
    @endforelse
  </tbody>
</table>
@endsection