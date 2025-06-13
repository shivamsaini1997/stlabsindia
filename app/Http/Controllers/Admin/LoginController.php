<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function authLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if($validator->passes()){

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                if(Auth::guard('admin')->user()->role != "admin"){
                    Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error','You are not authorized to access this page');

                }
                return redirect()->route('admin.dashboard');


            }else{
                return redirect()->route('admin.login')->with('error','Either email or password is incorrect');
            }

        }else{
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }
    }
     public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function register(){
        $user = User::get();
        $data = compact('user');
        return view('admin.register')->with($data);
    }
    public function adminRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'required'
        ]);

        if($validator->passes()){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();

            return redirect()->route('admin.login')->with('success','Admin registered successfully');
        }else{
            return redirect()->route('admin-register')->withInput()->withErrors($validator);
        }
    }

    public function deleteRegister($id){
        $user = User::find($id);
        if($user){
            $user->delete();
            return redirect()->route('admin.register')->with('success','Admin deleted successfully');
        }else{
            return redirect()->route('admin.register')->with('error','Admin not found');
        }
    }


}

