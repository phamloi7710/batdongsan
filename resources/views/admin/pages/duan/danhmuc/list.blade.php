@section('title')
Danh Sách Danh Mục Dự Án
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>Danh Mục Dự Án </h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddDanhMucDuAn')}}" title="">Thêm Mới</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Tên Danh Mục</th>
		                        <th>Trạng Thái</th>
		                        <th>Sắp Xếp</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($categories as $cates)
		                    <tr class="center">
		                        <td>{{$cates->title}}</td>
		                        <td style="width: 12%; font-size: 25px">
                                <?php  
                                    if($cates->status=='active')
                                    {
                                        echo "<i style='color: #2272EB' class='fa fa-check-circle'></i>";
                                    }
                                    if($cates->status=='inActive')
                                    {
                                        echo "<i style='color: red' class='fa fa-ban'></i>";
                                    }
                                ?>
                            </td>
                            <td style="width: 10%">{!!$cates->sort!!}</td>
	                        <td style="width: 10%">
								<a href="{{route('getEditDanhMucDuAn',['slug'=>$cates->slug])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteDanhMucDuAn',['id'=>$cates->id])}}','Bạn Có Muốn Xoá Danh Mục Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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