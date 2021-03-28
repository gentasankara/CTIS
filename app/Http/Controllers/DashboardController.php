<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index_officer()
    {
        $title= "Dashboard";
        $data_user = \App\User::all();
        $data_test_centre = \App\TestCentre::all();
        $data_kit = \App\TestKit::all();
        $count_centre = $data_test_centre->count();
        $count_kit = $data_kit->count();
        $count = $data_user->count();
        return view('dashboards.index_officer', ['title' =>$title, 'count'=>$count, 'centre'=>$count_centre, 'count_kit'=>$count_kit, 'search_title'=>'Search dashboard..']);

    }
    public function index()
    {
        $title= "Dashboard";
        return view('dashboards.index', ['title' =>$title,'search_title'=>'Search dashboard..']);

    }
}
