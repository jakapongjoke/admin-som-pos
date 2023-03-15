function showModalConfirm(headingTxt,imgSrc,modalTxtContent){
    let modalAllContent = modalHeader(headingTxt)+modalConfirmBodyContent(modalTxtContent,imgSrc)+modalConfirmFooterContent();
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
function ReloadModal(){
    setTimeout(() => {
        document.location.reload();
      }, 500);
}


 




// </form></div>
// <div class="modal-footer">
//   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
//   <button type="submit" class="btn btn-primary save">Save</button>
// </div>

// </div>
