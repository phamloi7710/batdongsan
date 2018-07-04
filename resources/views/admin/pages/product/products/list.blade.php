@section('title')
{{trans('general.products')}} | {{trans('general.siteName')}}
@stop
@extends('admin.general.master')
@section('content')
<div class="right_col" role="main">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="x_panel">
		        <div class="x_title">
		            <h2>{{trans('general.products')}}</h2>
		            <a class="btn btn-primary btn-xs pull-right" href="{{route('getAddProduct')}}" title="">{{trans('action.addNew')}}</a>
		            <div class="clearfix"></div>
		        </div>
		        <div class="x_content">
		        	<table class="table table-bordered">
		                <thead>
		                    <tr class="center">
		                        <th>{{trans('general.title')}}</th>
		                        <th>{{trans('general.image')}}</th>
		                        <th>{{trans('general.language')}}</th>
		                        <th>{{trans('general.status')}}</th>
		                        <th>{{trans('general.sort')}}</th>
		                        <th>{{trans('action.action')}}</th>
		                    </tr>
		                </thead>
		                <tbody>
		                	@foreach($products as $product)
		                    <tr class="center">
		                        <td>{{$product->title}}</td>
		                        <td style="width: 10%;"><img width="200" src="{{asset('uploads/products/products')}}/{{$product->image}}" alt=""></td>
		                        <td style="width: 7%"><img width="50" src="{{asset('uploads/icons')}}/{{$languages[$product->lang_code]->image}}" alt=""></td>
		                        <td style="width: 7%; font-size: 25px">
                                <?php  
                                    if($product->status=='active')
                                    {
                                        echo "<i style='color: #2272EB' class='fa fa-check-circle'></i>";
                                    }
                                    if($product->status=='inActive')
                                    {
                                        echo "<i style='color: red' class='fa fa-ban'></i>";
                                    }
                                ?>
                            </td>
                            <td style="width: 5%">{!!$product->sort!!}</td>
	                        <td style="width: 10%">
								<a href="{{route('getEditProduct',['id'=>$product->id])}}" class="btn btn-primary btn-xs" title=""><i class="fa fa-edit"></i></a>
								<a onclick="return alertMsg('{{route('getDeleteProduct',['id'=>$product->id])}}','{{trans('notify.msgDelete')}}');" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
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