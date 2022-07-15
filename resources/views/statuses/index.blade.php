@extends('layouts.main')

@section('content')

<h2>Statuses</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($statuses as $status)
    <tr>
      <th scope="row">{{ $status->id }}</th>
      <td>{{ $status->name }}</td>
      <td>{{ $status->created_at->diffForHumans() }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection