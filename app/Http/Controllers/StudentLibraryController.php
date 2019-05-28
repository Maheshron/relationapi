<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentLibraryController extends Controller
{
    //
    public function index(){
        $data = Student::with('books')->get();
        if(count($data)){
        return response([
            'status'=>1,
            'message'=>'Rest Data',
            'data'=>$data
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'Rest Data',
                
                ]);
        } 
    }
    public function addstudent(Request $request){
        $insert = Student::create($request->all());
        if($insert){
            return response([
                'status'=>1,
                'message'=>'data inserted',
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'Rest Data',
            ]);
        }
    }
    public function update(Request $request){
        $update = Student::find($request->id);
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
    public function delete(Request $request){
        $data = Student::find($request->id);
        $result = $data->delete();
        if($result){
            return response([
                'message'=>'message deleted'
            ]);
        }
    }
}
