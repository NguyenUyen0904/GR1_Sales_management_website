<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
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
                'name'=>'Tên sản phẩm',
                'type'=>'text'
            ),
            array(
                'field'=>'image',
                'name'=>'Ảnh sản phẩm ',
                'type'=>'image'
            ),
            array(
                'field'=>'price',
                'name'=>'Gía sản phẩm',
                'type'=>'number'
            )
            

            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
    }
}