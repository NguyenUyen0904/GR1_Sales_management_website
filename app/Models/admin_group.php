<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class admin_group extends Base
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
                'name'=>'Tên nhóm chức năng',
                'type'=>'text',
                'filter'=>'like'
            )
            
            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
        
    }
}
