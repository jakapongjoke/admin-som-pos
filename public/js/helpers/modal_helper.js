function showModalConfirm(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalConfirmFooterContent();
    return modalAllContent;
}

function showModalComplete(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalCompleteFooterContent();
    return modalAllContent;
}

function modalHeader(HeaderTxt) {
    let modelHeader = "<div class=\"modal-header\">";
    modelHeader += "<h5 class=\"modal-title confirm-modal-title\" id=\"exampleModalLongTitle\">";
    modelHeader += HeaderTxt;
     modelHeader += "</h5>";



     modelHeader += "</div>";
     return modelHeader;
}

function modalConfirmBodyContent(ConfirmBodytext,ConfirmBodyimg="") {
    let ConfirmBodytxt = "<div class=\"modal-body confirm-modal-body\">";
        ConfirmBodytxt += "<div class=\"row\">";
        ConfirmBodytxt += "<div class=\"image\">";
        ConfirmBodytxt += "<img src=\""+ConfirmBodyimg+"\" class=\"confirm-image\"/>";
        ConfirmBodytxt += "<p>";
        ConfirmBodytxt += ConfirmBodytext;
        ConfirmBodytxt += "</p>";
        ConfirmBodytxt += "</div>";

        ConfirmBodytxt += "</div>";

     ConfirmBodytxt += "</div>";
     return ConfirmBodytxt;
}
function modalConfirmFooterContent() {
    let ConfirmBodytxt = "<div class=\"modal-footer confirm-modal-footer\">";
   
        ConfirmBodytxt += "<button type=\"button\" class=\"btn btn-secondary cancel-confirm-modal \" data-dismiss=\"modal\" onClick=\"ReloadModal()\">Cancel</button>";
        ConfirmBodytxt += "<button type=\"button\" class=\"btn btn-primary confirm-modal-confirm\">Confirm</button>";

        ConfirmBodytxt += "</div>";

     return ConfirmBodytxt;
}
function modalCompleteFooterContent() {
    let ConfirmBodytxt = "<div class=\"modal-footer confirm-modal-footer\">";
   
        ConfirmBodytxt += "<button type=\"button\" class=\"btn btn-secondary cancel-confirm-modal \" data-dismiss=\"modal\" onClick=\"ReloadModal()\">Close</button>";

        ConfirmBodytxt += "</div>";

     return ConfirmBodytxt;
}
function ReloadModal(){
    setTimeout(() => {
        document.location.reload();
      }, 500);
}

function modalFormSubmitTrigger(txtConfirm,txtDone,validateUrl,requestUrl){
    
    $('.modal_form').on('submit',async function(e){
        
        e.preventDefault();
        e.stopPropagation()
        let form  = $(this);
        if(true){
            const validate = await validateData(form.serialize(),'api/master-stroage-validate');
        if(validate===true){
            $('.modal-content').width(535).height(373).css({margin:"0px auto"});
            $('.modal-content').html('').html(showModalConfirm(txtConfirm[0],txtConfirm[1],txtConfirm[2]));
        }
        }
        $('.confirm-modal-confirm').on('click', async function(e){
            const ReqData = await SendAjaxPost(form.serialize(),requestUrl);
            if(ReqData.status==200){
                $('.modal-content').html('').html(showModalComplete(txtDone[0],txtDone[1],txtDone[2]));

            }
          });
    });

}
 




// </form></div>
// <div class="modal-footer">
//   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
//   <button type="submit" class="btn btn-primary save">Save</button>
// </div>

// </div>
