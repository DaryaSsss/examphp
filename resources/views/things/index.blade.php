@extends('layouts.layout')
@section('content')
<h2>Все вещи</h2>
@if(Auth::check())<a href="/things/add" style="color: #9370DB; text-decoration: none;"><h4>Создать вещь</h4></a>@endif
@foreach($things as $thing)
    <div>Название: {{$thing->name}} <br> Описание: {{$thing->description}} <br> Гарантия: {{$thing->wrnt}} <br> Создатель: {{$thing->user->name}} <br>
    Действия:
    <a href="things/delete/{{$thing->id}}" style="color: #9370DB; text-decoration: none;">Удалить</a>
    <a href="things/update/{{$thing->id}}" style="color: #9370DB; text-decoration: none;">Изменить</a></div>
    <hr>
@endforeach
@endsection
