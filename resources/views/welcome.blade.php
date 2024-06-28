@extends('layout')
@section('title','Welcome to HomePage')

@section('content')
@auth
{{ auth()->user()->name}}
@endauth
@endsection 