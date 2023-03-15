
function validateAndSend(){

    $('.modal_form').on('submit',async function(e){
        
        e.preventDefault();
        let form  = $(this);
        if(true){
            const validate = await validateData(form.serialize(),'api/master-stroage-validate');
        if(validate===true){
            console.log('dddd')
            $('.modal-content').html('').html(showModalConfirm('Create','http://ananta.som-pos.test:8000/images/icons/question.png','Do you want to Create Storage Master ?'));
        }
        }
        $('.confirm-modal-confirm').on('click', function(e){
        console.log('dddxxx');
          });
    });

}


