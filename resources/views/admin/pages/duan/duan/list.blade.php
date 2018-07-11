@section('title')
Danh Sách Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2> Dự Án </h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddDuAn')}}" title="">Thêm Mới</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Tên Dự Án</th>
		                        <th>Hình Ảnh</th>
		                        <th>Danh Mục</th>
		                        <th>Trạng Thái</th>
		                        <th>Thông Tin Khác</th>
		                        <th>Sắp Xếp</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($duan as $value)
		                    <tr>
		                        <td>{{$value->title}}</td>
		                        <td class="center" style="width: 18%;"><img width="180" src="{{url('')}}/uploads/du-an/{{$value->image}}" alt=""></td>
		                        <td class="center" style="width: 12%;">{{$value->danhmuc->title}}</td>
		                        
		                        <td class="center" style="width: 8%; font-size: 40px">
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
                            <td style="width: 14%">
								<i>Dự Án Mới: @if($value->new=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Dự Án HOT: @if($value->hot=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Dự Án Nổi Bật: @if($value->noibat=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
	                        </td>
                            <td class="center" style="width: 7%">{!!$value->sort!!}</td>
	                        <td class="center" style="width: 10%">
								<a href="{{route('getEditDuAn',['slug'=>$value->slug])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteDuAn',['id'=>$value->id])}}','Bạn Có Muốn Xoá Dự Án Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
	                        </td>
		                    </tr>
		                    @endforeach
		                </tbody>
		            </table>
		            <div class="pull-right">{{$duan->render()}}</div>
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection