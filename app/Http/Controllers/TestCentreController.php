<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestCentreController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_test = \App\TestCentre::where('name','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_test = \App\TestCentre::all();
        }
        $title= "Test Centre";
        return view('testCentre.index', ['data_test' => $data_test,'title' =>$title,'search_title'=>'Search test centre name..']);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' =>'required|min:3',
            'address' =>'required|min:3'
        ]
        );
        \App\TestCentre::create($request->all());
        return redirect('/testCentre')->with('success','Successfully register test centre');
    }


    public function edit($id)
    {
        $test = \App\TestCentre::find($id);
        $title= "Edit Test Centre";
        return view('testCentre/edit',['test' => $test, 'title' =>$title]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required',
            'address' =>'required'
        ]
        );
        $test = \App\TestCentre::find($id);
        $test->update($request->all());
        return  redirect('/testCentre')->with('success','Successfully update the data');
    }

    public function enable($id)
    {
        $test = \App\TestCentre::find($id);
        $test->status = '1';
        $test->save();
        return redirect('/testCentre')->with('removed','Test Centre enabled');
    }
    public function disable($id)
    {
        $test = \App\TestCentre::find($id);
        $test->status = '0';
        $test->save();
        return redirect('/testCentre')->with('removed','Test Centre Disabled');
    }
}
