@extends('layouts.admin');
@section('content');
    <div class="">
        <div class="page-title">
            <form calss="filter-form" action="{{route('listing.index',['model'=>$modelName])}}" method="POST">
                @csrf
                <fieldset>
                    <legend>Tìm kiếm:</legend>
                    <?php
                    foreach ($configs as $config){
                        if (!empty($config['filter'])){
                            switch ($config['filter']){
                                case "equal":?>
                                <div class="filter-item">
                                    <label><?= $config['name'] ?></label>
                                    <input type="text" name="<?=$config['field']?>" value="<?=(!empty($config['filter_value']))?$config['filter_value']:""?>" />
                                 </div>
                                <?php
                                break;
                                 case "like":?>
                                <div class="filter-item">
                                    <label><?= $config['name'] ?></label>
                                    <input type="text" name="<?=$config['field']?>" value="<?=(!empty($config['filter_value']))?$config['filter_value']:""?>" />
                                 </div>
                                <?php
                                break;
                                 case "between":?>
                                <div class="filter-item">
                                    <label><?= $config['name'] ?>  từ </label>
                                    <input type="text" name="<?=$config['field']?>" value="" />
                                    <label>đến</label> 
                                    <input type="text" name="<?=$config['field']?>" value="" />
                                </div>
                                <?php
                                break;
                            }
                        
                        }

                    }
                    ?>
                   
                    <button type="submit" class="btn btn-primary">Tìm</button>

                </fieldset>
            </form>
        </div>

        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>


        <div class="row" style="display: block;">

            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><b>DANH SÁCH</b></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <?php foreach ($configs as $config) { ?>

                                    <th><?= $config['name'] ?></th>
                                        <?php } ?>
                                   
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($records as $record) { ?>
                                    <tr>
                                        <?php foreach ($configs as $config) { ?>
                                        <?php switch ($config['type']) { case 'text': ?>
                                            <td><?= $record[$config['field']] ?></td>
                                            <?php break;case 'image': ?>
                                            <td><img src"<?= $record[$config['field']] ?>"/> </td>
                                            <?php break;case 'number': ?>
                                            <td><?= number_format($record[$config['field']], 0, '.', ',') ?></td>
                                            <?php break;case 'edit': ?>
                                            <td><a href ="#">Edit</a> </td>
                                            <?php break;case 'delete': ?>
                                            <td><a href ="#">Delete</a> </td>
                                            <?php break;} ?>
                                           
                                    <?php } ?>              
                                </tr>
                                <?php } ?>
                            
                              </tbody>
                            </table>
                            <?= $records->links('pagination::bootstrap-4') ?>

                          </div>
                        </div>
                      </div>              
                    </div>
                  </div>
@endsection;
