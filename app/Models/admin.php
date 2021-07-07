<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use App\Models\Base;

class admin  extends Base implements AuthenticatableContract
{
   
    use Authenticatable;
    public $title="Thành viên";
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
            ),
            array(
                'field'=>'email',
                'name'=>'Email',
                'type'=>'text'
                
            ),
            
            
            array(
                'field'=>'admin_group_id',
                'name'=>'Nhóm chức năng',
                'type'=>'number',
                'filter'=>'equal'
            ),array(
                'field'=>'store_id',
                'name'=>'Cửa hàng',
                'type'=>'number',
                'filter'=>'equal'
            ),

            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
        
    }
}
