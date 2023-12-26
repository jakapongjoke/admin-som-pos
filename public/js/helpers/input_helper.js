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
// //console.log(inputObj);

    for(let key in inputObj){
        if (inputObj.hasOwnProperty(key)) {

            let inputClassName = key
            // //console.log(inputClassName)

            let currentElement = parentElm.find('.'+inputClassName);
            // //console.log(currentElement);
            if(currentElement.length>0){
                if(currentElement.is('select')){
                    // //console.log(key);
                    // //console.log(inputObj[inputClassName]);
                    currentElement.val(inputObj[inputClassName]).change();
                }
                if(currentElement.is('input')){
                  
                    currentElement.val(inputObj[inputClassName]);


                }
                if(currentElement.is('textarea')){
                    currentElement.text(inputObj[inputClassName])

                }
         
            }
        }
    }


}

 

async function getStates(countryID,StateSelectElem="",fillMode=false,fillSelectedValue=""){
    //console.log(countryID,'countryID')
    let states =  await axios.get('/api/states/'+countryID).then((v)=>{
        //console.log(v,'getState')
        if(v.status==200){
            let select;
                if(StateSelectElem!==""){


                    //console.log(StateSelectElem.attr('id'),"id")
                     select = document.getElementById(StateSelectElem.attr('id'));
                    StateSelectElem.find("option").remove();
                    
        let option = document.createElement("option");
        option.text = 'State';
        option.value = "";
        select.add(option)   
        
                }
           
        
v.data.data.map((v,idx)=>{

        //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
      
        // let select = document.getElementsByClassName("state");
        
        // var option = document.createElement("option");
        // option.text = v.name;
        // option.value = v.id;
      
        // select.add(option);
       
        jQuery(StateSelectElem).append($('<option>', { 
            value: v.id,
            text : v.name
        }));
        
    })
    if(fillMode===true){
        jQuery(StateSelectElem).val(fillSelectedValue).change()
    }

        }
    });
   
}






async function getCities(StateID,CitySelectElem="",fillMode=false,fillSelectedValue=""){
    let states =  await axios.get('/api/cities/'+StateID).then((v)=>{
        if(v.status==200){
            let select;
            CitySelectElem.find('option').remove();
        if(CitySelectElem!==""){
            //console.log(CitySelectElem.attr('id'))

         select = document.getElementById(CitySelectElem.attr('id'));


        }
        
        // let option = document.createElement("option");
        // option.text = 'City';
        // option.value = "";
        // select.add(option);
        // option.text = 'Not defined';
        // option.value = "";
        // select.add(option);

v.data.data.map((v,idx)=>{
        
        jQuery(CitySelectElem).append($('<option>', { 
            value: v.id,
            text : v.name
        }));
    })


    
if(fillMode===true){
    //console.log(typeof(fillSelectedValue),'typeof(fillSelectedValue)')
    if(fillSelectedValue!=="null"){
        //console.log(CitySelectElem,"CitySelectElem")

            jQuery(CitySelectElem).val(fillSelectedValue).change()

    }else{
        jQuery(CitySelectElem).val("").change()
    }

}

        }
    });
   
}
function text_to_float(val){
   return val.toString().replace(/[^\d.]/g, '');
}
function number_as_price(val){
    // console.log(val,number_as_price)
    let display_value ;
    let formattedValue ;
    let parts ;

    
    display_value = val.toString().replace(/[^\d.]/g, '');

    // Split the value into integer and decimal parts
     parts = display_value.split('.');
     //console.log(parts)
    if(parts.length==2){
       parts[1] = parts[1].slice(0,2);
    }
    // Format the integer part with commas for thousands separators
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    
    // Join the formatted parts back together using a dot as the decimal separator
     formattedValue = parts.join('.');

    return formattedValue;

}

