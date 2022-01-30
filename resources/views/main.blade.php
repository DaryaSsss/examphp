@extends('layouts.layout')
@section('content')
        <h2>Вещи в использовании</h2>
        @if(!sizeof($usages))Вещей в использовании на данный момент нет.@endif
        @foreach($usages as $usage)
        <p>{{$usage->thing->name}} находится в {{$usage->place->name}} у {{$usage->user->name}} в количестве {{$usage->amount}}</p>
        <hr class="hr-horizontal-gradient">
        @endforeach
@endsection
<style>
.hr-horizontal-gradient {
	margin: 20px 0;
	padding: 0;
	height: 6px;
	border: none;
	background: linear-gradient(45deg, #9370DB, #E6E6FA);
}
</style>