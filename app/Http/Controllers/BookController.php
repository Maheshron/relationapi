<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function books(){
        $data = Book::all();
        if($data){
        return response([
            'status'=>1,
            'message'=>'Book Data',
            'data'=>$data
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No Book Data',
                
                ]);
        } 
    }
    public function addbooks(Request $request){
        $insert = Book::create($request->all());
        if($insert){
            return response([
                'status'=>1,
                'message'=>'Book data inserted',
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'Rest Data',
            ]);
        }
    }
    public function updatebook(Request $request){
        $update = Book::find($request->id);
        $update->update($request->all());
         if($update){
             return response([
                 'status'=>1,
                 'message'=>'updated'
             ]);
         }
         else{
            return response([
                'status'=>0,
                'message'=>'not updated'
            ]);
         }
    }
    public function deletebook(Request $request){
        $data = Book::find($request->id);
        $result = $data->delete();
        if($result){
            return response([
                'message'=>'message deleted'
            ]);
        }
    }
}
