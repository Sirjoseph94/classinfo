@extends('layouts.app2') @section('content')
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Interests</div>
        </h1>
        <div class="card">
            <div class="card-header">
                <h4>Add Interest</h4>
            </div>
            <div class="row">
                @if($flash = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ $flash }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <div class="card card-info">
                    <form method="post" action="/interests/add" class="needs-validation" novalidate="">
                        @csrf
                      

                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" name="code" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please fill in the Code
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            {{--
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                            <div class="card-footer">
                                <button type="submit" class="btn btn-outline-primary">Add audience</button>
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
                                    {{--
                                    <a href="#" class="btn btn-outline-info btn-sm">
                                        <i class="ion ion-edit"></i> Edit</a>
                                    <a href="#" class="btn btn-outline-danger btn-sm"> --}}
                                        <form action="interests/delete/{{$i->id}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-action" data-toggle="tooltip" type="submit" title="Delete">
                                                <i class="ion ion-trash-b"></i>
                                            </button>
                                        </form>
                                        <td>
                                        </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
    </section>
    </div>
    @endsection