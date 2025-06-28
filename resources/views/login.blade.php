@extends('layout')
@section('title','Login')
@section('content')
<form  action="{{route('login.submit')}}" method="POST" class="row justify-content-center align-items-center g-2 mt-4">
@csrf
<h2 class="col-md-6 center m-2">Login Form</h2>
<div  class="col-md-6 center m-2">
   @if($errors->any())
   <ul>
      @foreach ( $errors->all() as $error )
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
   </ul>
   @endif

   @error('email')
       {{$message}}
   @enderror
</div>
<div class="col-md-6 m-2">
   <label for="email" class="form-label">Email<span class="star">*</span></label>
   <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="abc@gmail.com ">    
</div>
<div class="col-md-6 m-2">
   <label for="password" class="form-label">Password <span class="star">*</span></label>
   <input type="password"   name="password" id="password" class="form-control" placeholder="test">
</div>
<div class="col-md-6 ">
   <button type="submit" class="btn btn-primary"> Login</button>
   <button type="reset" class="btn btn-secondary"> Reset</button>
</div>
@endsection