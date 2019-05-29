<?php

namespace App\Http\Controllers;

use App\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function getvillage(){
        $villagedata = Village::all();
        if($villagedata){
            return response([
                'status'=>1,
                'message'=>'All Village Data',
                'data'=>$villagedata
            ]);
        }
        else{
            return response([
                'status'=>0,
                'message'=>'No village data available'
            ]);
        }
}
        public function addvillage(Request $request){
            $addvillage = Village::create($request->all());
            if($addvillage){
                return response([
                    'status'=>1,
                    'message'=> 'Village added'
                ]);
            }
            else{
                return response([
                    'status'=>0,
                    'message'=> 'Not Village added'
                ]);
            }
        }
        public function updatevillage(Request $request){
            $update = Village::find($request->id);
            $update->update($request->all());
            if($update){
                return response([
                    'status'=>1,
                    'message'=>'Village updated'
                ]);
            }
            else{
                return response([
                    'status'=>0,
                    'message'=>'Village not updated'
                ]);
            }
        }
        public function deletevillage(Request $request){
            $data = Village::find($request->id);
            $result = $data->delete();
            if($result){
                return response([
                    'message'=>'Village deleted'
                ]);
            }
        }

}
