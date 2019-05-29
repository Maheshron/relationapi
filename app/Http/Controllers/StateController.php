<?php

namespace App\Http\Controllers;

use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function getstate(){
        $statedata = State::with('districts')->get();
        if(count($statedata)){
        return response([
            'status'=>1,
            'message'=>'States Data',
            'data'=>$statedata
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No States Data',
                
                ]);
        } 
    }
    public function addstate(Request $request){
        $insertdata = State::create($request->all());
        if($insertdata){
            return response([
                'status'=>1,
                'message'=>' State Added successfully',
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No State Data',
            ]);
        }
    }
    public function updatestate(Request $request){
        $update = State::find($request->id);
        $update->update($request->all());
        if($update){
            return response([
                'status'=>1,
                'message'=>'State updated'
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'State not updated'
            ]);
        }
    }
    public function deletestate(Request $request){
        $data = State::find($request->id);
        $result = $data->delete();
        if($result){
            return response([
                'message'=>'State deleted'
            ]);
        }
    }
}
