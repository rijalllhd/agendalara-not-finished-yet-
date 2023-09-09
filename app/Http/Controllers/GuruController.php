<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Guru;
use Illuminate\Support\Facades\Hash;
use Carbon\carbon;

class GuruController extends Controller
{
    public function Index(){
        return view('login.loginguru');
    }

    public function Dashboard(){
        return view('guru.index');
    }

    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if (Auth::guard('guru')->attempt(['email'=> $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('guru.dashboard')->with('error', 'Guru Login Success');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
        
    }

    public function GuruLogout(){
        Auth::guard('guru')->logout();
        return redirect()->route('login_from')->with('error','Logout Success');
    }

    public function GuruRegister(){
        return view('guru.guru_register');
    }

    public function GuruRegisterCreate(Request $request){
        // dd($request->all());
        Guru::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login_from')->with('error','Registered Success');
    }
}
