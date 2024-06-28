@extends('layout')
@section('title','Registration')

@section('content')
<div class="container">


  <div class="mt-5">
    @if ($errors->any())
    <div class="col-12">
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{ $error }}</div> <!-- Affiche les erreurs de validation -->
      @endforeach
    </div>
    @endif


    @if(session()->has('error'))
        <div class="alert alert-danger">{{ session('error') }}</div> <!-- Affiche les messages d'erreur de session -->
    @endif
    

    @if(session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div> <!-- Affiche les messages de succès de session -->
    @endif
  </div>

  {{-- <div class="mt-5">
    @if ($errors->any())
    <div class="col-12">
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">{{ $error }}</div>
      @endforeach
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
  </div>
   --}}


  <form class="ms-auto me-auto mt-auto" action="{{ route('registration.post') }}" method="POST" style="width: 500px;">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
      <div id="nameHelp" class="form-text">We'll never share your name with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
