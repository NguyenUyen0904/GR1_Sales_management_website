<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class adminGroup_permission extends Base
{
    use HasFactory;
    public function listingConfigs(){
        $defaultListingConfigs=parent::defaultListingConfigs();
        $listingConfigs=array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text',
                'filter'=>'equal'
            ),
            array(
                'field'=>'name',
                'name'=>'Tên sản phẩm',
                'type'=>'text',
                'filter'=>'like'
            )
            
            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
        
    }
}
