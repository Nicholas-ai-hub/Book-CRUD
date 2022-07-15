@extends('layouts.main')

@section('content')

<h1>Adding books here</h1>
<form method="POST" action="{{ url('/create') }}">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control" placeholder="type title of book">
  </div>
 
 
  <div class="form-group">
    <label for="exampleFormControlInput1">Published</label>
    <input type="number" name="published" class="form-control" placeholder="type release year">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Author</label>
    <input type="text" name="author" class="form-control" placeholder="type name of author">
  </div>

    <select name="status_id" class="form-control" id="exampleFormControlSelect1">
        @foreach($statuses as $status)
      <option value="{{$status->id}}">{{ $status->name }}</option>
        @endforeach
    </select>

  

  <button class="btn btn-primary mt-3">Submit</button>
</form>
@endsection