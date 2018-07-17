@section('title')
Danh Sách Đối Tác
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2> Đối Tác </h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddDoiTac')}}" title="">Thêm Mới</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Tên Đối Tác</th>
		                        <th>Đường Dẫn</th>
		                        <th>Hình Ảnh</th>
		                        <th>Trạng Thái</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($doitac as $value)
		                    <tr>
		                        <td style="width: 20%">{{$value->title}}</td>
		                        <td>{{$value->url}}</td>
		                        <td class="center" style="width: 18%;"><img width="180" src="{{url('')}}/uploads/doi-tac/{{$value->image}}" alt=""></td>
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
	                        <td class="center" style="width: 10%">
								<a href="{{route('getEditDoiTac',['id'=>$value->id])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteDoiTac',['id'=>$value->id])}}','Bạn Có Muốn Xoá Đối Tác Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
	                        </td>
		                    </tr>
		                    @endforeach
		                </tbody>
		            </table>
		            <!--  -->
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection