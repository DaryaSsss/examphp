@extends('layouts.layout')
@section('content')
<form action="/things/update/{{$thing->id}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Название</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$thing->name}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Описание</label>
      <input type="text" class="form-control" id="description" name="description" value="{{$thing->description}}">
    </div>
    <div class="mb-3">
        <label for="wrnt" class="form-label">Гарантия</label>
        <input type="date" class="form-control" id="wrnt" name="wrnt" value="{{$thing->wrnt}}">
      </div>
    <button type="submit" class="btn btn" style="background-color: #E6E6FA">Изменить</button>
  </form>
@endsection