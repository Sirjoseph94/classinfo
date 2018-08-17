@extends('layouts.base')

@section ('content')
       <div class="gradiant-bg">
<div class="container mt-5 ">
    <div class="row">
      
      <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
        
    <div class="card">
        <div class="card-body">
          <h1 class="card-title">{{ config('app.name') }}</h1>
          <h6 class="card-subtitle mb-3 text-muted">Bridging the gap</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="./login" class="card-link">Login</a>
          <a href="./register" class="card-link">Register</a>
        </div>
      </div>
</div>
    </div>
</div>
       </div>
 
  


@endsection