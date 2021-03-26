@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{session('success')}}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading ">
                                <!-- Button trigger modal -->
                                <h2 class="panel-title text-center">Testing History</h2>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Patient Type</th>
                                            <th>Symptoms</th>
                                            <th>Result</th>
                                            <th>Status</th>
                                            <th>Test Centre</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_test as $test)
                                        <tr>
                                            <td>{{ $test->id }}</td>
                                            <td>{{ App\User::find($test->user_id)->username }}</td>
                                            <td>{{ $test->patient_type }}</td>
                                            <td>{{ $test->symptoms }}</td>
                                            <td>{{ $test->result }}</td>
                                            <td>{{ $test->status }}</td>
                                            <td>{{\App\TestCentre::find($test->test_centre_id)->name}}</td>
                                            <td>{{ $test->created_at }}</td>
                                            @if($test->updated_at==null)
                                                <td class="text">-</td>
                                            @else
                                                <td>{{ $test->updated_at }}</td>
                                            @endif
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
@endsection