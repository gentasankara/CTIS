<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $id = auth()->user()->id;
        if($request->has('cari')){
            $data_test = \App\Test::where('result','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_test = \App\Test::all();
        }
        $user= \App\User::find($id);
        $data_test = $user->test;
        $title= "Testing History";
        return view('patient.patientHistory', ['data_test' => $data_test,'title' =>$title]);
    }
}
