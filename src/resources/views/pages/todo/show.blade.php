@extends('layouts.application')

@section('title', 'Todo App')

@section('content')
  <p><a href="/todo">back</a></p>
  <div>{{ $todo["content"] }}</div>
@endsection
