@section('title')
{{$duan->title}}@stop
@section('seoDescription')
{{$duan->seoDescription}}@stop
@section('seoKeywords')
{{$duan->seoKeywords}}@stop
@section('seoTitle')
{{$duan->seoTitle}}@stop
@section('url')
{{route('getDuAnDetail',['slug'=>$duan->slug])}}@stop
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
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><a href="{{route('getDuAn')}}" title=""> Dự Án</a></li>
                        <b></b> 
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong>{{$duan->title}}</strong> </li>
                    </ul>
                </div>
                <div class="project-detail">
                    <h1 class="title clearfix"><span>{{$duan->title}}</span></h1>
                    <div class="property-detail clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 clearfix property-image">
                                <div id="property-slider" class="flexslider property-slider">
                                    <ul class="slides">
                                        <li class="image">
                                            <img src="{{url('')}}/uploads/du-an/{{$duan->image}}" class="img-responsive" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 property-info">
                                <h2 class="name">{{$duan->title}}</h2>
                                <ul>
                                    <li>
                                        Giá:<label class="price">@if($duan->price){{number_format($duan->price, 0, ',', '.')}} (đ)@else Đang Cập Nhật @endif </label>
                                    </li>
                                    <li>
                                        Ngày đăng:<label class="price"> {{date('d/m/Y',strtotime($duan->created_at))}} {{date('H:i',strtotime($duan->created_at))}}</label>
                                    </li>
                                    <li>
                                        Địa chỉ:<label>@if($duan->address){{$duan->address}}@else Đang Cập Nhật @endif</label>
                                    </li>
                                    <li>
                                        Khu vực:<label>{{$duan->tinh->type}} {{$duan->tinh->name}}</label>
                                    </li>
                                    <li>
                                        Loại:<label>{{$duan->type}}</label>
                                    </li>
                                    <li>
                                        Danh mục bất động sản:<label>{{$duan->danhmuc->title}}</label>
                                    </li>
                                    <li>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-tabs  margin-top-10">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a data-toggle="tab" href="#tab1">Chi Tiết Dự Án</a></li>
                        <li role="presentation" class=""><a data-toggle="tab" href="#tab2">Bình Luận</a></li>
                        <li role="presentation" class=""><a data-toggle="tab" href="#tab3">Đánh Giá</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            {!!$duan->description!!}
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            tab 2
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            tab 3
                        </div>
                    </div>
                </div>
                <div class="share-network clearfix">
                    <ul>
                        <li>
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                                <a class="addthis_counter addthis_pill_style addthis_nonzero"></a>
                            </div>
                            <script type="text/javascript" src="scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                            <!-- AddThis Button END -->
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-project">
                    <h3 class="title clearfix">
                        <span>Dự án nổi bật</span>
                    </h3>
                    <div class="box-project-block">
                        <div class="item">
                            <h2 class="name">
                                <a href="/du-an/can-ho-sunview-town-thu-duc.html" title="Căn Hộ Sunview Town-Thủ Đức">Căn Hộ Sunview Town-Thủ Đức</a>
                            </h2>
                            <div class="image image-resize">
                                <a href="/du-an/can-ho-sunview-town-thu-duc.html" title="Căn Hộ Sunview Town-Thủ Đức">
                                <img src="Uploads/shop107/images/product/property-04-244x163.jpg" class="img-responsive" />
                                </a>
                                <span class="ribbon"></span>
                            </div>
                            <div class="description">
                                <p>
                                    Sunview Town là khu phức hợp căn hộ ven sông với tiện ích tuyệt vời cho phân khúc căn hộ giá rẻ nhưng được thiết kế theo tiêu chuẩn Singapore. Căn hộ Sunview Town liền kề Bình Thạnh với giá chỉ từ 688 triệu với 02 phòng ngủ. Dự án được hỗ trợ gói 30 nghìn tỷ do Đất Xanh Group làm chủ đầu tư. Diện tích từ 54m2. Hỗ trợ vay ngân hàng từ 15 - 20 năm. Liên hệ:  0914.66.88.15
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection