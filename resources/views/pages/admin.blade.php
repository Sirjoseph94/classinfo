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
            {{ $flash }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
          <div class="col-12 card" id="sendmessage">
             
              <div class="card card-info">
                <div class="card-header" data-toggle="tooltip" data-displacement="top" title data-original-title="Click on - to expand"><div class="float-right"><a data-collapse="#mycard-collapse" class="btn btn-icon">
                  <i class="ion ion-minus"></i></a></div><h4>Send Message</h4></div>
                </div>
                <form method="post" action="/send" class="needs-validation" novalidate="">
                  @csrf
                <div class="collapse " id="mycard-collapse" style="">
              
                    <div class="form-group ">
                      <label for="interest_select" >Select Interests: </label>
                      <select id="interest_select" style="width: 100%" class=" form-control" name="interest_select[]" multiple>
                      </select>
                    </div>
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                    <div class="invalid-feedback">
                      Please fill in the title
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Content</label>
                    <textarea class="summernote-simple" name="message"></textarea>
                  </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-primary">Send Message</button>
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
        </div>
        {{-- send Message --}}
      </div>
     <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        {{-- <myposts></myposts> --}}

        <div class="card">
            <div class="card-header">
              {{-- <div class="float-right">
                <a href="#" class="btn btn-primary"></a>
              </div> --}}
              <h4>My Posts</h4>
            </div>
            <div class="card-body">
              @if(count($news) > 0)
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>   
                   
                      @foreach($news as $post)                  
                      <tr>
                        <td>
                          {{ $post->title }}
                          <div class="table-links">
                            in <a href="#"></a>
                            <div class="bullet"></div>
                          <a href="/admin/{{ $post->id }}">View</a>
                           
                          </div>
                        </td>
                        <td>
                          <span>{{ $post->created_at }}</span>  
                        </td>
                         <td>
                             <td>
                            <a href="/admin/{{ $post->id }}/edit" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>   
                             </td>
                             <td>
                            <form action="{{action('AdminController@destroy', $post->id)}}" method="POST">
                          {{csrf_field()}}
                          <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-action" data-toggle="tooltip" type="submit" title="Delete"><i class="ion ion-trash-b"></i></button>
                          </form>
                             </td>
                           
                          </td>
                      </tr>
                      @endforeach
                    </tbody>  
                </table>
                {{ $news->links() }}
                @else
                 <div class="alert alert-warning" role="alert">You have no news, create one now</div>
                @endif
              </div>
            </div>
          </div>


      </div>
        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>News Headlines</h4>
            </div>
           <globalnews></globalnews>
          </div>
        </div>
    </section>
  </div>
@endsection
