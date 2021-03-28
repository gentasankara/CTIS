@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @elseif(session('alert'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('alert')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <h3 class="panel-title">Record Tester</h3>
                            @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="panel-body">
                            <form action="/testData/createPatient" method="POST">
                                {{csrf_field() }}
                                <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username" value="{{old('username')}}">
                                    @if ($errors->has('username'))
                                        <span class="help-block"> {{$errors->first('username')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                    <label for="password" class="form-label">Password </label>
                                    <input type="password" name="password" class="form-control" id="password">
                                    <p class="text-danger">Minimal 8 character with at least 1 uppercase, 1 lowercase, and 1 number</p>
                                    @if ($errors->has('password'))
                                        <span class="help-block"> {{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                        <span class="help-block"> {{$errors->first('name')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('patient_type') ? 'has-error' : ''}}">
                                    <label for="patient_type" class="form-label">Patient Type</label>
                                    <select class="form-control" name="patient_type">
                                        <option value="returnee">Returnee</option>
                                        <option value="quarantined">Quarantined</option>
                                        <option value="close_contact">Close contact</option>
                                        <option value="infected">Infected</option>
                                        <option value="suspected">Suspected</option>
                                    </select>
                                    @if ($errors->has('patient_type'))
                                        <span class="help-block"> {{$errors->first('patient_type')}}</span>
                                    @endif
                                </div>
                                <br>
                                <div class="form-group {{ $errors->has('symptoms') ? 'has-error' : ''}}">
                                    <label for="symptoms" class="form-label">Symptoms</label>
                                    <input type="text" name="symptoms" class="form-control" id="symptoms" value="{{old('symptoms')}}">
                                    @if ($errors->has('symptoms'))
                                        <span class="help-block"> {{$errors->first('symptoms')}}</span>
                                    @endif
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