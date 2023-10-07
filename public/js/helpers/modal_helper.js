function showModalConfirm(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalConfirmFooterContent();
    return modalAllContent;
}

function showModalContent(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalCompleteFooterContent();
    return modalAllContent;
}
function showModalComplete(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalCompleteFooterContent();
    return modalAllContent;
}

function showModalReject(headingTxt,modalTxtContent,imgSrc){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalRejectFooterContent();
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
function modalRejectFooterContent() {
    let ConfirmBodytxt = "<div class=\"modal-footer confirm-modal-footer\">";
   
        ConfirmBodytxt += "<button type=\"button\" class=\"btn btn-secondary cancel-confirm-modal \" data-dismiss=\"modal\" onClick=\"ReloadModal()\">Cancel</button>";
  

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
          const validate = await validateData(form.serialize(),validateUrl);
          
      if(validate===true){
          $('.modal-content').width(535).height(373).css({margin:"0px auto"});
          $('.modal-content').html('').html(showModalConfirm(txtConfirm[0],txtConfirm[1],txtConfirm[2]));
      }
      }

      
    


      $('.confirm-modal-confirm').on('click', async function(e){
          const ReqData = await SendAjaxDelete(requestUrl,{});
          if(ReqData.status==200){
              $('.modal-content').html('').html(showModalComplete(txtDone[0],txtDone[1],txtDone[2]));

          }
        });
  });

}

async function modalFormSubmit(validateUrl,requestUrl,method,data,sendDataType){
  
        let form  = $(this);
        let dataSend;

        switch(sendDataType){
          case "object":
            dataSend = {
              ...data
            };
          break;
          case "form":
            dataSend = data;
          break;
        } 
        
       
        if(true){
            const validate = await validateData(dataSend,validateUrl);
            
        if(validate===true){
            $('.modal-content').width(535).height(373).css({margin:"0px auto"});
            $('.modal-content').html('').html(showModalConfirm(modalConfig.getMessageConfirmHeading,modalConfig.getMessageConfirmText,modalConfig.getMessageConfirmImageIcon));
        }
        }
        $('.confirm-modal-confirm').on('click', async function(e){
          let ReqData;
            if(method=="post"){
               ReqData = await SendAjaxPost(requestUrl,dataSend);

            }
            if(method=="put"){


               ReqData = await SendAjaxPut(requestUrl,dataSend);

            }
            if(method=="delete"){
               ReqData = await SendAjaxDelete(requestUrl,dataSend);

            }

            if(ReqData.status==200){
                $('.modal-content').html('').html(showModalComplete(modalConfig.getMessageDoneHeading,modalConfig.getMessageDoneText,modalConfig.getMessageDoneImageIcon));

            }
          });


}

function modalFormDelete(requestUrl){
  
        let form  = $(this);
      
       
            
      
            $('.modal-content').width(535).height(373).css({margin:"0px auto"});
            $('.modal-content').html('').html(showModalConfirm(modalConfig.getMessageConfirmHeading,modalConfig.getMessageConfirmText,modalConfig.getMessageConfirmImageIcon));
        
  
        $('.confirm-modal-confirm').on('click', async function(e){
          ReqData = await SendAjaxDelete(requestUrl);
            if(ReqData.status==200){
                $('.modal-content').html('').html(showModalComplete(modalConfig.getMessageDoneHeading,modalConfig.getMessageDoneText,modalConfig.getMessageDoneImageIcon));

            }
          });


}
 

function swal(ButtonClassName,textConfirm,textConfirmDetail){
    
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })
      
      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {

          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
}


// </form></div>
// <div class="modal-footer">
//   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
//   <button type="submit" class="btn btn-primary save">Save</button>
// </div>

// </div>
