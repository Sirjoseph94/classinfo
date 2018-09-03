@extends('layouts.app2')

@section('content')
<div class="main-content">
    <section class="section">
      <h1 class="section-header">
        <div>News Stream</div>
      </h1>
     <div class="row">
      <div class="col-lg-8 col-md-12 col-12 col-sm-12">
        {{-- learn how to pass value from laravel to vue to implement the vue component --}}
       {{-- <newsfeed ></newsfeed> --}}
       <div class="card" id="newsfeed">
          <div class="card-header">
            {{-- <div class="float-right">
              <a href="#" class="btn btn-primary">View All</a>
            </div> --}}
            <h4>Latest News</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>From</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>   
                  
                  @foreach($news as $post)                  
                  <tr>
                    <td>
                      {{ $post->title }}
                      <div class="table-links">
                       in {{$post->tag_code}}
                        <div class="bullet"></div>
                        
                        
                      <a href="/news/{{$post -> id}}">View</a>
                      </div>
                    </td>
                    <td>
                      <span>{{$post -> user -> name }}</span>
                      {{-- <a href="#"><img src="/dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> </a> --}}
                    </td>
                    <td>
                    <span>{{ $post -> created_at }}</span>  
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{-- @if(count($news > 5)) 
              {{ $news->links() }}
              @endif --}}
            </div>
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
