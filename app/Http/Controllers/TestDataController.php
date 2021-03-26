<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestDataController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_test = \App\Test::where('user_id','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_test = \App\Test::all();
        }
        // $user= App\User::find($request->id);
        // $data_test = $user->test;
        $title= "Test Data";
        return view('testData.index', ['data_test' => $data_test,'title' =>$title]);
    }
    public function newTest()
    {
        $test_centre_id = auth()->user()->test_centre_id;
        $title= "Add new record ";
        $data_user = \App\User::where('role','patient')->where('test_centre_id', $test_centre_id)->get();
        $data_centre = \App\TestCentre::where('id', $test_centre_id)->first();
        return view('testData/newTest',['data_user' => $data_user, 'data_centre'=>$data_centre,'title' =>$title]);
    }
    public function recordTest(Request $request)
    {
        $this->validate($request, [
            'symptoms' =>'required',
            'patient_type' =>'required',
            'user_id' => 'required',
            'test_centre_id' =>'required',
        ]  
        );
        \App\Test::create($request->all());
        return redirect('/testData')->with('success','Successfully record new data');
    }
    public function createPatient(Request $request)
    {
        $user = new \App\User;
        $user->role = 'patient';
        $user->name = $request->name;
        $user->username =  $request->username;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();
        
        //insert ke test data
        $request->request->add(['user_id'=> $user->id]);
        $test = \App\Test::create($request->all());
        return redirect('/testData')->with('success','Successfully record new data');
    }

    public function edit($id)
    {
        $test = \App\Test::find($id);
        $title= "Update Test Data ";
        return view('testData/edit',['test' => $test, 'title' =>$title]);
    }
    public function update(Request $request, $id)
    {   
        $test = \App\Test::find($id);
        $test->update($request->all());
        return redirect('/testData')->with('success','Successfully update the data');
    }
    public function delete($id)
    {
        $test = \App\Test::find($id);
        $test->delete($test);
        return redirect('/testData')->with('removed','Data Removed');
    }


    public function testReport(Request $request)
    {
        $id = auth()->user()->id;
        if($request->has('cari')){
            $data_test = \App\Test::where('result','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_test = \App\Test::all();
        }
        $title= "Testing History";
        return view('testData.testReport', ['data_test' => $data_test,'title' =>$title]);
    }
}
