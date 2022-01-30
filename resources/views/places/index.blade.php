@extends('layouts.layout')
@section('content')
<h2>Места хранения</h2>
@if(Auth::check())<a href="/places/add"><h5>Создать место</h5></a>@endif
@foreach($places as $place)
    <div>Название: {{$place->name}} <br> Описание: {{$place->description}} <br> Специальное место = @if($place->repair==1)Да @else Нет @endif <br> Рабочее место = @if($place->work==1)Да @else Нет @endif
    <br> Действия:
    <a href="places/delete/{{$place->id}}">Удалить</a>
    <a href="places/update/{{$place->id}}">Изменить</a></div>
    <hr>
@endforeach
@endsection