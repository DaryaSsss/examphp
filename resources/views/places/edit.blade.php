@extends('layouts.layout')
@section('content')
<form action="/places/update/{{$place->id}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Название</label>
      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$place->name}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Описание</label>
      <input type="text" class="form-control" id="description" name="description" value="{{$place->description}}">
    </div>
    <div class="mb-3">
        <label for="repair" class="form-label">Специальное место</label>
        <input type="checkbox"  id="repair" name="repair" @if($place->repair==1) checked @endif>
      </div>
      <div class="mb-3">
        <label for="work" class="form-label">В работе</label>
        <input type="checkbox"  id="work" name="work" @if($place->work==1) checked @endif>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection