window.onload = function(){
    radioCheck();
    $("[name='active-checkbox']").bootstrapSwitch({
        on: 'Active',
        off: 'Inactive',
        onClass: 'on',
	offClass: 'off'
    });
    if($('.action_wrp').length>0){
        $('.action_button').on('click',function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.action_wrp').find('.action_list').hide();
            if($(this).parent('.action_wrp').find('.action_list').hasClass('show')){
                $(this).parent('.action_wrp').find('.action_list').removeClass('show')
                $(this).parent('.action_wrp').find('.action_list').hide();
            }else{
            $(this).parent('.action_wrp').find('.action_list').show();
            $(this).parent('.action_wrp').find('.action_list').addClass('show');

            }
        })
    }
}