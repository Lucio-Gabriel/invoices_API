<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// 2|jnoGTxKASA4aouytejZPvvsmhdXa9qwilUdADDsl1b34224f -> invoice
// 4|SuW24EbCkCm4RY06P9A0UMZOruMZc06vZ2n8DOK19ac21295 -> user

class   AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return $this->response('Authorized', 200, [
                'token' => $request->user()->createToken('invoice', ['user-store'])->plainTextToken
            ]);
        }

         return $this->response('Not Authorized', 403);
    }

    public function logout()
    {

    }
}
