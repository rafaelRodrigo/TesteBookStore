<?php

namespace App\Http\Controllers;

use App\Http\Resources\StoreBookResource;
use App\Http\Resources\StoreResource;
use App\Models\StoreBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreBookController extends Controller
{
    public function getAll()
    {
        $storeBook = StoreBook::where('active',1)->paginate();
        return StoreBookResource::collection($storeBook);
    }

    public function get(int $id){
        try{
            $storeBook = StoreBook::findOrFail($id);
            return new StoreBookResource($storeBook);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }

    public function post(Request $request)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'book_id' => 'required|numeric',
                    'store_id' => 'required|numeric',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            try{
                $storeBook = StoreBook::create($request->all());
                return new StoreBookResource($storeBook);
            }catch (\Exception $e) {
                return response()->json(['message' => 'Error to create store and book. ', 'error' => 401]);
            }
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],401);
        }
    }

    public function put(Request $request, int $id)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'book_id' => 'required|numeric',
                    'store_id' => 'required|numeric',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            $storeBook = StoreBook::findOrFail($id);
            $storeBook->book_id  = $request->input('book_id');
            $storeBook->store_id  = $request->input('store_id');

            if($storeBook->save()){
                return new StoreBookResource($storeBook);
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
            $storeBook = StoreBook::findOrFail($id);
            $storeBook->active = 0;
            if($storeBook->save()){
                return response(null,200);
            }else{
                throw new \Exception('Error to delete book',401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
