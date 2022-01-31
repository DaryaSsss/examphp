@extends('layouts.layout')
@section('content')
<h1>Регистрация</h1>
<form action="/registration" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Имя</label>
      <input required type="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input required type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn" style="background-color: #E6E6FA">Зарегистрироваться</button>
  </form>
@endsection