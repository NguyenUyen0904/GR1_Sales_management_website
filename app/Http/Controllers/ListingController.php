<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Models;
use Illuminate\Support\Facades\Cookie;


class ListingController extends Controller
{
    public function index(Request $request,$modelName){
        $adminUser=Auth::guard('admin')->user();
        $model='\App\Models\\' . ucfirst($modelName);
        $model=new $model;
        $configs=$model->listingConfigs();
        $conditions=$model->getFilter($request,$configs,$modelName);
       
        $records=$model->getRecords($conditions);
             
        
        return view('admin.listing',[
            'user'=>$adminUser,
            'records'=>$records,
            'configs'=>$configs,
            'modelName'=>$modelName,
            
            ]
        );

    }
}
