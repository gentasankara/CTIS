@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <a href="users/newTester" class="btn btn-primary">Record New Tester</a><br>
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-check-circle"></i> {{session('success')}}
                            </div>
                        @endif
                        <div class="panel">
                            <div class="panel-heading ">
                                <h2 class="panel-title text-center">Test Records</h2>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Test Centre</th>
                                            <th>Created at</th>
                                            <th>Update at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_user as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{\App\TestCentre::find($user->test_centre_id)->name}}</td>
                                            <td>{{ $user->created_at }}</td>
                                            @if($user->updated_at==null)
                                                <td>-</td>
                                            @else
                                                <td class="text-left">{{$user->updated_at }}</td>
                                            @endif
                                            @if($user->role == 'manager')
                                            <td></td>
                                            @elseif($user->role == 'patient' || $user->role == 'tester')
                                            <td><a href="/users/{{$user->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Do you want to delete this data ?')">Delete</a></td>
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
