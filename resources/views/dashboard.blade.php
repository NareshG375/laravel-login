@extends('layout')
@section('title','Dashboard')
@section('content')
<div class="row   align-items-center g-2 mt-4" >
<h2 class="col-md-6 m-2">Welcome, {{Auth::user()?->name??'Guest'}}</h2>
@endsection