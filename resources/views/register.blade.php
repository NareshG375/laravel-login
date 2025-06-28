@extends('layout')

@section('title','Register')

@section('content')


 <form  action="{{route('register.submit')}}" method="POST" class="row justify-content-center align-items-center g-2 mt-4">
     @csrf
  
    <h2 class="col-md-6 center m-2">Registration Form</h2>
      <div  class="col-md-6 center m-2">
    @if($errors->any())
    <ul>
        @foreach ( $errors->all() as $error )
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
    
    @endif
    </div>
    <div class="col-md-6 m-2">
        <label for="name" class="form-label">Name<span class="star">*</span></label>
        <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="john Doe ">    
    </div>
    <div class="col-md-6 m-2">
        <label for="email" class="form-label">Email<span class="star">*</span></label>
        <input type="email" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="abc@gmail.com ">    
    </div>
    <div class="col-md-6 m-2">
        <label for="password" class="form-label">Password <span class="star">*</span></label>
        <input type="password"   name="password" id="password" class="form-control" placeholder="test">
    </div>

    <div class="col-md-6 m-2">
        <label for="password" class="form-label">Confirm Password <span class="star">*</span></label>
        <input type="password"   name="password_confirmation" id="password-confirmation" class="form-control" placeholder="test">
    </div>

     <div class="col-md-6 ">
       <button type="submit" class="btn btn-primary"> Register</button>
       <button type="reset" class="btn btn-secondary"> Reset</button>

    </div>

@endsection