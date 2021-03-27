@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">  
        <div class="cointaner-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Welcome to Dashboard</h3>
                    <p class="panel-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-user"></i></span>
                                <p>
                                    <span class="number">{{$count}}</span>
                                    <span class="title">Users</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-hospital-o "></i></span>
                                <p>
                                    <span class="number">{{$centre}}</span>
                                    <span class="title">Test Centre</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-medkit"></i></span>
                                <p>
                                    <span class="number">{{$count_kit}}</span>
                                    <span class="title">Test Kits</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img class="img-fluid mx-auto d-block" style="width:32%" src="{{asset('admin/assets/img/welcome.png')}}" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop