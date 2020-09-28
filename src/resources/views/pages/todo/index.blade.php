@extends('layouts.application')

@section('title', 'Todo App')

@section('content')
  <form method="POST">
    @csrf
    <input type="text" name="content">
    <button type="submit">add</button>
  </form>
  @if (count($todoList) > 0)
    <table>
      @foreach($todoList as $todo)
        <tr>
          <td>{{$todo["content"]}}</td>
          <td>
            <a href="/todo/{{$todo["id"]}}">detail</a>
          </td>
          <td>
            <form method="post" action="/todo/{{$todo["id"]}}/delete">
              @csrf
              <button type="submit">delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  @else
    <p>contant not found</p>
  @endif

@endsection
