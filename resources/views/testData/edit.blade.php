@extends('layouts.master')
@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Update Test Data</h3>
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                            </div>
                            <div class="panel-body">
                                <form action="/testData/{{$test->id}}/update" method="POST">
                                    {{ csrf_field() }}
                                    <label for="result" class="form-label">Result</label>
                                    <textarea name="result" class="form-control" id="result" cols="30" rows="10">{{$test->result}}</textarea>
                                    
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" name="status">
										<option value="Pending">Pending</option>
										<option value="Completed">Completed</option>
									</select>
                                    <br>
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
