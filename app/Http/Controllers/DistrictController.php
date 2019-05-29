<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getdistrict(){
        $statedata = District::with('villages')->get();
        if(count($statedata)){
        return response([
            'status'=>1,
            'message'=>'District Data',
            'data'=>$statedata
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No District Data Found',
                
                ]);
        } 
    }
    public function adddistrict(Request $request){
        $insertdata = District::create($request->all());
        if($insertdata){
            return response([
                'status'=>1,
                'message'=>' District Added successfully',
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No District Data',
            ]);
        }
    }
    public function updatedistrict(Request $request){
        $update = District::find($request->id);
        $update->update($request->all());
        if($update){
            return response([
                'status'=>1,
                'message'=>'District updated'
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'District not updated'
            ]);
        }
    }
    public function deletedistrict(Request $request){
        $data = District::find($request->id);
        $result = $data->delete();
        if($result){
            return response([
                'message'=>'District deleted'
            ]);
        }
    }
}
