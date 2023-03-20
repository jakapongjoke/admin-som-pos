<div class="action_wrp">
    <div class="action_button">
        <span>...</span>
    </div>
    <div class="action_list">
        <ul>
             {{ $slot }}
        </ul>
    </div>
</div>
<script>
  window.onload= function(){
    jQuery('.action_button').on('click',function(){
        if($(this).parent('.action_wrp').hasClass('active')){
            $(this).parent('.action_wrp').removeClass('active');
        }else{
            $('.action_wrp').removeClass('active');
            $(this).parent('.action_wrp').addClass('active');

        }

        });
  }
 
</script>