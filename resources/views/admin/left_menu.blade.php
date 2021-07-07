<div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>GR1</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="https://yt3.ggpht.com/yti/APfAmoGbDtOdqSQhsikzWxXXyXiSlJIQHueBmDSPljsTTw=s88-c-k-c0x00ffffff-no-rj-mo" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Admin</span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MENU</h3>
                <ul class="nav side-menu">
                                     
                   
                      <li><a href="index.html">POS bán hàng </a></li>
                      <li><a href="index2.html">Quản lí đơn hàng</a></li>
                      <li><a>Quản lí sản phẩm <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('listing.index' ,['model'=>'categories'])}}">Danh mục</a></li>
                          <li><a href="{{ route('listing.index' ,['model'=>'product'])}}">Sản phẩm</a></li>
                          
                        </ul>
                      </li>

                      <li><a href="{{ route('listing.index' ,['model'=>'customer'])}}">Quản lí khách hàng </a></li>
                      <li><a>Nhập kho <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('listing.index' ,['model'=>'supplier'])}}">Nhà cung cấp</a></li>
                          <li><a href="{{ route('listing.index' ,['model'=>'import'])}}">Phiếu nhập</a></li>
                          
                        </ul>
                      </li>
                      <li><a href="index.html">Doanh số</a></li>
                      <li><a href="index2.html">Lợi nhuận</a></li>
                                   
                      <li><a>Thiết lập  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="{{ route('listing.index' ,['model'=>'admin'])}}">Thành viên </a></li>
                          <li><a href="{{ route('listing.index' ,['model'=>'admin_group'])}}">Nhóm thành viên</a></li>
                          <li><a href="{{ route('listing.index' ,['model'=>'store'])}}">Cửa hàng</a></li>
                        </ul>
                      </li>
                       {{--  <?php if ($admin->admin_group_id==1) : ?>
                          <li id="import"><a href="import"><i class="fa fa-truck"></i><b>Nhập kho</b></a></li>
                       <?php endif; ?>  --}}
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->