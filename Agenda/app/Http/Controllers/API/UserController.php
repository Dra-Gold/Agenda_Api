<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Requests\RegistroUsuario;
use Illuminate\Support\Facades\Auth;

class UserController extends BaseController
{
    public function registro(RegistroUsuario $request)
   {
    $datos=$request->all();
    $datos['password']=bcrypt($datos['password']);
    $user= User::create($datos);
    $success['token'] =  $user->createToken('Agenda')->accessToken;
    $success['name'] =  $user->name;
    return $this->sendResponse($success, 'Usuario Creado');
   }


   public function login(Request $request)
   {
    $credenciales=$request->only('email', 'password');
    if(Auth::attempt($credenciales))
    {
        $user=Auth::user();
        $token= $user->createToken('Agenda')->accessToken;
        return response()->json(['token'=> $token,'user' => $user], 200);
    }else{
        return response()->json(['error' => 'Unauthorised'], 401);
    }
   }
}
