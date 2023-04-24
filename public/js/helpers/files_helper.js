multipleImageUploader.prototype.files = new Array();
multipleImage.prototype.files = new Array();
multipleImageConfig.prototype.defaultImage = "";

function multipleImageUploader(e){
    console.log('multipleImageUploader')
    e.preventDefault();
    e.stopPropagation();
    if(multipleImageUploader.prototype.files.length<3){
            multipleImageUploader.prototype.files.push(e.target.files);
    }
    

    new multipleImage("img_upload_wrapper","image-upload-preview",multipleImageUploader.prototype.files,multipleImageConfig.prototype.defaultImage)
    return multipleImageUploader.prototype.files;
  }
function multipleImageConfig(){
    multipleImageConfig.prototype.defaultImageUrl = 'images/icons/image_upload.png';
}

  function multipleImage(containerElem,mainImageContainer,imgListData=[],defaultImageUrl=""){
    // if(typeof imgListData === "Array"){

    // }
    if(defaultImageUrl!==""){
        multipleImageConfig.prototype.defaultImageUrl = defaultImageUrl;
    }
        if(imgListData.length==0){
            jQuery('.'+containerElem).children('.multi_img_del').remove();
            jQuery('.'+containerElem).children('.multiple_images_addional_list').children('li').remove();

            // jQuery('.'+mainImageContainer).children('img').attr('src',)
            if(jQuery('.'+mainImageContainer).children('img').length==0){
                jQuery('.'+mainImageContainer).append("<img src=\""+window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl+"\">");

            }else{
                // Ex : imgListData.length==1
                // jQuery('.'+mainImageContainer).ar("<img src=\""+window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl+"\">");
                if(jQuery('.'+containerElem).children('.multiple_images_addional_list').find('li').length>0){
                    // Get First of li list src and Change Display Image 
                    const currentimgsrc = jQuery('.'+containerElem).children('.multiple_images_addional_list').find('li').eq(0).children('img').attr('src');
                    // console.log('currentimgsrc '+currentimgsrc)
                    jQuery('.'+mainImageContainer).children('img').attr('src',currentimgsrc);

                }else{
                    // If Li List not have image will show default image
                    jQuery('.'+mainImageContainer).children('img').attr('src',window.location.origin+'/'+ multipleImageConfig.prototype.defaultImageUrl);
                }
             
            }
           

        }else{
            jQuery('.'+containerElem).append("<div class=\"multi_img_del\" >x</div>")

            jQuery('.'+mainImageContainer).children('img').attr('key', 0);
            jQuery('.'+mainImageContainer).children('img').attr('src', getImageUploadUrl(imgListData[0]));

            jQuery('.'+containerElem).children('.multiple_images_addional_list').children('li').remove();

            for(i=0;i<imgListData.length;i++){
                jQuery('.'+containerElem).children('.multiple_images_addional_list').append("<li key=\" "+i+"\">" +"<img src=\""+getImageUploadUrl(imgListData[i])+"\"></li>");

            }
            
            if(imgListData.length>=3){
                jQuery('.'+containerElem).children('input[type="file"]').prop("disabled", true);
            }else{
                jQuery('.'+containerElem).children('input[type="file"]').prop("disabled", false);
            }
        }
   
            jQuery('.multi_img_del').on('click',function(e){
                e.preventDefault();
                e.stopPropagation();
                
                // deleteimage()
               const imgkey =  jQuery('.'+mainImageContainer).children('img').attr('key');
               console.log(imgkey);
              const currentMimagelist =  deleteimage(imgListData,imgkey);
              console.log(currentMimagelist.length);

               multipleImage(containerElem,mainImageContainer,currentMimagelist,multipleImageConfig.prototype.defaultImageUrl )

            })
        
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
    const curImgUpload =  URL.createObjectURL(file[0]);
    return curImgUpload;
  }
  function deleteimage(imgData , idx){
    imgData.splice(idx,1);
    console.log(imgData);
    return imgData;
  }