@extends('layouts.master')
@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Data</h3>
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="panel-body">
                                <form action="/testCentre/{{$test->id}}/update" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                        <label for="name" class="form-label">Test Centre Name</label>
                                        <input type="text" value="{{$test->name}}" name="name" class="form-control" id="name">
                                        @if ($errors->has('name'))
                                            <span class="help-block"> {{$errors->first('name')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" value="{{$test->address}}"  name="address" class="form-control" id="address" min=1>
                                        @if ($errors->has('address'))
                                            <span class="help-block"> {{$errors->first('address')}}</span>
                                        @endif
                                    </div>

                                    <p class="demo-button ml-5"><button type="submit" class="btn btn-warning">Update</button></p>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
							
@stop
