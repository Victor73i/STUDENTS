<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/welcome');
        }
        return view('register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/');
    }
}
