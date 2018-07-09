<footer>
                    <div class="pull-right">
                        Tập Đoàn TECCO - Website Được Thiết Kế Và Phát Triển Bởi <a href="https://www.facebook.com/culoi7710">Phạm Văn Lợi</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <script>
            $(document).ready(function(){
                var domain = "";
                $('.lfm').filemanager('image', {prefix: domain});
                var lfm = function(options, cb) {
                    var route_prefix = (options && options.prefix) ? options.prefix : '/admin/quan-ly-hinh-anh';
                    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                    window.SetUrl = cb;
                }
                lfm({type: 'image', prefix: 'prefix'}, function(url, path) {
                });
            });
         </script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendors/fastclick/lib/fastclick.js')}}"></script>
        <script src="{{asset('assets/admin/vendors/nprogress/nprogress.js')}}"></script>
        <script src="{{asset('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
        <script src="{{asset('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
        <script src="{{asset('assets/admin/vendors/google-code-prettify/src/prettify.js')}}"></script>
        <script src="{{asset('assets/admin/')}}/vendors/switchery/dist/switchery.min.js"></script>
        <script src="{{asset('assets/admin/')}}/vendors/select2/dist/js/select2.full.min.js"></script>
        <script src="{{asset('assets/admin/')}}/vendors/iCheck/icheck.min.js"></script>
        <script src="{{asset('assets/admin')}}/laravel-filemanager/js/lfm.js"></script>
        <script src="{{asset('assets/admin/build/js/custom.js')}}"></script>
        <script src="{{asset('assets/admin/theme/custom.js')}}"></script>
    </body>
</html>