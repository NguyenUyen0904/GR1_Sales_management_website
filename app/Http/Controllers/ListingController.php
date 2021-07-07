<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Models;

class ListingController extends Controller
{
    public function index(Request $request,$modelName){
        $adminUser=Auth::guard('admin')->user();
        $model='\App\Models\\' . ucfirst($modelName);
        $conditions=[];
        $records=$model::where($conditions)->paginate(1);
        //$configs=;
        $model=new $model;
        $configs=$model->listingConfigs();
        return view('admin.listing',[
            'user'=>$adminUser,
            'records'=>$records,
            'configs'=>$configs,
            
            ]
        );

    }
}
