@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Class</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{ url('/admin/add') }}" class="btn btn-primary">Add New</a>
                    </div>
                    {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                        modal
                    </button> --}}
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <form action="" method="GET">
                        <div class="card-body" style="margin-bottom: -20px;">
                            <div class="row">
                                <div class="form-group col-sm-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Request::get('name') }}"
                                        placeholder="Search by name">
                                </div>
                                <div class="form-group col-sm-3">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ Request::get('email') }}"
                                        placeholder="Search by email">
                                </div>
                                <div class="form-group col-sm-3">
                                    <button class="btn btn-primary" type="submit" style="margin-top: 35px;">Search</button>
                                    <a href="{{ url('admin/class/list') }}" class="btn btn-success" style="margin-top: 35px;">Reset</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            {{-- </div>
        </section> --}}
        {{-- <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"> --}}
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Class List</h3>
                                <div class="col-sm-6" style="text-align: right">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>SL. No</th>
                                            <th>Class Name</th>
                                            <th>Status</th>
                                            <th>Craeted By</th>
                                            <th>Created Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($getUsers as $key => $getUser)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $getUser->name }}</td>
                                                <td>{{ $getUser->email }}</td>
                                                <td>{{ $getUser->created_at->format('d-m-Y') }}</td>
                                                <td>
                                                    <a href="{{ url('admin/edit/' . $getUser->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="{{ url('admin/delete/' . $getUser->id) }}"><i
                                                            class="fas fa-trash-alt" style="color:red !important;"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                                <div style="padding: 10px; float: right;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- Modal -->
    {{-- <div id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        class="modal fade text-left">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="nameId" name="name" required
                                            placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="emailId" name="email" required
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="PasswordId" name="password" required
                                            placeholder="Password">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
