<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function getAll()
    {
        $bookData = Book::where('active',1)->paginate();
        return BookResource::collection($bookData);
    }

    public function post(Request $request)
    {
        try{
            try{
                $validator = Validator::make($request->all(),[
                    'name' => 'required',
                    'isbn' => 'required|numeric',
                    'value' => 'required|decimal:0,2|between:0,999999.99',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            try{
                $book = Book::create($request->all());
                return new BookResource($book);
            }catch (\Exception $e) {
                return response()->json(['message' => 'Error to create book. ', 'error' => 401]);
            }
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()],401);
        }
    }

    public function get(int $id){
        try{
            $book = Book::findOrFail($id);
            return new BookResource($book);
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
                    'isbn' => 'required|numeric',
                    'value' => 'required|decimal:0,2|between:0,999999.99',
                ]);
                if($validator->fails()){
                    throw new \Exception($validator->errors(),401);
                }
            }catch (\Exception $e){
                return response()->json(['error' => $e->getMessage()],$e->getCode());
            }
            $book = Book::findOrFail($id);
            $book->name  = $request->input('name');
            $book->isbn  = $request->input('isbn');
            $book->value = $request->input('value');

            if($book->save()){
                return new BookResource($book);
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
            $book = Book::findOrFail($id);
            $book->active = 0;
            if($book->save()){
                return response(null,200);
            }else{
                throw new \Exception('Error to delete book',401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],500);
        }
    }
}
