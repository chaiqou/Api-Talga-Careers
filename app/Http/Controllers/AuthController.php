<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
  ]);

        $token = $user->createToken('chemiaplikaciistokeni')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];


        return response($response, 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response(['message' => 'Token deleted'], 201);
    }

    public function login(LoginRequest $request)
    {
        // check email
        $user = User::where('email', $request->email)->first();


        // check password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['message' => 'Bad Password'], 401);
        }


        $token = $user->createToken('chemiaplikaciistokeni')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];


        return response($response, 201);
    }
}
