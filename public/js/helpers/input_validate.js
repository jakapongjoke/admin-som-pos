function NumberValidate(value,inputElement="",lengthValidate=0,textMessage="please input only number",lengthMessage="please input  number not more than"){
    const regex = /^[0-9]+$/;
    if(inputElement.parent('div').find('.input_message_danger').length>0){
        inputElement.parent('div').find('.input_message_danger').remove();
    }
    if(lengthValidate>0){
        
        if(value.length > lengthValidate){
            inputElement.parent('div').find('.input_message_danger').remove();
            inputElement.val(value.slice(0, -1));
            console.log(  inputElement.val());
            inputElement.parent('div').append("<span class='input_message_danger'>"+lengthMessage+" "+lengthValidate+" characters "+"</span>" );

            return false;
        }
     }

    if(regex.test(value)==false){
        if(inputElement!=""){
            inputElement.val(value.slice(0, -1));
            inputElement.parent('div').append("<span class='input_message_danger'>"+textMessage+"</span>" )
          ;
          return false;
         }else{
            return false;
         }
   
    }else{
        return true;
    }

}

function SpecialCharValidate(value,inputElement="",EventType="",textMessage="Cannot use special char like # =  '' \"\"in this input ",){
    
    const regex = /[!$=%^&*()_+{}\[\]\'\":;<>,.?~\\/-]/;
    
    // if(inputElement.parent('div').find('.input_message_danger').length>0){
    //     inputElement.parent('div').find('.input_message_danger').remove();
    // }
    // if(inputElement.parents('.inputs-3-row').length>0){
    //     inputElement.parents('.inputs-3-row').find('.input_message_danger').delay(1000,function(){


    //     })

    // }



    if(regex.test(value)===false){

         // validate pass
         if(inputElement.parents('.inputs-3-row').length>0){

            inputElement.parents('.inputs-3-row').find('.input_message_danger').remove();

        }else{
            inputElement.parent('div').find('.input_message_danger').remove();
        };
        inputElement.removeClass('focus_error');

        
        return true;


    }else{
       
        // validate not  pass

        
        if(inputElement!=""){
            inputElement.addClass('focus_error');
            // specail parent element
            if(inputElement.parents('.inputs-3-row').length>0){
                if(inputElement.parents('.inputs-3-row').find('.input_message_danger').length==0){
                switch(EventType){
                    case "change":
                        inputElement.parents('.inputs-3-row').append("<span class='input_message_danger'>"+textMessage+"</span>" );
    
                    break;
    
                    case "onkey":
                        inputElement.val(value.slice(0, -1)); 
                        inputElement.parents('.inputs-3-row').append("<span class='input_message_danger'>"+textMessage+"</span>" );
    
                    break;
                    default :
                    inputElement.parents('.inputs-3-row').append("<span class='input_message_danger'>"+textMessage+"</span>" );

                    break;
                }
                
                }

            }else{
                switch(EventType){
                    case "change":
                        inputElement.parent('div').append("<span class='input_message_danger'>"+textMessage+"</span>" )
                        ;
                    break;
    
                    case "onkey":
                        inputElement.val(value.slice(0, -1));
                        inputElement.parent('div').append("<span class='input_message_danger'>"+textMessage+"</span>" )
                      ;
                    break
                    default :
                    inputElement.parent('div').append("<span class='input_message_danger'>"+textMessage+"</span>" )
                    ;
                    break;

                }
           

            };
       
      


            
          return false;

         }else{
            return false;
         }
   



    }

}

function EmailValidate(value,inputElement="",lengthValidate=0,textMessage="please input correct email format ",lengthMessage="please input text not more than"){
    if(inputElement.parent('div').find('.input_message_danger').length>0){
        inputElement.parent('div').find('.input_message_danger').remove();
    }
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if(lengthValidate>0){
        
        if(value.length > lengthValidate){
            inputElement.parent('div').find('.input_message_danger').remove();
            inputElement.val(value.slice(0, -1));
            console.log(  inputElement.val());
            inputElement.parent('div').append("<span class='input_message_danger'>"+lengthMessage+" "+lengthValidate+" characters "+"</span>" );

            return false;
        }
     }


    if(regex.test(value)==false){
        if(inputElement!=""){
            inputElement.val(value.slice(0, -1));
            inputElement.parent('div').append("<span class='input_message_danger'>"+textMessage+"</span>" )
          ;
          return false;

         }else{
            return false;
         }
   
    }else{
        return true;
    }
}

// function NumberValidateArray(validateInputClassName){
//     for(let i = 0 ;  i < data.length ; i++){
//         validateInputClassName[i]
//     }
// }