<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiController extends Controller
{
    /***** Register API ******/
    public function register(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed"
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response()->json([
            "status" => true,
            "message" => "User Created successfully"
        ]);
    }

    /***** Login API ******/
    public function login(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $token = JWTAuth::attempt([
            "email" => $request->email,
            "password" => $request->password
        ]);

        if(!empty($token)){
            return response()->json([
                "status" => true,
                "message" => "User logged in successfully",
                "token" => $token
            ]);
        }

        return response()->json([
            "status" => false,
            "message" => "Invalid login details"
        ]);
    }

    /***** Profile API ******/
    public function profile(){
        //$userData = auth()->user();
        $userData = User::all();
        return response()->json([
            "status" => true,
            "message" => "Profile data",
            "user" => $userData
        ]);
    }
}
