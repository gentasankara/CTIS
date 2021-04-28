@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle"></i> {{session('success')}}
            </div>
            @elseif(session('removed'))
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-info-circle"></i> {{session('removed')}}
            </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary float-right my-5" data-toggle="modal" data-target="#exampleModal">
                            Register Test Centre
                            </button>
                        </div>
                        <div class="panel">
                            <div class="panel-heading ">
                                <!-- Button trigger modal -->
                                <h2 class="panel-title text-center">Test Records</h2>
                            </div>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>ID</th>
                                            <th>Test Centre Name</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_test as $test)
                                        <tr>
                                            <td>{{ $test->id }}</td>
                                            <td>{{ $test->name }}</td>
                                            <td>{{ $test->address}}</td>
                                            @if($test->status == 1)
                                            <td class="text-success "><strong>Active</strong></td>
                                            @else
                                            <td class="text-danger "><strong>Non-active</strong></td>
                                            @endif
                                            <td>{{ $test->created_at }}</td>
                                            <td>{{ $test->updated_at}} </td>
                                            <td><a href="/testCentre/{{$test->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/testCentre/{{$test->id}}/enable" class="btn btn-success btn-sm" onClick="return confirm('Do you want to enable this centre ?')">Enable</a>
                                            <a href="/testCentre/{{$test->id}}/disable" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to disable this centre ?')">Disable</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Register test centre</h5>
        </div>
            <div class="modal-body">
                <form action="/testCentre/create" method="POST">
                {{csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    	<input type="hidden" name="status" class="form-control" id="status" value="1">
                        <label for="name" class="form-label">Test Centre Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                        @if ($errors->has('name'))
                            <span class="help-block"> {{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address" min="1" value="{{old('address')}}" required>
                        @if ($errors->has('address'))
                            <span class="help-block"> {{$errors->first('address')}}</span>
                        @endif
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
