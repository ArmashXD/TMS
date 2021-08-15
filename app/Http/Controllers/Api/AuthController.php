<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Common;
use App\Http\Resources\User as UserResource;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:40',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'email' => $request->get('email'),
            'name' => $request->get('name'),
            'password' => Hash::make($request->get('password'))
        ]);
        if($user)
        {
            if(!$token = auth()->attempt($request->only(['email','password']))){
                return abort(401);
            }
            return (new UserResource($request->user()))->additional([
                'meta' => [
                    'token' => $token
                ]
            ]);
        }
        else
        {
            return response()->json(['message' => 'Some error occured, Please try again later'], 401);
        }

       
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if(!$token = auth()->attempt($request->only(['email','password']))){
            return response()->json([
                'errors' => [
                    'email' => ['Sorry we cant find you with those details']
                ]
            ], 422);
        }
        return (new UserResource($request->user()))->additional([
            'meta' => [
                'token' => $token
            ]
        ]);
    }


    public function logout(Request $request)
    {
        auth()->logout();
    }

    public function user(Request $request)
    {
        return new UserResource($request->user());
    }
}
