@section('title')
{{trans('action.edit')}} {{trans('general.language')}}
@stop
@extends('admin.general.master')
@section('content')

<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{trans('action.edit')}} {{trans('general.language')}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="{{route('postEditLanguage',['id'=>$language->id])}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.title')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txtTitle" value="{{$language->title}}" type="text" class="form-control" required="required">
                            @if($errors->has('txtTitle'))
                                <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.code')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{$language->code}}" name="txtCode" type="text" class="form-control" required="required">
                            @if($errors->has('txtCode'))
                                <p style="color:red; float:left">{{$errors->first('txtCode')}}</p>
                            @endif
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.image')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">    
                                <div class="col-xs-12 col-md-6col-sm-8">  
                                    <!-- image-preview-filename input [CUT FROM HERE]-->
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <div class="btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image">
                                            </div>
                                        </span>
                                    </div><!-- /input-group image-preview [TO HERE]--> 
                                    
                                </div>
                            </div>
                            <div>
                                <img src="{{asset('uploads/icons')}}/{{$language->image}}" style="width: 250px; height: 150px;">
                            </div>
                            @if($errors->has('image'))
                                <p style="color:red; float:left">{{$errors->first('image')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.sort')}}
                        </label>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <input value="{{$language->sort}}" name="txtSort" type="number" class="form-control" required="required">
                            @if($errors->has('txtSort'))
                                <p style="color:red; float:left">{{$errors->first('txtSort')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.status')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="radio radio-primary">
                                <input type="radio" name="status" id="radio1" value="active" @if($language->status=='active') checked @endif>
                                <label for="radio1">
                                    {{trans('general.active')}}
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <input type="radio" name="status" id="radio2" value="inActive" @if($language->status=='inActive') checked @endif>
                                <label for="radio2">
                                    {{trans('general.inActive')}}
                                </label>
                            </div>
                        </div>
                        @if($errors->has('status'))
                            <p style="color:red; float:left">{{$errors->first('status')}}</p>
                        @endif
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="btn btn-success pull-right">{{trans('action.update')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
