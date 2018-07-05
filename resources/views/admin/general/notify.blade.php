<script type="text/javascript">
    $(document).ready(function(){
        $(".custom-notifications").delay(1600).slideUp();
    })
</script>
@if(Session('success'))
<div class="custom-notifications">
    <div class="tabbed_notifications">
        <div class="text alert-success">
            <h1 style="text-align: center;"><i class="fa fa-bell"></i></h1>
            <h3 style="text-align: center; font-size: 25px;">
                 <p>{{Session('success')}}</p>
            </h3>
        </div>
    </div>
</div>
@endif
@if(Session('error'))
<div class="custom-notifications">
    <div class="tabbed_notifications">
        <div class="text alert-error">
            <h1 style="text-align: center;"><i class="fa fa-bell"></i></h1>
            <h3 style="text-align: center; font-size: 25px;">
                 <p>{{Session('error')}}</p>
            </h3>
        </div>
    </div>
</div>
@endif