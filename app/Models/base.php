<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class base extends Model
{
    use HasFactory;
    public function defaultListingConfigs(){
        return array(
            
                                  
            array(
                'field'=>'updated_at',
                'name'=>'Ngày cập nhật',
                'type'=>'text'
            ),
            array(
                'field'=>'created_at',
                'name'=>'Ngày tạo',
                'type'=>'text'
            ),
            array(
                'field'=>'edit',
                'name'=>'Sửa',
                'type'=>'edit'
            ),
            array(
                'field'=>'delete',
                'name'=>'Xóa',
                'type'=>'delete'
            )
            

            );
            
        }
}
