function formulaKeyPlayer(elem){
  console.log('formulaKeyPlayer')
  let regexText = /[a-zA-Zก-ฮ]/gi;
  document.addEventListener("keydown", function(event) {
    // Check if the pressed key is the Enter key
    if (event.key === "Enter" || event.keyCode === 13) {
      // Do something when the Enter key is pressed
      event.preventDefault();
    }




  });

  elem.find('.price_value_display').on('input',function(e){

    if($(this).parents('.formula-row').find('.base_metal').val()==""){
      alert("please select metal before adjust price of base metal");
      $(this).parents('.formula-row').find('.base_metal').focus();
      $(this).text("0");
      return false;
    }


  })

  elem.find('.percent_value_display').on('input',function(e){
   
      
    if (e.keyCode >= 37 && e.keyCode <= 40) {
        return true;
      }              
    if (e.keyCode === 8) {
        return true;
      }

      if($(this).parents('.formula-row').find('.base_metal').val()==""){
        alert("please select metal before adjust % of base metal");
        $(this).parents('.formula-row').find('.base_metal').focus();
        $(this).text("0");
        return false;
      }
    
      if(SpecialCharValidateBool(e.target.outerText)===true||regexText.test(e.target.outerText)===true){
        alert('insert only number ( ex. 10 , 10.00 )')
        const regex = /[`~!@##$%^&*()_|+\-=?;:'",<>\{\}\[\]\\\/]/gi;
    
        const txt = e.target.outerText.replace(regex,'').replace(regexText,'');
        console.log(txt)
        $(this).text(txt);
        return false;
      }else{


        let int_current_price =  $(this).text().replace(/[^\w\s.]/gi, '');

          
          const validate_price_input = NumberValidateObj(e.target.outerText,6,100);

        if(validate_price_input.result===false){

            $('.text-alert-area').text(validate_price_input.message)
            $(this).addClass("focus_error")
            // $(this).text(e.target.outerText.substring(0, e.target.outerText.length - 1));
            DisableModalButton(elem.parents('.modal').attr('id'))
         

        }else{
        
            $(this).removeClass("focus_error")
            EnableModalButton(elem.parents('.modal').attr('id'))
            $(this).parent('.percent_block').find('.percent_value').val(number_as_price(e.target.outerText))
           
            $('.text-alert-area').text("")
            

        }
        
      }

      if(metalPercentCalculate()>100){
        $('.text-alert-area').text("all of % of base metal not more than 100%")
        $(this).addClass("focus_error")
        DisableModalButton(elem.parents('.modal').attr('id'))
      }else{
        $('.text-alert-area').text("")
        $(this).removeClass("focus_error")
        EnableModalButton(elem.parents('.modal').attr('id'))
      }


 });



 elem.find('.percent_value_display').on('focusout',function(e){
            
  $(this).parents('.formula_block').find('.percent_total_number').text(metalPercentCalculate());
  
  if(metalPercentCalculate()>100){
    $('.text-alert-area').text("all of % of base metal not more than 100%")
    $(".percent_value_display").addClass("focus_error")
    DisableModalButton(elem.parents('.modal').attr('id'))
  }else{
    $('.text-alert-area').text("")
    $(".percent_value_display").removeClass("focus_error")
    EnableModalButton(elem.parents('.modal').attr('id'))
  }

});

}

function playDeleteButton(){

  jQuery(".formula-row").each(function(){
    $(this).find('.delete-row').on('click',function(){
      $(this).parents('.formula-row').remove();
      
  $(this).parents('.formula_block').find('.percent_total_number').text(metalPercentCalculate());
    })
  });


}
  function showDeleteButton(rowElem){
      if(rowElem.length>1){
        console.log('show')
        rowElem.not(":first").find('.delete-row').show();
        playDeleteButton()

      }
  }
  function formulaInputPlayer(){

   if(jQuery(".formula-row").length>0){
   
        let formula_row = jQuery(".formula-row");
        let action_formula =  formula_row.find('.action_formula')
     
        formulaKeyPlayer(jQuery(".formula-row"))

        formula_row.find('.percent_value_display').on('click',function(e){
          if($(this).parents('.formula-row').find('.base_metal').val()==""){
            alert("please select metal before adjust % of base metal");
            $(this).val("0");
            $(this).parents('.formula-row').find('.base_metal').focus();
            return false;
          }else{
                 if($(this).find('.span_placeholder').length>0){
                $(this).find('.span_placeholder').remove();

              }
          }
       
              
        })
        formula_row.find('.price_value_display').on('click',function(e){
          if($(this).parents('.formula-row').find('.base_metal').val()==""){
            alert("please select metal before adjust price of base metal");
            $(this).text("0");
            $(this).parents('.formula-row').find('.base_metal').focus();
            return false;
          }
       
              
        })




        showDeleteButton(formula_row)
   

         action_formula.find(".add-row").on('click',function(){
            let clone_list =  $(this).parents('.formula-row').clone(true,true);
            clone_list.insertAfter($(this).parents('.formula-row'))
            clone_list.find('.percent_value_display').text("0");
            clone_list.find('.percent_value').val(0);
            formulaKeyPlayer(jQuery(".formula-row"))
            price_input_player()
            showDeleteButton(jQuery(".formula-row"))
          })
       

      
   }
  }
  function metalPercentCalculate(){
  

    let total = 0;
    if(jQuery('.formula-row').length>0){
    jQuery('.formula-row').each(function(){

      let v;
        if($(this).find('.percent_value').val()==""){

           v =0;

        }else{
         v = parseFloat($(this).find('.percent_value').val());

        }
        total += v;


    })
  }
    return parseFloat(total).toFixed(2);
  }


function autoCalcurateMasterMetalPrice(){
  let total = 0;
  if(jQuery('.formula-row').length>0){
      jQuery('.formula-row').each(function(){
        let v;
          if($(this).find('.percent_value').val()==""){

            v =0;

          }else{
          v = parseFloat($(this).find('.price_value').val())*parseFloat($(this).find('.percent_value').val())/100;

          }
          total += v;
      })

  }
}