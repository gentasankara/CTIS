<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_user = \App\User::where('name','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_user = \App\User::all();
        }
        $title= "Manage User";
        return view('users.index', ['data_user' => $data_user,'title' =>$title,'search_title'=>'Search name..']);
    }
    public function newTester()
    {
        $title= "Add User ";
        $data_centre = \App\TestCentre::all();
        return view('users/newTester',['title' =>$title,'data_centre'=>$data_centre]);
    }
    public function addTester(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'username' =>'required|unique:users',
            'password' =>'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', ///at least 1 lower case, 1 uppercase and 1 number
            'test_centre_id' =>'required',
        ]  
        );
        $user = new \App\User;
        $user->role = 'tester';
        $user->name = $request->name;
        $user->username =  $request->username;
        $user->password = bcrypt($request->password);
        $user->test_centre_id =  $request->test_centre_id;
        $user->remember_token = Str::random(60);
        $user->save();
        return redirect('/users')->with('success','Successfully record new tester ');
    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete($user);
        return redirect('/users')->with('removed','User Account Removed');
    }

}
