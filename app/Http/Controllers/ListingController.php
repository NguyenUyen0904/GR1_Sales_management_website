<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index(Request $request,$modelName){
        $adminUser=Auth::guard('admin')->user();
        $model='\App\Models\\' . ucfirst($modelName);
        $records=$model::paginate(1);
        return view('admin.listing',[
            'user'=>$adminUser,
            'records'=>$records
            ]
        );

    }
}
