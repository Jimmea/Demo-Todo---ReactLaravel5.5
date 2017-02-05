@if(has_flash('success'))
    <div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-success myadmin-alert-bottom alertbottom2" id="myadmin-alert"
         style="display: block;text-align: center">
            <a href="javascript:void(0)" class="closed">×</a>
            <h4>You have a new Message!</h4>
        {{ get_flash('success') }} . <a href="#" class="closed">×</a>
    </div>
@endif

@if(has_flash('error'))
    <div class="myadmin-alert myadmin-alert-img myadmin-alert-click alert-warning myadmin-alert-bottom alertbottom2" id="myadmin-alert"
         style="display: block;text-align: center">
            <a href="javascript:void(0)"  class="closed">×</a>
            <h4>You have a new Message!</h4>
        {{ get_flash('error') }}. <a href="#" class="closed">×</a>
    </div>
@endif

<script>
   $(document).ready(function ()
   {
       setTimeout(function () {
           $('#myadmin-alert').fadeOut('slow').remove();
       }, 5000);

       $('.closed').click(function ()
       {
           $('#myadmin-alert').remove();
       })
   })
</script>