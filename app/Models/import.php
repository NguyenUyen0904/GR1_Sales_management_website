<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class admin extends Model implements AuthenticatableContract
{
   
    use Authenticatable;
    public function listingConfigs(){
        return array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
            array(
                'field'=>'name',
                'name'=>'Tên sản phẩm',
                'type'=>'text'
            ),
            array(
                'field'=>'email',
                'name'=>'Email',
                'type'=>'text'
            ),
            
            array(
                'field'=>'updated_at',
                'name'=>'Ngày cập nhật',
                'type'=>'text'
            ),
            array(
                'field'=>'created_at',
                'name'=>'Ngày tạo',
                'type'=>'text'
            )

            );
        
    }
}