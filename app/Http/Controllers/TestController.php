<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_test = \App\TestKit::where('kitName','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_test = \App\TestKit::all();
            // dd($data_test);
        }
        $data_centre = \App\TestCentre::where([
            ['status','=','1']
            ])->get();
        $title= "Test Kit Manage";
        return view('testKit.index', ['data_test' => $data_test,'data_centre'=>$data_centre, 'title' =>$title,'search_title'=>'Search test kit name..']);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'kitName' =>'required',
            'test_centre_id' =>'required',
            'stock' =>'required|integer'
        ]  
        );
        \App\TestKit::create($request->all());
        return redirect('/testKit')->with('success','Successfully record new data');
    }
    public function edit($id)
    {
        $test = \App\TestKit::find($id);
        $title= "Edit Test Kit ";
        return view('testKit/edit',['test' => $test, 'title' =>$title]);
    }
    public function update(Request $request, $id)
    {   
        $this->validate($request, [
            'kitName' =>'required',
            'stock' =>'required|integer'
        ]  
        );
        $test = \App\TestKit::find($id);
        $test->update($request->all());
        return  redirect('/testKit')->with('success','Successfully update the data');
    }
    public function delete($id)
    {
        $test = \App\TestKit::find($id);
        $test->delete($test);
        return redirect('/testKit')->with('removed','Data Removed');
    }
}
