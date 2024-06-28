@extends('layout') <!-- Utilise le layout 'layout.blade.php' comme base -->

@section('title', 'Login') <!-- Définit le titre de la section -->

@section('content') <!-- Débute la section 'content' -->

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


  <form class="ms-auto me-auto mt-auto" action="{{ route('login.post') }}" method="POST" style="width: 500px;">
    @csrf <!-- Token CSRF pour protection -->

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> <!-- Aide pour l'email -->
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button> <!-- Bouton de soumission du formulaire -->
  </form>
</div>

@endsection <!-- Termine la section 'content' -->
