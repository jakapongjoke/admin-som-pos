multipleImageUploader.prototype.files = new Array();
multipleImage.prototype.files = new Array();
multipleImageConfig.prototype.defaultImage = "";

function multipleImageUploader(e){
    e.preventDefault();
    e.stopPropagation();
    if(multipleImageUploader.prototype.files.length<3){
            multipleImageUploader.prototype.files.push(e.target.files[0]);
    }
    

    new multipleImage("img_upload_wrapper","image-upload-preview",multipleImageUploader.prototype.files,multipleImageConfig.prototype.defaultImage) 
    return multipleImageUploader.prototype.files;
  }
function multipleImageConfig(){
    multipleImageConfig.prototype.defaultImageUrl = 'images/icons/image_upload.png';
}


// multipleImage จะถูกรัน เมื่อ modal แสดง
  function multipleImage(containerElem,mainImageContainer,imgListData=[],defaultImageUrl="",modalType="add"){  
    // if(typeof imgListData === "Array"){

    // }
    if(defaultImageUrl!==""){
        multipleImageConfig.prototype.defaultImageUrl = defaultImageUrl;

    }

    // ตรวจสอบรูปภาพที่มีอยู่
          // ถ้ายัง ไม่มีการ อัพโหลดภาพ
        if(imgListData.length==0){
      
            jQuery('.'+containerElem).children('.multi_img_del').remove();
            // Clear List รูปภาพด้านข้าง
            jQuery('.'+containerElem).children('.multiple_images_addional_list').children('li').remove();

         
            // ถ้าไม่มีรูป จะแสดง default image
            if(jQuery('.'+mainImageContainer).children('img').length==0){ 
                jQuery('.'+mainImageContainer).append("<img src=\""+window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl+"\">");

            }else{
            // ถ้ามีการอัพโหลดรูปภาพเข้ามาจะแสดงรูปที่เพิ่งอัพมาตรงกลาง

                // Ex : imgListData.length==1
                // jQuery('.'+mainImageContainer).ar("<img src=\""+window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl+"\">");
                if(jQuery('.'+containerElem).children('.multiple_images_addional_list').find('li').length>0){

                    // Get First of li list src and Change Display Image 
                    const currentimgsrc = jQuery('.'+containerElem).children('.multiple_images_addional_list').find('li').eq(0).children('img').attr('src');
                    jQuery('.'+mainImageContainer).children('img').attr('src',currentimgsrc);

                }else{
                    // If Li List not have image will show default image
                    jQuery('.'+mainImageContainer).children('img').attr('src',window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl);
                }
             
            }
           

        }else{
            jQuery('.'+containerElem).append("<div class=\"multi_img_del\" >x</div>")

            


            if(modalType=="add"){
                jQuery('.'+mainImageContainer).children('img').attr('src', getImageUploadUrl(imgListData[0]));
            }else{

                jQuery('.'+mainImageContainer).append("<img src=\""+ imgListData[0]+"\">");

            }
         

            jQuery('.'+containerElem).children('.multiple_images_addional_list').children('li').remove();

            // Loop ลูปภาพมาแสดงที่ด้านขวา
            console.log(imgListData[0]);
  
            if(modalType=="add"){
                for(let i=0;i<imgListData.length;i++){
                    let listimg = "<li key=\" "+i+"\">" +"<img src=\""+getImageUploadUrl(imgListData[i])+"\">";
                    listimg += "</li>"
                    jQuery('.'+containerElem).children('.multiple_images_addional_list').append(listimg);
    
                }
    
            }else{
                for(let i=0;i<imgListData.length;i++){
                    let listimg = "<li key=\" "+i+"\">" +"<img src=\""+imgListData[i]+"\">";
                    listimg += "</li>"
                    jQuery('.'+containerElem).children('.multiple_images_addional_list').append(listimg);
    
                }
            }
           

            // ถ้่รูปมากกว่า 3 รูป จะปิดการอัพโหลด
            if(imgListData.length>=3){
                jQuery('.'+containerElem).children('input[type="file"]').prop("disabled", true);
            }else{
                jQuery('.'+containerElem).children('input[type="file"]').prop("disabled", false);
            }


                    // ลบภาพ
                    jQuery('.multi_img_del').on('click',function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // deleteimage()
                       const imgkey =  jQuery('.'+mainImageContainer).children('img').attr('key');
                       console.log(imgkey);
                      const currentMimagelist =  deleteimage(imgListData,imgkey);
                      productStoneData.removeImage(imgkey);

                       multipleImage(containerElem,mainImageContainer,currentMimagelist,multipleImageConfig.prototype.defaultImageUrl )

                    })
                
                    // คลิกที่ list ด้านข้างแล้ว รูปตรงกลางจะเปลี่ยน
                    jQuery('.'+containerElem).children('.multiple_images_addional_list').children('li').click(function(e){
                        e.preventDefault();
                        e.stopPropagation();
                        
                        const currentimgsrc = jQuery(this).children('img').attr('src');
                        console.log(currentimgsrc);
                        const key = jQuery(this).attr('key');
                        jQuery('.'+mainImageContainer).children('img').attr('key', key);
                        jQuery('.'+mainImageContainer).children('img').attr('src', currentimgsrc);
                    })


        }
        

        
        
    
  }
  function checkImages(imageSrc=array()){
    if(imageSrc.length()>0){
        return true;

    }else{
        return false;
    }
  }
    
  function checkAddionalImages(){

  }
  function defaultImages(){

  }

  
function getImageUploadUrl (file,imageShowingElement) {
    const curImgUpload =  URL.createObjectURL(file);
    return curImgUpload;
  }
  function deleteimage(imgData , idx){
    imgData.splice(idx,1);
    console.log(imgData);
    return imgData;
  }