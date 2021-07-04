<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class categories extends Base
{
    use HasFactory;
    public function listingConfigs(){
        $defaultListingConfigs=parent::defaultListingConfigs();
        $listingConfigs=array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
            array(
                'field'=>'name',
                'name'=>'Tên danh muc',
                'type'=>'text'
            )
            

            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
    }
}