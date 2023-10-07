function radioCheck(){
    $('.radio_check').on('click',function(e){
        e.stopPropagation();
        let parent = $(this).parents('.radio_div_wrp');
        if(parent.hasClass('toggle_self')==true){

            parent.find('.radio_check').toggleClass('checked');
            parent.find('.radio_checkbox').attr( 'checked', !parent.find('.radio_checkbox').prop("checked"));
            

        }else{

            parent.find('.radio_div_group').each(function(){
                $(this).find('.radio_check').removeClass('checked');
                

            });
            $(this).toggleClass('checked');

            $(this).parent('.radio_div_group').find('.radio_checkbox').attr( 'checked', 'checked' );

        }

        
       
    });
}

function suggestId(){
    $('.suggest_id_check').on('click',function(e){
        e.stopPropagation();

        $(this).parents('.suggest_id_wrp').find('.suggest_id_block').each(function(){
            $(this).find('.suggest_id_check').removeClass('checked');
        });
        
       
        $(this).toggleClass('checked');
        $(this).parent('.suggest_id_block').find('.suggest_id_checkbox').attr( 'checked', 'checked' );
    });
}
function mapFillInput(parentElm,inputObj){
// console.log(inputObj);

    for(let key in inputObj){
        if (inputObj.hasOwnProperty(key)) {
            let inputClassName = key
            // console.log(inputClassName)

            let currentElement = parentElm.find('.'+inputClassName);
            // console.log(currentElement);
            if(currentElement.length>0){
                if(currentElement.is('select')){
                    // console.log(key);
                    // console.log(inputObj[inputClassName]);
                    currentElement.val(inputObj[inputClassName]).change();
                }
                if(currentElement.is('input')||currentElement.is('textarea')){
                  
                    currentElement.val(inputObj[inputClassName]);

                }
         
            }
        }
    }

    parentElm.find('select').each(function(){

    })

}