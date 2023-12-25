<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(UserRequest  $request)
    {

        $user = User::where('email', $request->email)->first();
     
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $response = [
            'user' => $user,
            'token' => $user->createToken($request->email)->plainTextToken
        ];
     
        return $response;
    }
     /**
     * Login using the specific resource.
     */
    
     public function logout(UserRequest  $userRequest)
     {



        return false;
     }
}
