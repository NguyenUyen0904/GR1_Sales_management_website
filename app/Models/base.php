<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;

class base extends Model
{
    use HasFactory;
    public function getRecords($conditions){
        return self::where($conditions)->paginate(1);  
    }
    public function getFilter($request,$configs,$modelName){
        $conditions=[];
          
        if($request->method()=="POST"){
            foreach($configs as $config){
                if(!empty($config['filter'])){
                    $value=$request->input($config['field']);
                    switch($config['filter']){
                       
                            case "equal":
                                if(!empty($value)){
                                $conditions[]=[
                                    'field'=>$config['field'],
                                    'condition'=>'=',
                                    'value'=>$value
                                ];}

                                break;

                                case "like":
                                    if(!empty($value)){
                                    $conditions[]=[
                                        'field'=>$config['field'],
                                        'condition'=>'like',
                                        'value'=>'%'.$value.'%'
                                    ];}
                                    break;
                                case "between":
                                        if(!empty($value['from'])){
                                            $conditions[]=[
                                                'field'=>$config['field'],
                                                'condition'=>'>=',
                                                'value'=>$value['from']
                                            ];
                                        }
                                        if(!empty($value['to'])){
                                            $conditions[]=[
                                                'field'=>$config['field'],
                                                'condition'=>'<=',
                                                'value'=>$value['to']
                                            ];
                                        }
                                        
                                        break;
                        
                    }
                }
            }
            if(!empty($conditions)){
                Cookie::queue(strtolower($modelName).'_filter',json_encode($conditions),24 * 60);
            }
        }
        else{//method GET
                $conditions=json_decode(Cookie::get(strtolower($modelName).'_filter',true));
                foreach($conditions as & $condition){
                    $condition= (array) $condition;
                }
                
            
        }
        return $conditions;
    }
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
