<?php

namespace App\Http\Controllers\Auth;


use App\Acl\Src\Models\Role;
use App\Core\Utils;
use App\Models\User;
use App\Notifications\ConfirmedWorkPack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth;
use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function login(Request $request)
    {
        $credenciales = $request->only('email','password');
  /*      if (!$request->has('api') || !$request->api) {
            $password = Utils::cryptoJsAesDecrypt("prumplunch", $request->password);
        } else {
            $password = $request->password;
        }
         $credenciales = [
             "email" => $request->email,
             "password" => $password
            ];*/
//        $login = User::where("email", $credenciales["email"])->first();
        try {
           if(!$token = auth()->attempt($credenciales)){
                return response()->json([
                    'message' => 'Datos Incorrectos. '
                ], 401);
            }
            Log::info("Token Creado");
        }catch (JWTException $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}");
            return response()->json([
                'message' => 'Error al intentar crear el token. Intente de nuevo'
            ], 500);
        }
        $user = auth()->user();
        $role = count($roles = $user->getRoles()) > 0 ? $roles[0] : "";
        return response()->json([
            'status' => true,
            'token' => $token,
            'type' => 'Bearer',
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $role
            ],
        ], 200);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    public function logout()
    {
        try{
            \JWTAuth::invalidate(\JWTAuth::getToken());
            return response()->json([
                'msj' => 'success logout exit.'
            ], 200);
            Log::info("Token invalidado satisfactoriamente");
        }catch (JWTException $e){
            Log::critical("Error, archivo del peo: {$e->getFile()}, linea del peo: {$e->getLine()}, el peo: {$e->getMessage()}, codigo del peo: {$e->getStatusCode()}");
            return response()->json([
                'msj' => 'Error al intentar olvidar token'
            ], 500);
        }


    }

    public function validate()
    {
        try{
            if(!$user = \JWTAuth::parseToken()->authenticate()){
                return response()->json([
                    'msj' => 'Usuario no Encontrado'
                ], 404);
            }

        }catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            return response()->json([
                'msj' => 'Usuario no Encontrado'
            ], $e->getStatusCode());
        }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            return response()->json([
                'msj' => 'Token Invalido'
            ], $e->getStatusCode());
        }catch (\Tymon\JWTAuth\Exceptions\JWTException $e){
            return response()->json([
                'msj' => 'Token Inexistente'
            ], $e->getStatusCode());
        }
        return response()->json([
            'status' => true,
            'user' => $user
        ], 200);
    }

    public function confirmedWorkPack(Request $request)
    {
        $request->validate([
            'user_id'      => 'required|integer',
            'detention_id'     => 'required|integer'
        ]);
        $user = User::find($request->user_id);
        $user->detention_id = $request->detention_id;
        $user->notify(new ConfirmedWorkPack($user));

        return response()->json(['message' => 'Usuario creado existosamente!'], 201);
    }
}
