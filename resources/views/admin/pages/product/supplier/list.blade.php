@section('title')
{{trans('general.suppliers')}} | {{trans('general.siteName')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>{{trans('general.suppliers')}}</h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddSupplier')}}" title="">{{trans('action.addNew')}}</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>{{trans('general.title')}}</th>
		                        <th>{{trans('general.category')}}</th>
		                        <th>{{trans('general.language')}}</th>
		                        <th>{{trans('general.status')}}</th>
		                        <th>{{trans('general.sort')}}</th>
		                        <th>{{trans('action.action')}}</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($suppliers as $supplier)
		                    <tr class="center">
		                        <td>{{$supplier->title}}</td>
		                        <td>{{$supplier->category->title}}</td>
		                        <td style="width: 7%"><img width="50" src="{{asset('uploads/icons')}}/{{$supplier->category->language->image}}" alt=""></td>
		                        <td style="width: 7%; font-size: 25px">
                                <?php  
                                    if($supplier->status=='active')
                                    {
                                        echo "<i style='color: #2272EB' class='fa fa-check-circle'></i>";
                                    }
                                    if($supplier->status=='inActive')
                                    {
                                        echo "<i style='color: red' class='fa fa-ban'></i>";
                                    }
                                ?>
                            </td>
                            <td style="width: 5%">{!!$supplier->sort!!}</td>
	                        <td style="width: 10%">
								<a href="{{route('getEditSupplier',['id'=>$supplier->id])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteSupplier',['id'=>$supplier->id])}}','{{trans('notify.msgDelete')}}');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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