@extends('layouts.app2')

@section('content')

<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div>Admin Area - News Stream</div>
      </h1>
{{-- sendmessage --}}
      <div class="row">
          @if($flash = Session::get('success'))
          <div class="alert alert-success alert-dismissible fade show">
            <strong>{{ $flash }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        <div class="mb-2">
        <a href="./" class="btn btn-outline-primary">Back</a>
        </div>
          <div class="col-12 card" id="sendmessage">
             
              <div class="card card-info px-5">
                <h2>Edit Message</h2>
                <hr>
              <form method="POST" action="{{action('AdminController@update', $news->id)}}" class="needs-validation  " novalidate="">
                  {{csrf_field()}}
                
                  <div class="form-group">
                      <input type="hidden" _method="PATCH" value="UPDATE">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                        <div class="form-group ">
                          <label for="interest_select" >Select Audience: </label>
                          <select id="interest_select" style="width: 100%" class=" form-control" name="interest_select[]" placeholder="Select audience here" multiple>
                          </select>
                        </div>
                   
                  </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
                    <div class="invalid-feedback">
                      Please fill in the title
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Content</label>
                  <textarea class="summernote-simple" name="message" >{!! $news->message !!}</textarea>
                  </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="card-footer">    
                  <button type="submit" class="btn btn-outline-primary">Update Message</button>  
                </div>
                </div>
              </form>
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        {{-- send Message --}}
      </div>
    </section>
  </div>
@endsection