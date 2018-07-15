<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('getIndexFrontend')}}" target="_blank" class="site_title"><i class="fa fa-paw"></i> <span>TECCO GROUP</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('assets/admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin Chào,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{route('getIndexAdmin')}}"><i class="fas fa-home"></i> Trang Chủ</a></li>
                    <li>
                        <a><i class="fas fa-cogs"></i> Dự Án<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('getListDuAn')}}"> Dự Án</a></li>
                            <li><a href="{{route('getListDanhMucDuAn')}}"> Nhóm Dự Án</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                        <a><i class="fas fa-cogs"></i> Sàn Giao Dịch<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('getListDanhMucSanGiaoDich')}}"> Nhóm Sàn Giao Dịch</a></li>
                            <li><a href="{{route('getListSanGiaoDich')}}"> Sàn Giao Dịch</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a><i class="fas fa-cogs"></i> Tin Tức<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('getlistNewsCategories')}}"> Nhóm Tin Tức</a></li>
                            <li><a href="{{route('getlistNews')}}"> Tin Tức</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fas fa-cogs"></i> Cấu Hình <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('getGeneralConfig')}}"> Cấu Hình Chung</a></li>
                            <li><a href="{{route('getEmailConfig')}}"> Cấu Hình Email</a></li>
                             <li><a href=""> Cấu Hình Mạng Xã Hội </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('getListLienHe')}}"><i class="fas fa-cogs"></i> Liên Hệ </a>
                    </li>
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
    </div>
</div>