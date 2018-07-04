@section('title')
{{trans('action.addNew')}} {{trans('general.language')}}
@stop
@extends('admin.general.master')
@section('content')

<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{trans('action.addNew')}} {{trans('general.language')}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form method="POST" action="{{route('postAddLanguage')}}" class="form-horizontal form-label-left" enctype="multipart/form-data">
        		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.title')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="txtTitle" value="{{old('txtTitle')}}" type="text" class="form-control" required="required">
                            @if($errors->has('txtTitle'))
                                <p style="color:red; float:left">{{$errors->first('txtTitle')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">{{trans('general.code')}}
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input value="{{old('txtCode')}}" name="txtCode" type="text" class="form-control" required="required">
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
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="image" required="required">
                                            </div>
                                        </span>
                                    </div>
                                </div>
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
                            <input value="{{old('txtSort')}}" name="txtSort" type="number" class="form-control" required="required">
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
                                <input type="radio" name="status" id="radio1" checked value="active">
                                <label for="radio1">
                                    {{trans('general.active')}}
                                </label>
                            </div>
                            <div class="radio radio-primary">
                                <input type="radio" name="status" id="radio2" value="inActive">
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
                            <button type="submit" class="btn btn-success pull-right">{{trans('action.addNew')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
