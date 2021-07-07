<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    public $title="cửa hàng ";
    public function listingConfigs(){
        return array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
            array(
                'field'=>'name',
                'name'=>'Tên nhóm chức năng',
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
