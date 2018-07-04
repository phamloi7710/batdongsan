@section('title')
{{trans('general.category')}} | {{trans('general.siteName')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>{{trans('general.category')}}</h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddCategory')}}" title="">{{trans('action.addNew')}}</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>{{trans('general.title')}}</th>
		                        <!-- <th>{{trans('general.image')}}</th> -->
		                        <th>{{trans('general.language')}}</th>
		                        <th>{{trans('general.status')}}</th>
		                        <th>{{trans('general.sort')}}</th>
		                        <th>{{trans('action.action')}}</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($categories as $cates)
		                    <tr class="center">
		                        <td>{{$cates->title}}</td>
		                        <!-- <td><img width="200" src="{{asset('assets/uploads/products/categories')}}/{{$cates->image}}" alt=""></td> -->
		                        <td style="width: 7%"><img width="50" src="{{asset('uploads/icons')}}/{{$cates->language->image}}" alt=""></td>
		                        <td style="width: 7%; font-size: 25px">
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
                            <td style="width: 5%">{!!$cates->sort!!}</td>
	                        <td style="width: 10%">
								<a href="{{route('getEditCategory',['id'=>$cates->id])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteCategory',['id'=>$cates->id])}}','{{trans('notify.msgDelete')}}');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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