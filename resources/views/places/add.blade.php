@extends('layouts.layout')
@section('content')
<form action="/places" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Название</label>
      <input required type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Описание</label>
      <input required type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="repair" class="form-label">Специальное место</label>
        <input type="checkbox" id="repair" name="repair">
      </div>
      <div class="mb-3">
        <label for="work" class="form-label">В работе</label>
        <input type="checkbox"  id="work" name="work">
      </div>
    <button type="submit" class="btn btn" style="background-color: #E6E6FA">Создать</button>
  </form>
@endsection