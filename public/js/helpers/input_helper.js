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

 




async function getCities(StateID,StateSelectElem={},fillMode=false,fillSelectedValue=""){
    let states =  await axios.get('/api/cities/'+StateID).then((v)=>{
        if(v.status==200){
         
            jQuery('#city option').remove();
            
        let select = document.getElementById("city");
        
        let option = document.createElement("option");
        option.text = 'City';
        option.value = "";
        select.add(option);

        
v.data.data.map((v,idx)=>{
        
        let option = document.createElement("option");
        option.text = v.name;
        option.value = v.id;
      
        select.add(option);
    })


    
if(fillMode===true){
    jQuery(StateSelectElem[2]).val(fillSelectedValue).change()

}

        }
    });
   
}
async function getStates(countryID,StateSelectElem={},fillMode=false,fillSelectedValue=""){
    let states =  await axios.get('/api/states/'+countryID).then((v)=>{
        if(v.status==200){
            if(jQuery(StateSelectElem[1]).find('option').length>1){
                jQuery(StateSelectElem[1]).empty();
            
        let select = document.getElementById("state");
        
        let option = document.createElement("option");
        option.text = 'State';
        option.value = "State";

        }
v.data.data.map((v,idx)=>{

        //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
      
        // let select = document.getElementsByClassName("state");
        
        // var option = document.createElement("option");
        // option.text = v.name;
        // option.value = v.id;
      
        // select.add(option);
       
        jQuery(StateSelectElem[1]).append($('<option>', { 
            value: v.id,
            text : v.name
        }));
        
    })
    if(fillMode===true){
        jQuery(StateSelectElem[1]).val(fillSelectedValue).change()
    }

        }
    });
   
}
         
