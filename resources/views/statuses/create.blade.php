@extends('layouts.main')

@section('content')

<h1>Adding status here</h1>
<form method="POST" action="{{ url('/add-status') }}">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="type status">
  </div>

  <button class="btn btn-primary mt-3">Submit</button>
</form>
@endsection