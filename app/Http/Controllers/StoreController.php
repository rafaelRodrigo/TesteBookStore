<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreResource;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function getAll()
    {
        $storeData = Store::where('active',1)->paginate();
        return StoreResource::collection($storeData);
    }

    public function post(Request $request)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'name' => 'required',
                    'address' => 'required',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            try{
                $store = Store::create($request->all());
                return new StoreResource($store);
            }catch (\Exception $e) {
                return response()->json(['message' => 'Error to create store. ', 'error' => 401]);
            }
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],401);
        }
    }

    public function get(int $id){
        try{
            $store = Store::findOrFail($id);
            return new StoreResource($store);
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
                    'address' => 'required',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            $store = Store::findOrFail($id);
            $store->name = $request->input('name');
            $store->address = $request->input('address');

            if($store->save()){
                return new StoreResource($store);
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
            $store = Store::findOrFail($id);
            $store->active = 0;
            if($store->save()){
                return response(null,200);
            }else{
                throw new \Exception('Error to delete store',401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
