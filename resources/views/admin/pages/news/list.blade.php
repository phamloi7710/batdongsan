@section('title')
Danh Sách Tin Tức
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2> Tin Tức </h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddNews')}}" title="">Thêm Mới</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content table-responsive">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Tiêu Đề</th>
		                        
		                        <th>Hình Ảnh</th>
		                        <th>Danh Mục</th>
		                        <th>Trạng Thái</th>
		                        <th>Thông Tin Khác</th>
		                        <th>Sắp Xếp</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($news as $value)
		                    <tr>
		                        <td>{{$value->title}}</td>
		                        <td class="center" style="width: 18%;">
		                        	@if($value->image)
		                        	<img width="180" src="{{url('')}}/{{$value->image}}" alt="{{$value->title}}">
		                        	@else
		                        	<p>Chưa Có Hình Ảnh</p>
		                        	@endif
		                        </td>
		                        <td class="center" style="width: 12%;">{{$value->category->title}}</td>
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
                            <td style="width: 15%">
								<i>Tin Tức Mới: @if($value->new=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Tin Tức HOT: @if($value->hot=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br>
								<i>Tin Tức Nổi Bật: @if($value->noibat=='true') <i style='color: #2272EB; font-size: 16px; float: right;' class='fa fa-check-circle'></i> @else <i style='color: red; font-size: 16px; float: right;' class='fa fa-ban'></i> @endif </i><br><hr>
								<i>Người Tạo: {{$value->user->name}}</i><br>
								<i>Ngày Tạo: {{date('d/m/Y',strtotime($value->created_at))}}</i><br>
	                        </td>
                            <td class="center" style="width: 7%">{!!$value->sort!!}</td>
	                        <td class="center" style="width: 10%">
								<a href="{{route('getEditNews',['slug'=>$value->slug])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteNews',['id'=>$value->id])}}','Bạn Có Muốn Xoá Tin Tức Này Không?');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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