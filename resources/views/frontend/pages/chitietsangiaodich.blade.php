@section('title')
Sàn Giao Dịch Bất Động Sản Tecco
@stop
@extends('frontend.general.master')
@section('content')
<div class="box-html">
    <p>
        <img alt="" src="{{url('')}}/assets/frontend/uploads/shop108/images/banner06.jpg" style="width: 100%; " />
    </p>
</div>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="breadcrumb clearfix">
                    <ul>
                        <li class="home">
                            <a title="Đến trang chủ" href="{{route('getIndexFrontend')}}"><span>Trang chủ</span></a>
                        </li>
                        <b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><a href="{{route('getSanGiaoDich')}}" title=""> Sàn Giao Dịch</a></li><b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong>{{$sangiaodich->title}}</strong> </li>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                </script>
                <script src="Scripts/common/mycard.js" type="text/javascript"></script>
                <script src="Scripts/common/tabs.js" type="text/javascript"></script>
                <div class="property-detail clearfix">
                    <h1 class="title clearfix"><span>Sàn giao dịch</span></h1>
                    <div class="property-block clearfix ">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 clearfix property-image">
                                <div id="property-slider" class="flexslider property-slider">
                                    <ul class="slides">
                                        <li class="image">
                                            <img src="{{url('')}}/assets/frontend/uploads/shop108/images/property8.jpg" class="img-responsive" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 property-info">
                                <h2 class="name">{{$sangiaodich->title}}</h2>
                                <ul>
                                    <li>
                                        Giá:<label class="price">{{number_format($sangiaodich->price, 0, ',', '.')}} (đ)</label>
                                    </li>
                                    <li>
                                        Ngày đăng:<label class="price"> {{date('d/m/Y',strtotime($sangiaodich->created_at))}} {{date('H:i',strtotime($sangiaodich->created_at))}}</label>
                                    </li>
                                    <li>
                                        Địa chỉ:<label>{{$sangiaodich->address}}</label>
                                    </li>
                                    <li>
                                        Khu vực:<label>{{$sangiaodich->area}}</label>
                                    </li>
                                    <li>
                                        Loại:<label>{{$sangiaodich->type}}</label>
                                    </li>
                                    <li>
                                        Danh mục bất động sản:<label>{{$sangiaodich->category->title}}</label>
                                    </li>
                                    <li>
                                        Người đăng:<label></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-tabs">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#">Chi tiết</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="pm-mota" style="font-family: Tahoma; margin: 0px 0px 5px; padding: 0px; color: rgb(142, 142, 142); font-weight: bold; line-height: 18px;">
                            Thông tin mô tả
                        </div>
                        <div ac="2" cid="7869" class="pm-content stat" ct="2" style="font-family: Tahoma; font-size: 13px; margin: 0px; padding: 0px; color: rgb(0, 0, 0); line-height: 18px;">
                            {!!$sangiaodich->description!!}
                        </div>
                    </div>
                </div>
                <div class="property-info-detail clearfix">
                    <h3>
                        Thông tin người đăng
                    </h3>
                    <ul>
                        <li>Đăng bởi : <label>{{$sangiaodich->userPostName}}</label></li>
                        <li>Địa chỉ: <label>{{$sangiaodich->userPostAddress}}</label></li>
                        <li>Điện thoại:<label> {{$sangiaodich->userPostPhone}}</label></li>
                        <li>Email: <label>{{$sangiaodich->userPostEmail}}</label></li>
                    </ul>
                </div>
                <div class="share-social">
                    <div class="social-btn">
                        <!-- AddThis Button BEGIN -->
                        <div class="addthis_toolbox addthis_default_style">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            <a class="addthis_counter addthis_pill_style addthis_nonzero"></a>
                        </div>
                        <script type="text/javascript" src="scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                        <!-- AddThis Button END -->
                    </div>
                </div>
            </div>
            @include('frontend.general.danhmucsangiaodich')
        </div>
    </div>
</div>
@stop