function price_input_player(){
  let price_block =  jQuery('.price_block');
  let currentElement ;
  let price_value_data ;
  let priceValElement ;
  let curent_price_val ;
let formattedValue ;
let parts  ;

    if(price_block.length>0){

        price_block.each(function(){
             currentElement = $(this)
             priceValElement = currentElement.children('.price_value_display');
            //console.log(priceValElement.text())
            
            priceValElement.on('click',function(){
                if(price_block.find('.span_placeholder').length>0){
                    $(this).text('');

                }
                let selection = window.getSelection();
                console.log(selection,'selection')
            });
             priceValElement.on('input',function(e){
                typingPriceInput($(this),e)
             });

             priceValElement.on('focusout',function(e){
                console.log('focusout')
                priceValElement.text(number_as_price(priceValElement.text()))
                currentElement.find('.price_value').val(text_to_float(priceValElement.text()))

             });

            // $(this).css({position:'relative'});

            // $(this).append("<span class")
        });
    }
}

function alertMessageInput(inputWrapper,message){
    
    inputWrapper.append("<span class='input_message_danger'>"+message+"</span>");
}
function removeMessageInput(inputWrapper){
    if( inputWrapper.find('.input_message_danger').length>0){
        inputWrapper.find('.input_message_danger').remove();
    }
}
function typingPriceInput(inputElement,e){                
    if (e.keyCode >= 37 && e.keyCode <= 40) {
        return true;
      }              
    if (e.keyCode === 8) {
        return true;
      }
  
    let curent_price_val = inputElement.text().replace(',','');
    let int_current_price = parseInt(curent_price_val);
    var editableDiv = document.getElementById('price_value_display');

    var cursorPosition = getCursorPosition(editableDiv);

    console.log(e)
    removeMessageInput(inputElement.parents('.price_wrapper'))

 
        const validate_price_input = NumberValidateObj(int_current_price.toString(),10);
//&&e.keyCode !== 8
       if(validate_price_input.result===false&&e.keyCode !== 8){

        alertMessageInput( inputElement.parents('.price_wrapper'),validate_price_input.message)
        
        DisableModalButton(inputElement.parents('.modal').attr('id'));

        return false;


       }else{
  

//          console.log(curent_price_val,'curent_price_val')
// console.log(curent_price_val.replace(',',''));
         const ss = number_as_price(curent_price_val);
         
         console.log(e.originalEvent.data)
        inputElement.attr("pricev",number_as_price(curent_price_val));
        EnableModalButton(inputElement.parents('.modal').attr('id'));

            // inputElement.empty();
            //  inputElement.html(ss);
   
        //  inputElement.parent('.price_block').children('.price_value').val(curent_price_val);

        //  moveCursorToEnd(e)
        console.log(e)
        if(!e.originalEvent.data===false){
            console.log(cursorPosition,"cursorPosition")
const updatedContent =  editableDiv.innerHTML.slice(0, cursorPosition-1) + e.originalEvent.data + editableDiv.innerHTML.slice(cursorPosition);
        editableDiv.innerHTML = updatedContent;
        getCursorPosition(editableDiv)

        }
        
 
         return  true;
    
    }
       

    

}
function moveCursorToEnd(e) {
    let placeholderText = e.target.innerText;
    e.target.innerText = '';
    e.target.innerText = placeholderText;

    if(e.target.innerText && document.createRange)
    {
      let range = document.createRange();
      let selection = window.getSelection();
      range.selectNodeContents(e.target);
      range.setStart(e.target.firstChild,e.target.innerText.length);
      range.setEnd(e.target.firstChild,e.target.innerText.length);
      selection.removeAllRanges();
      selection.addRange(range);
    }
  }

  function getCursorPosition(element) {
    var selection = window.getSelection();
    var range = selection.getRangeAt(0);
    var preSelectionRange = range.cloneRange();
    preSelectionRange.selectNodeContents(element);
    preSelectionRange.setEnd(range.startContainer, range.startOffset);
    var start = preSelectionRange.toString().length;

    return start;
  }
  function setCursorPosition(element,start,end) {
    console.log(element,'element')
    const input = document.getElementById("price_value_display");
    console.log(input,'input')
    input.setSelectionRange(start,end);

  }