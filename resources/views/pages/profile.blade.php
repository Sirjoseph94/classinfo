@extends('layouts.app2') @section('content')
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>My Profile</div>
        </h1>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                {{-- learn how to pass value from laravel to vue to implement the vue component --}} {{--
                <newsfeed></newsfeed> --}}
                <div class="card card-primary" id="profile">

                    <div class="card-header">
                        {{--
                        <div class="float-right">
                            <a href="#" class="btn btn-primary">View All</a>
                        </div> --}}
                        <h4>My Interests</h4>
                    </div>
                    @if($flash = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                      <strong>{{ $flash }}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  @endif
                    <div class="mb-5 mx-3">
                      <form action="/profile/add" method="get">
                        <div class="form-group ">
                                @csrf
                            <label for="interest_select" >Select Interests: </label>
                            <select id="interest_select" style="width: 100%" class=" form-control" name="interest_select[]" multiple>
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-outline-primary">Add Interest</button>
                          </div>
                      </form>
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            <h4>My registered Interest</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                    {{-- @foreach($interests as $i) --}}
                                    <tr>
                                        {{--
                                        <td>{{ $i -> name}}</td> --}} {{--
                                        <td>{{ $i -> code}}</td> --}}
                                        <td>
                                            <a href="#" class="btn btn-outline-danger btn-sm">
                                                <i class="ion ion-delete"></i> Remove</a>
                                            <td>
                                            </td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            {{-- news section --}}
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
