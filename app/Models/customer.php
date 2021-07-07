<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    public $title="khách hàng";
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
                'name'=>'Tên sản phẩm',
                'type'=>'text'
            ),
            array(
                'field'=>'email',
                'name'=>'Email',
                'type'=>'text'
            ),
            array(
                'field'=>'phone',
                'name'=>'Số điện thoại',
                'type'=>'text'
            ),
            array(
                'field'=>'address',
                'name'=>'Địa chỉ',
                'type'=>'text'
            ),
            array(
                'field'=>'note',
                'name'=>'Ghi chus',
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
            return array_merge($listingConfigs,$defaultListingConfigs);
        
    }
}
