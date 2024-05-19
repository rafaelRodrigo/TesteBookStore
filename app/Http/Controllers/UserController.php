<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getAll()
    {
        $userData = User::where('status',1)->paginate();
        return UserResource::collection($userData);
    }

    public function post(Request $request)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'name' => 'required',
                    'email' => 'required|unique:users',
                    'password' => 'required',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            try{
                $user = User::create($request->all());
                return new UserResource($user);
            }catch (\Exception $e) {
                return response()->json(['message' => 'Erro ao criar usuário. ', 'error' => 401]);
            }
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],401);
        }
    }

    public function get(int $id){
        try{
            $user = User::findOrFail($id);
            return new UserResource($user);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function put(Request $request, int $id)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'name' => 'required',
                    'email' => 'required|unique:users',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            $user = User::findOrFail($id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');

            if($user->save()){
                return new UserResource($user);
            }else{
                throw new \Exception($validator->errors(),401);
            }
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function delete($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->status = 0;
            if($user->save()){
                return response(null,200);
            }else{
                throw new \Exception('Erro ao excluir usuário',401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
