@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <i class="fa fa-check-circle"></i> {{session('success')}}
            </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary float-right my-5" data-toggle="modal" data-target="#exampleModal">
                            Add new test kit
                            </button>
                        </div>
                        <div class="panel">
                            <div class="panel-heading ">
                                <!-- Button trigger modal -->
                                <h2 class="panel-title text-center">Test Records</h2>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>Kit ID</th>
                                            <th>Test Kit Name</th>
                                            <th>Test Centre</th>
                                            <th>Stock</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_test as $test)
                                        <tr>
                                            <td>{{ $test->id }}</td>
                                            <td>{{ $test->kitName }}</td>
                                            <td>{{ \App\TestCentre::find($test->test_centre_id)->name}} </td>
                                            <td>{{ $test->stock }}</td>
                                            <td>{{ $test->created_at }}</td>
                                            @if($test->updated_at==null)
                                                <td class="text">-</td>
                                            @else
                                                <td>{{ $test->updated_at }}</td>
                                            @endif
                                            <td><a href="/testKit/{{$test->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/testKit/{{$test->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLabel">Record New Data</h5>
        </div>
            <div class="modal-body">
                <form action="/testKit/create" method="POST">
                {{csrf_field() }}
                    <div class="form-group {{ $errors->has('kitName') ? 'has-error' : ''}}">
                        <label for="kitName" class="form-label">Kit Name</label>
                        <input type="text" name="kitName" class="form-control" id="kitName" value="{{old('kitName')}}" required>
                        @if ($errors->has('kitName'))
                            <span class="help-block"> {{$errors->first('kitName')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" id="stock" min="1" value="{{old('stock')}}" required>
                        @if ($errors->has('stock'))
                            <span class="help-block"> {{$errors->first('stock')}}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('test_centre_id') ? 'has-error' : ''}}">
                        <label for="centre" class="form-label">Test Centre</label>
                        <select id="test_centre_id" class="form-control" name="test_centre_id">
                            @foreach ($data_centre as $centre)
                            <option value="{{ $centre->id }}">{{$centre->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('test_centre_id'))
                            <span class="help-block"> {{$errors->first('test_centre_id')}}</span>
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
