@extends('layouts.app2')

@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div>My Profile</div>
      </h1>
     <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        {{-- learn how to pass value from laravel to vue to implement the vue component --}}
       {{-- <newsfeed ></newsfeed> --}}
       <div class="card" id="profile">
          <div class="card-header">
            {{-- <div class="float-right">
              <a href="#" class="btn btn-primary">View All</a>
            </div> --}}
            <h4>Stats</h4>
          </div>
          <div class="card-body">
           Here is a profile page
           
          </div>
        </div>

      </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card card-info">
            <div class="card-header">
              <h4>News Headlines</h4>
            </div>
           <globalnews></globalnews>
          </div>
        </div>
 


 
    
</div>

    </section>
  </div>
@endsection
