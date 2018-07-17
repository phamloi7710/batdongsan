@section('title')
Chỉnh Sửa Đối Tác
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="x_panel">
        <div class="x_title">
            <h2>Chỉnh Sửa Đối Tác</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br />
            <form method="POST" action="{{route('postEditDoiTac',['id'=>$doitac->id])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="x_title">
                    <h4>Thông Tin Cơ Bản</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Tên Đối Tác
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input name="txtTitle" value="{{$doitac->title}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtTitle'))
                            <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Đường Dẫn Trang Web
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input name="txtUrl" value="{{$doitac->url}}" type="text" class="form-control" required="required">
                        @if($errors->has('txtUrl'))
                            <p style="color:red; float:left">{{$errors->first('txtUrl')}}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Hình Ảnh</label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <i class="panel-title pull-left">Upload và chỉnh sửa hình ảnh của đối tác.</i>
                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-file">
                                    <span>Chọn Hình</span>
                                    <!-- The file is stored here. -->
                                    <input name="image" type="file" name="image-file">
                                </label>
                                <button type="button" class="btn btn-default">Xoá</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <i class="panel-title pull-left"> Hình ảnh hiện tại</i>
                            </div>
                            <div class="panel-body">
                                <img width="100%" src="{{url('')}}/uploads/doi-tac/{{$doitac->image}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12"> Trạng Thái
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="radio radio-primary">
                            <input type="radio" name="status" id="radio1" @if($doitac->status=='active') checked @endif value="active">
                            <label for="radio1">
                                Hiển Thị 
                            </label>
                        </div>
                        <div class="radio radio-danger">
                            <input type="radio" name="status" id="radio2" @if($doitac->status=='inActive') checked @endif value="inActive">
                            <label for="radio2">
                                <p>Ngưng Hiển Thị</p> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success pull-right">Thêm Mới </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection