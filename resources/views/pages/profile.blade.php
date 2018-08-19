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

                    <div class="mb-5 mx-3">
                      <form action="" method="post">
                        <div class="form-group ">
                                <label for="audience_select" >Select Interests: </label>
                                <select id="audience_select" style="width: 100%" class="audience_select form-control" name="select_audience" multiple="multiple">
                                    
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="AL">test2</option>
                                    <option value="AL">test</option>
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
