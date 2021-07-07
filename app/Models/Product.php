<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class product extends Base
{
    use HasFactory;
    public $title= "Sản phẩm";
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
                'field'=>'image',
                'name'=>'Ảnh sản phẩm ',
                'type'=>'image'
            ),
            array(
                'field'=>'price',
                'name'=>'Gía sản phẩm',
                'type'=>'number',
                //'filter'=>'between'
            )
            );
            return array_merge($listingConfigs,$defaultListingConfigs);
        
    }
}