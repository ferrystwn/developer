@extends('page')
@section('judul')
Genre
@endsection
@section('content')
<a href="/genre/create" class="btn btn-primary btn-sm my-2">Add Genre</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genre as $key => $item)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$item->genre}}</td>
          <td>
            
            <form action="/genre/{{$item->id}}" method="POST">
              @csrf
              @method('delete')
              <a href="/genre/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
              <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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