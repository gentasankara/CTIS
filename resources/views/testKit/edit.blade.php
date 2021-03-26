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
                                <form action="/testKit/{{$test->id}}/update" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('kitName') ? 'has-error' : ''}}">
                                        <label for="kitName" class="form-label">Kit Name</label>
                                        <input type="text" value="{{$test->kitName}}" name="kitName" class="form-control" id="kitName">
                                        @if ($errors->has('kitName'))
                                            <span class="help-block"> {{$errors->first('kitName')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group {{ $errors->has('stock') ? 'has-error' : ''}}">
                                        <label for="stock" class="form-label">Stock</label>
                                        <input type="number" value="{{$test->stock}}"  name="stock" class="form-control" id="stock" min=1>
                                        @if ($errors->has('stock'))
                                            <span class="help-block"> {{$errors->first('stock')}}</span>
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
