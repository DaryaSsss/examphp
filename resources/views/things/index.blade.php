@extends('layouts.layout')
@section('content')
<h2>Все вещи</h2>
@if(Auth::check())<a href="/things/add"><h5>Создать вещь</h5></a>@endif
@foreach($things as $thing)
    <div>Название: {{$thing->name}} <br> Описание: {{$thing->description}} <br> Гарантия: {{$thing->wrnt}} <br> Создатель: {{$thing->user->name}} <br>
    Действия:
    <a href="things/delete/{{$thing->id}}">Удалить</a>
    <a href="things/update/{{$thing->id}}">Изменить</a></div>
    <hr>
@endforeach
@endsection
