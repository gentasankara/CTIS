@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Record Tester</h3>
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="panel-body">
                            <form action="/users/addTester" method="POST">
                                {{csrf_field() }}
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                        <span class="help-block"> {{$errors->first('name')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="username" name="username" class="form-control" id="username" value="{{old('username')}}">
                                    @if ($errors->has('username'))
                                        <span class="help-block"> {{$errors->first('username')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                    <label for="password" class="form-label">Password </label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    <p class="text-danger">Minimal 5 character with at least 1 uppercase, 1 lowercase, and 1 number</p>
                                    @if ($errors->has('password'))
                                        <span class="help-block"> {{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <br>
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
                                <br>
                                <label for="position">Position</label>
                                <input type="text" disabled name="position" class="form-control" value="Tester">
                                <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>   
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@stop