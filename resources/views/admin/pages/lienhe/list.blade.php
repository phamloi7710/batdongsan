@section('title')
Liên Hệ
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2> Liên Hệ </h2>
		           
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>Họ Tên</th>
		                        <th>Email</th>
		                        <th>Số Điện Thoại</th>
		                        <th>Trạng Thái</th>
		                        <th>Thao Tác</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($lienhe as $value)
		                    <tr>
		                    	<td>{{$value->name}}</td>
		                    	<td><a href="mailto:{{$value->email}}" "email me">{{$value->email}}</a></td>
		                    	<td>{{$value->phone}}</td>
		                    	<td class="center">@if($value->status=='true')<span class="label label-success">Đã Liên Hệ</span> @else <span class="label label-danger">Đang Chờ Xử Lý...</span> @endif</td>
		                    	<td style="width: 15%">
									<a data-toggle="modal" data-target=".{{$value->id}}"href="" class="btn btn-primary btn-xs" title="">Xem Thêm</a>
									<a onclick="return alertMsg('','Bạn Có Muốn Xoá Liên Hệ Này Không?');" class="btn btn-xs btn-danger">Xoá</a>
		                        </td>
		                    </tr>
		                    @endforeach
		                </tbody>
		            </table>
		            <div class="pull-right">{{$lienhe->links()}}</div>
		        </div>
		    </div>
		</div>
	</div>
</div>
@foreach($lienhe as $value)
<form method="POST" action="{{route('postEditLienHe',['id'=>$value->id])}}" class="form-horizontal form-label-left">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="modal fade {{$value->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Liên Hệ</h4>
                </div>
                <div class="modal-body table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Họ Tên</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{{$value->name}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Địa Chỉ</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{{$value->address}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Email</th>
                            <td class="col-md-9 col-sm-9 col-xs-9"><a href="mailto:{{$value->email}}" "email me">{{$value->email}}</a></td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Số Điện Thoại</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{{$value->phone}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Tiêu Đề</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{{$value->title}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Nội Dung</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{!!$value->content!!}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Ngày Liên Hệ</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">{{date('Y/m/d',strtotime($value->created_at))}}</td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Trạng Thái</th>
                            <td class="col-md-9 col-sm-9 col-xs-9">
								<div class="row">
                                    <div class="col-md-9">
                                        @if($value->status=='true')
                                        <div class="lable lable-success"><span class="label label-success">Đã Liên Hệ</span></div>
                                        @else
                                        <div class="lable lable-danger"><span class="label label-danger">Đang Chờ Xử Lý...</span></div>
                                        @endif
                                    </div>
                                    <div class="col-md-3" id="{{$value->id}}">
                                        <select name="sltstatus" class="form-control pull-right">
                                            <option value="true" 
                                                <?php
                                                    if($value->status=='true')
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>
                                                >Đã Xử Lý</option>
                                            <option value="false"
                                                <?php
                                                    if($value->status=='false')
                                                    {
                                                        echo "selected";
                                                    }
                                                    ?>
                                                >Đang Chờ Xử Lý...</option>
                                        </select>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-md-3 col-sm-3 col-xs-3">Ghi Chú</th>
                            <td class="col-md-9 col-sm-9 col-xs-9"><textarea name="note" class="form-control" rows="6"></textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-primary">Cập Nhật</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach 
@endsection