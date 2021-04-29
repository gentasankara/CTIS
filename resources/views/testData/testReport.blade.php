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
                            @if(($data_test->isEmpty()))
                            <h4 class="text-center color-light"> There is no test data </h4>
                            @else
                            <div class="table-responsive">
                            
                                <table class="table table-hover">
                                    <thead>
                                        <tr  class="text-center">
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Tester Name</th>
                                            <th>Name</th>
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
                                            @if((App\User::find($test->user_id))== null)
                                                <td class="text-danger"> User deleted </td>
                                            @else
                                                <td>{{App\User::find($test->user_id)->username }}</td>
                                            @endif
                                            <td>{{ App\User::find($test->tester_id)->name}}</td>
                                            <td>{{ App\User::find($test->user_id)->name }}</td>
                                            <td>{{ $test->patient_type }}</td>
                                            <td>{{ $test->symptoms }}</td>
                                            <td>{{ $test->result }}</td>
                                            <td>{{ $test->status }}</td>
                                            @if((\App\TestCentre::find($test->test_centre_id)) == null)
                                            <td class="text-danger"> Test centre not exist</td>
                                            @else
                                            <td>{{\App\TestCentre::find($test->test_centre_id)->name}}</td>
                                            @endif
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
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection