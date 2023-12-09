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

 

async function getStates(countryID,StateSelectElem="",fillMode=false,fillSelectedValue=""){
    console.log(countryID,'countryID')
    let states =  await axios.get('/api/states/'+countryID).then((v)=>{
        console.log(v,'getState')
        if(v.status==200){
            let select;
                if(StateSelectElem!==""){


                    console.log(StateSelectElem.attr('id'),"id")
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
            console.log(CitySelectElem.attr('id'))

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
    console.log(typeof(fillSelectedValue),'typeof(fillSelectedValue)')
    if(fillSelectedValue!=="null"){
        console.log(CitySelectElem,"CitySelectElem")

            jQuery(CitySelectElem).val(fillSelectedValue).change()

    }else{
        jQuery(CitySelectElem).val("").change()
    }

}

        }
    });
   
}
         
