@extends('layouts.main')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Published year</th>
      <th scope="col">Status</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->title }}</td>
      <td>{{ $book->published }}</td>
      <td>{{ $book->status->name }}</td>
      <td>{{ $book->author }}  </td>
      
      <td style="display:flex"><div><a href="{{ url('/edit/'.$book->id) }}" class="btn btn-primary">Edit</a>
</div>
        <form action="{{ url('/delete/'.$book->id) }}" method="POST">
          {{ method_field('DELETE')}}
          {{ csrf_field() }}
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection