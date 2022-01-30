@extends('layouts.layout')
@section('content')
<form action="/usages/{{$thing->id}}" method="POST">
    @csrf
    <div class="mb-3">
    <h3> Отправить вещь {{$thing->name}} на хранение</h3>
    </div>
    <div class="mb-3">
      <label for="place" class="form-label">Место</label>
      <select name="place_id">
        @foreach($places as $place)
        <option value = {{$place->id}}>{{$place->name}}</option>
        @endforeach
    </select>
      
    </div>
    <div class="mb-3">
        <label for="user" class="form-label">Кому отдать</label>
        <select name="user_id">
            @foreach($users as $user)
            <option value = {{$user->id}}>{{$user->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="amount" class="form-label">Количество</label>
        <input required type="number" id="amount" name="amount" min="1">
      </div>
      <input type="text" id="thing" name="thing_id" value={{$thing->id}} hidden>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection