@extends('layouts.layout')
@section('content')
<h2>Мои вещи</h2>
@if(!sizeof($things))У вас нет вещей!@endif
@foreach($things as $thing)
    Название: {{$thing->name}} <br> Описание: {{$thing->description}} <br> Гарантия: {{$thing->wrnt}} <br>
    Действия:
    <a href="things/delete/{{$thing->id}}" style="color: #9370DB; text-decoration: none;" >Удалить</a>
    <a href="things/update/{{$thing->id}}" style="color: #9370DB; text-decoration: none;">Изменить</a>
    <a href="/usages/{{$thing->id}}" style="color: #9370DB; text-decoration: none;">Изменить состояние хранения</a>
    <hr>
<br>
@endforeach
@endsection
