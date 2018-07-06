<link href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- <script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script> -->
<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="filepath">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;">
 <script>
 	$(document).ready(function(){
 		var domain = "";
 		$('#lfm').filemanager('image', {prefix: domain});



 		var lfm = function(options, cb) {

			var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';

			window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=300,height=600');
			window.SetUrl = cb;
		}
		lfm({type: 'image', prefix: 'prefix'}, function(url, path) {

		});
 	});
 </script>	
 <!-- <iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe> -->