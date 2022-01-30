@extends('layouts.layout')
@section('content')
<form action="/things" method="POST">
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
        <label for="wrnt" class="form-label">Гарантия</label>
        <input required type="date" class="form-control" id="wrnt" name="wrnt">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection