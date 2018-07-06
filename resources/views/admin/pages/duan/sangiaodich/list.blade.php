@section('title')
Danh Sách Sàn Giao Dịch
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2> Sàn Giao Dịch </h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddSanGiaoDich')}}" title="">Thêm Mới</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Tên Sàn Giao Dịch</th>
		                        <th>Hình Ảnh</th>
		                        <th>Danh Mục</th>
		                        <th>Trạng Thái</th>
		                        <th>Thông Tin Khác</th>
		                        <th>Sắp Xếp</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($sangiaodich as $value)
		                    <tr>
		                        <td>{{$value->title}}</td>
		                        <td class="center" style="width: 20%;"><img width="200" src="{{url('uploads/san-giao-dich')}}/{{$value->image}}" alt=""></td>
		                        <td class="center" style="width: 20%;">{{$value->danhmuc->title}}</td>
		                        <td class="center" style="width: 12%; font-size: 25px">
                                <?php  
                                    if($value->status=='active')
                                    {
                                        echo "<i style='color: #2272EB' class='fa fa-check-circle'></i>";
                                    }
                                    if($value->status=='inActive')
                                    {
                                        echo "<i style='color: red' class='fa fa-ban'></i>";
                                    }
                                ?>
                            </td>
                             <td style="width: 18%">
								<i>Sàn Giao Dịch Mới: @if($value->new=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Sàn Giao Dịch HOT: @if($value->hot=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Sàn Giao Dịch Nổi Bật: @if($value->noibat=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
	                        </td>
                            <td class="center" style="width: 8%">{!!$value->sort!!}</td>
	                        <td class="center" style="width: 8%">
								<a href="{{route('getEditSanGiaoDich',['slug'=>$value->slug])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteSanGiaoDich',['id'=>$value->id])}}','Bạn Có Muốn Xoá Sàn Giao Dịch Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
	                        </td>
		                    </tr>
		                    @endforeach
		                </tbody>
		            </table>
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection