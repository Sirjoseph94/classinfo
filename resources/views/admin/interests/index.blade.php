@extends('layouts.app2')

@section('content')
<div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Interests</div>
          </h1>
          <div class="card">
                <div class="card-header">
                  <h4>Full Width</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>Name</th>
                        <th>Code</th>
                        
                        <th>Action</th>
                      </tr>
          @foreach($interests as $i)
                      <tr>
                          <td>{{ $i -> name}}</td>
                          <td>{{ $i -> code}}</td>
                        <td>
                          <a href="#" class="btn btn-outline-info btn-sm"><i class="ion ion-edit"></i> Edit</a> <a href="#" class="btn btn-outline-danger btn-sm"><i class="ion ion-android-delete"></i> Delete</a>                        <td>
                        </td>
                      </tr>   
          @endforeach
        </table>
    </div>
        </section>
</div>    
@endsection