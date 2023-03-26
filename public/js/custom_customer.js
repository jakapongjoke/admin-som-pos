window.onload = function(){
    radioCheck();
    $("[name='active-checkbox']").bootstrapSwitch({
        on: 'Active',
        off: 'Inactive',
        onClass: 'on',
	offClass: 'off'
    });
}