@section('title')
Tất Cả Dự Án @stop

@section('seoDescription')
@if($config){{$config->seoDescription}}@endif @stop

@section('seoKeywords')
@if($config){{$config->seoKeywords}}@endif @stop

@section('seoTitle')
@if($config){{$config->seoTitle}}@endif @stop

@section('url')
@if($config){{route('getDuAn')}}@endif @stop

@extends('frontend.general.master')
@section('content')
<div class="box-html">
    <p>
        <img alt="" src="{{url('')}}/assets/frontend/uploads/shop108/images/banner06.jpg" style="width: 100%; " />
    </p>
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
                        <li>&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i><strong> Dự Án </strong> </li>
                    </ul>
                </div>
                <script type="text/javascript">
                    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                </script>
                <section class="project-content clearfix">
                    <h1 class="title clearfix">
                        <span>Dự án</span>
                    </h1>
                    <div class="project-block project-grid clearfix">
                        <div class="row">
                            @if(count($duan)>0)
                            @foreach($duan as $value)
                            <div class="col-md-3 col-sm-3 col-xs-12 project-resize project-item-box">
                                <div class="project-item">
                                    <h2 class="name">
                                        <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}" title="{{$value->title}}">{{$value->title}}</a>
                                    </h2>
                                    <div class="image image-resize">
                                        <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}" title="{{$value->title}}">
                                        <img src="{{url('')}}/uploads/du-an/{{$value->image}}" class="img-responsive" />
                                        </a>
                                        <span class="ribbon">{{$value->type}}</span>
                                    </div>
                                    <div class="description">
                                        <p>
                                            {{$value->summary}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            @else
                            <p style="text-align: center; margin-top: 25px; margin-bottom: 50px; font-size: 18px; color: #45D4F5; ">Không Có Dữ Liệu Để Hiển Thị</p>
                            @endif
                        </div>
                        <div class="center paging">{{$duan->render()}}</div>
                    </div>
                </section>
            </div>
            <div class="col-md-3">
                <div class="menu-search">
                    <h3 class="menu-title">
                        <span></span>Tìm kiếm
                    </h3>
                    <div class="form-search">
                        <form method="GET" action="{{route('getDuAn')}}" class="form-horizontal form-label-left">
                            
                             <ul>
                                <li>
                                    <select class="form-control" name="category">
                                        <option value="">--Chọn loại danh mục--</option>
                                        @foreach($danhmuc as $value)
                                        <option value="{{$value->id}}">{{$value->title}}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li>
                                    <select class="form-control" name="type">
                                        <option value="">--Chọn loại bất động sản--</option>
                                        <option value="Mua Bán">Mua Bán</option>
                                        <option value="Cho Thuê">Cho Thuê</option>
                                    </select>
                                </li>
                                <li>
                                    <select class="form-control" id="tinh" name="province">
                                        <option value="">--Chọn khu vực--</option>
                                        @foreach($province as $value)
                                        <option value="{{$value->provinceid}}">{{$value->name}}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <li>
                                    <select class="form-control" id="huyen" name="district">
                                        <option value="">--Chọn loại quận huyện--</option>
                                    </select>
                                </li>
                                
                                <!-- <li>
                                    <select class="form-control" name="price">
                                        <option value="">-- Mức Giá --</option>
                                        <option value=""> Dưới 1.000.000.000 (đ)</option>
                                        <option value=""> Từ 1.000.000.000 (đ) Đến 2.000.000.000 (đ)</option>
                                        <option value=""> Từ 2.000.000.000 (đ) Đến 3.000.000.000 (đ)</option>
                                        <option value=""> Từ 3.000.000.000 (đ) Đến 4.000.000.000 (đ)</option>
                                        <option value=""> Từ 4.000.000.000 (đ) Đến 5.000.000.000 (đ)</option>
                                        <option value=""> Trên 5.000.000.000 (đ)</option>
                                    </select>
                                </li> -->
                                <li><button type="submit" class="btn btn-default">Tìm kiếm</button></li>
                            </ul>
                        </form>
                        
                    </div>
                </div>
                <div class="box-project">
                    <h3 class="title clearfix">
                        <span>Dự án nổi bật</span>
                    </h3>
                    <div class="box-project-block">
                        @if(count($duannoibat)>0)
                        @foreach($duannoibat as $value)
                        <div class="item">
                            <h2 class="name">
                                <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}" title="{{$value->title}}">{{$value->title}}</a>
                            </h2>
                            <div class="image image-resize">
                                <a href="{{route('getDuAnDetail',['slug'=>$value->slug])}}" title="{{$value->title}}">
                                <img src="{{url('')}}/uploads/du-an/{{$value->image}}" class="img-responsive" />
                                </a>
                                <span class="ribbon">{{$value->type}}</span>
                            </div>
                            <div class="description">
                                <p>
                                    {{$value->summary}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p style="text-align: center; margin-top: 25px; margin-bottom: 50px; font-size: 18px; color: #45D4F5; ">Không Có Dữ Liệu Để Hiển Thị</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function(){
        $("#tinh").change(function(){
            var provinceid = $(this).val();
            $.get("ajax/district/"+provinceid, function(data){
                $("#huyen").html(data);
            })
        });
    })
</script>
@endsection
@stop