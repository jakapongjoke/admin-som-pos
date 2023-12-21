(async function($) {
    $.fn.masterTable = function(options) {
     
        let modalConfig = {
 
            formMethod:"",
            message: {
                confirm:{
                    heading:"",
                    text:"",
                    imageIcon:options.message.imageIcon.confirmIcon?options.message.imageIcon.confirmIcon:"/images/icons/question.png",
                },
                create:{
                    confirmHeading:"",
                   confirmText : "",
                   doneHeading : "",
                   doneText : "",
               },
               edit:{
                    confirmHeading:"",
                   confirmText : "",
                   doneHeading : "",
               },
               delete:{
                    confirmHeading:"",
                   confirmText : "",
                   doneHeading : "",
               },
               imageIcon:{
                   confirmIcon:"/images/icons/question.png",
                   doneIcon:"/images/icons/checked.png",
               },
                done:{
                    heading:"",
                    text:"",
                    imageIcon:options.message.imageIcon.doneIcon?options.message.imageIcon.doneIcon:"/images/icons/checked.png",
                }
            },


            set setMessageConfirmHeading(value){
                return this.message.confirm.heading = value;
            },
            get getMessageConfirmHeading(){
                return this.message.confirm.heading;
            },
            set setMessageConfirmText(value){
                return this.message.confirm.text = value
            },
            get getMessageConfirmText(){
                return this.message.confirm.text;
            },
            set setMessageConfirmImageIcon(value){
                return this.message.confirm.imageIcon = value
            },
            get getMessageConfirmImageIcon(){
                return this.message.confirm.imageIcon;
            },

            set setMessageDoneHeading(value){
                return this.message.done.heading = value
            },
            get getMessageDoneHeading(){
                return this.message.done.heading;
            },
            set setMessageDoneText(value){
                return this.message.done.text = value
            },
            get getMessageDoneText(){
                return this.message.done.text;
            },
            set setMessageDoneImageIcon(value){
                return this.message.done.imageIcon = value
            },
            get getMessageDoneImageIcon(){
                return this.message.done.imageIcon;
            },




            set setFormMethod(value){
                return this.formMethod = value
            },
            get getFormMethod(){
                return this.formMethod;
            }
        }
        
        let masterItem = {
            listData:[],
            set setListData(data){
                for(let i=0 ; i<data.length;i++){
                    let arrData = {
                        id:data[i]['id'],
                        master_name:data[i]['master_name'],
                        master_code:data[i]['master_code'],
                        master_description:data[i]['master_description'],
                        master_status:data[i]['master_status'],
                        master_info:data[i]['master_info'],
                        updated_at:data[i]['updated_at'],
        
                    }
                    this.listData.push(arrData);
                }
              
            },
            get getListData(){
                return this.listData;
            },
            clearListData(){
                while (this.listData.length > 0) {
                    this.listData.pop()
                }
            }
        
            
        }
        const checkbox = '<input type="checkbox" class="check_all_list"/>';




        function playBootstrapSwitch(dom) {
            dom.find('input[data-bootstrap-switch]').each(function(){
                    
                    jQuery(this).bootstrapSwitch({
              state:true,
              on:"active",
              off:"suspend",
              handleWidth:'200',
              onClass: 'primary active_status_button',
              offClass: 'default active_status_button'
              
              
                    });
                  })
            }
            const masterCodeItemData =  {
                parentId:"",
                stoneGroup:"",
                masterName: "",
                masterCode:"",
                description:"",
                masterType:"",
                masterPrice:"",
                masterImage:"",
                masterFomula:[],
                masterAvailableFor:"",
                masterInfo:"",
                status:"active",
                masterBaseInfomation:[],
                get getParentId(){
                    return this.parentId;
                },
                set setParentId(data){
                    return this.parentId=data;
            
                },
                get getMasterGroup(){
                    return this.masterGroup;
                },
                set setMasterGroup(data){
                    return this.masterGroup=data;
            
                },
                get getMasterFomula(){
                    return this.masterFomula;

                },
                
                set setMasterFomula(data){
                    this.masterFomula = data;

                },

                get getMasterPrice(){
                    return this.masterPrice;
            
                },
                get getMasterName(){
                    return this.masterName;
            
                },
                set setMasterName(data){
                    return this.masterName = data;
            
                },
                get getMasterCode(){
                    return this.masterCode;
            
                },
                set setMasterCode(data){
                    return this.masterCode = data;
            
                },
                get getDescription(){
                    return this.description;
            
                },
                set setDescription(data){
                    return this.description = data;
            
                },
                get getStatus(){
                    return this.status;
            
                },
                set setStatus(data){
                    return this.status = data;
            
                },
                get getMasterType(){
                    return this.masterType;
            
                },
            
                set setMasterType(data){
                    return this.masterType = data;
            
                },


                get getMasterImage(){
                    return this.masterImage;
            
                },
                 
                set setMasterImage(data){
                    return this.masterImage = data;
            
                },


                get getMasterInfo(){
                    return this.masterInfo;
            
                },
                set setMasterInfo(data){
                    return this.masterInfo = data;
            
                },
                checkMasterCode: async (master_code)=>{
                  return true
                },
                setData(data){
                    this.setParentId = data.parent_id
                    this.setMasterImage = data.master_image
                    this.setMasterCode = data.master_code
                    this.setMasterName = data.master_name
                    this.setDescription = data.master_description
                    this.setStatus = data.master_status
                    this.setMasterType = data.master_type
                    this.setMasterInfo = data.master_infomation
                }



            
            }
            const dataField  = {
                heading: options.dataField.heading ? options.dataField.heading : [checkbox,'No.', 'Name', 'Code', 'Description', 'Last Modified Date'],
                colData:options.dataField.colData ? options.dataField.colData :["master_name","master_code","master_description","updated_at"],
                options:options.dataField.options ? options.dataField.options : {
                    activeStatusButton:true,
                    actionButton:true,
                    actionListMenu:{
                    preview:true,
                    edit:true,
                    copy:true,
                    delete:true,
            
                    },
                    idField:"id",
                },
            
                
            }
            const stone_group = {
                data:[],
                set setData(data){
                    for(let i=0 ; i<data.length;i++){
                        let arrData = {
                            id:data[i]['id'],
                            master_name:data[i]['master_name'],
                            master_code:data[i]['master_code'],
                            master_description:data[i]['master_description'],
                            master_status:data[i]['master_status'],       
                        }
                        this.data.push(arrData);
                    }
                   
                },
                get getData(){
                    
                    return this.data;
                }
            }
            const paginate = {
                currentPage:1,
                totalPage:0,
                perPage:options.paginate.perPage ? options.dataField.options.perPage : 10,
                set setCurrentPage(val){
                   return this.currentPage = parseInt(val);
                },
                get getCurrentPage(){
                    return parseInt(this.currentPage);
                },
                set setPerPage(val){
                   return this.perPage = parseInt(val);
                },
                get getPerPage(){
                    return parseInt(this.perPage);
                },
                set setTotalPage(val){
                   return this.totalPage = parseInt(val);
                },
                get getTotalPage(){
                    return parseInt(this.totalPage);
                }
            }
            function playGenderChecker(){
                
                jQuery('.radio_check').on('click',function(e){
  
                    e.stopPropagation();
                    let parent = jQuery(this).parents('.radio_div_wrp');
                    
                    if(parent.hasClass('toggle_self')==true){
                        parent.find('.radio_check').toggleClass('checked');
                        parent.find('.radio_checkbox').attr( 'checked', !parent.find('.radio_checkbox').prop("checked"));
                    }else{
                        parent.find('.radio_div_group').each(function(){
                            jQuery(this).find('.radio_check').removeClass('checked');         
                    
                        });
                        jQuery(this).toggleClass('checked');
                    
                       const statuscheck = jQuery(this).parent('.radio_div_group').find('.radio_checkbox').attr( 'checked', 'checked' );
                        masterCodeItemData.setStatus = statuscheck.val();
                        parent.find('.status_value').val(statuscheck.val());
                    
                    }
                    });
        
            }
            
            
               
        
  
  
  
  

              
            //   first init
            document.addEventListener('DOMContentLoaded',async function() {

                if(options.masterType=="master_account_storage"){
                    const branch_location_list = await fetchdata("/api/general-infomation/listallbranch");
                    const branch_location_list_data = await branch_location_list.data;
                    console.log(branch_location_list)
                    branch_location_list_data.map((v,k)=>{
                        jQuery("#branch_location").append("<option value='"+v['id']+"'>"+v['branch_name']+"</option>")
                    })
                  }
                  jQuery('.modal_form').on('submit',async function(e){
                    
                    e.preventDefault();
                    e.stopPropagation();
                
                    let putMethod = false;
                    let formMethod = modalConfig.getFormMethod;
                    console.log('formMethod is '+modalConfig.getFormMethod );
                    console.log(getRoute(modalConfig.getFormMethod ) );
                     
                    let optionsSend = {};
                    // single image upload before send form data
                    let Frmdata;
                  
    
                if(typeof options.singleImage !== "undefined" && options.singleImage===true){
                    console.log(jQuery('#master_name').val())
                    Frmdata = new FormData(); 
                    let files = jQuery("#image-input")[0].files;
                    Frmdata.append('file',files[0]);
                    if(typeof files[0] !== 'undefined'){
                        Frmdata.append('image_upload',files[0]);
    
                    }
                    if(formMethod=="put"){
                        Frmdata.append('master_id',jQuery('#master_id').val());
                        Frmdata.append('_method',"PUT");
    
                    }
                    Frmdata.append('master_name',jQuery('#master_name').val());
                    Frmdata.append('master_code',jQuery('#master_code').val());
                    Frmdata.append('master_type',jQuery('#master_type').val());
                    Frmdata.append('master_description',jQuery('#master_description').val());
                    Frmdata.append('master_status',jQuery('#master_status').val());
    
               }else{
                if(modalConfig.getFormMethod=="put"){
                    $('.modal_form').append('<input type="hidden" name="_method" value="PUT">');
                    modalConfig.setFormMethod = "post";
                    putMethod = true;
        
                    }
                 Frmdata = $('.modal_form').serialize();
               }
              
    
                    if(options.singleImage===true){
                        
                     
                        
                        optionsSend =      {
              
                            processData: false, // Prevent jQuery from processing the data
                                contentType: false, // Set the content type to false as FormData will set it correctly
                          }
                    }
    
                    
    
    
                    
    
                    modalFormSubmit(options.validateRoute,getRoute(modalConfig.getFormMethod ),modalConfig.getFormMethod ,Frmdata,'form',options.message,putMethod,optionsSend)
                
                    
                  });

                playGenderChecker()


                if(typeof options.singleImage !== "undefined" && options.singleImage===true){
            

                    if(typeof options.singleImageElement !== "undefined"){
                       const closeIcon = "/images/icons/cancel.png"
                       const uploadImageIcon = "/images/icons/image_upload.png"
                       jQuery(options.singleImageElement).on('change',function(){
                           var input = this;
                           let inputElement = $(this);
                           var files = $(this)[0].files;
                                   if (input.files && input.files[0]) {
                                       console.log(input.files[0])
                                       console.log(files)
                                       console.log(files[0])
                                       var reader = new FileReader();
                                  
                                       
                                       reader.onload = function (e) {
                                       // Set the source of the image element to the data URL of the selected file
                                       jQuery('.image-upload-preview img').attr('src', e.target.result);
                                       };
                                       if(typeof options.singleImageParent !== "undefined"){
                                           jQuery(options.singleImageParent).append('<img src="'+closeIcon+'" class="close_single_image">');
                                           
                                       }
                                       jQuery('.close_single_image').on('click',function(){
                                           jQuery('.image-upload-preview img').attr('src', uploadImageIcon);
                                           inputElement.val("");
                                           jQuery('.close_single_image').remove();
                                       })
                                       // Read the selected file as a data URL
                                       reader.readAsDataURL(input.files[0]);
                                   }
                       })
                   }
               }
               


                    jQuery('.radio_check').on('click',function(e){
  
            e.stopPropagation();
            let parent = jQuery(this).parents('.radio_div_wrp');
            
            if(parent.hasClass('toggle_self')==true){
                parent.find('.radio_check').toggleClass('checked');
                parent.find('.radio_checkbox').attr( 'checked', !parent.find('.radio_checkbox').prop("checked"));
            }else{
                parent.find('.radio_div_group').each(function(){
                    jQuery(this).find('.radio_check').removeClass('checked');         
            
                });
                jQuery(this).toggleClass('checked');
            
               const statuscheck = jQuery(this).parent('.radio_div_group').find('.radio_checkbox').attr( 'checked', 'checked' );
                masterCodeItemData.setStatus = statuscheck.val();
                parent.find('.status_value').val(statuscheck.val());
            
            }
            });





             // Addional For Stone name page modal 
                if(options.masterType=="master_stone_name"){
                    let stone_group_list = await SendAjaxGet('api/master/master-stone/master-stone-group?page=1&perpage=100');
                    const resp =  stone_group_list.data;
                    stone_group.setData = resp.data;
                    // let data = [...resp.data];
                    // jQuery('#MasterStoneModal .stone_group').empty();
                    // jQuery('#MasterStoneModal .stone_group').empty();
                 
                    clearOption("stone_group",'Stone Group');

                    insertOption("stone_group",stone_group.getData);
                }

            
                // List master data
                let MountedDom = jQuery("#mastertable").html(headerTable(dataField.heading,dataField.options));
                options.paginate.perPage = 100;
                const data = await fetchdata(options.listDataRoute+'?master_type='+options.masterType+'&perPage='+options.paginate.perPage+'&page=1');
                const master_list_resp = await data.data;

                if(master_list_resp.length>=1){
                    const listobj = [...master_list_resp];
                    paginate.setTotalPage = parseInt(Math.ceil(data.total_record/options.paginate.perPage));
                  
                    masterItem.setListData = listobj;
                    
                
                    MountedDom.append(listTableData(  masterItem.getListData,dataField.colData,dataField.options))
                    jQuery("#mastertable").after(footerTable("copyright @2022",1,paginate.getTotalPage));
                
                    playBootstrapSwitch(MountedDom)
                }
              
            
            
            actionListInit(jQuery("#mastertable"))  
            jQuery("#mastertable").find('.master_active_status').on('change.bootstrapSwitch',function(e){
                const master_id = jQuery(this).parents('tr').find('.master_id').val();
            
                switch(e.target.checked){
                    case true :
                    console.log('active');
                    SendAjaxPut(options.changeStatusUrl,{
                        master_id:master_id,
                        master_status:'active'
                    })
                    break;
            
                    case false :
                        console.log('suspend');
                        SendAjaxPut(options.changeStatusUrl,{
                        master_id:master_id,
                        master_status:'inactive'
                    })
                    break;
                }
            
            })



    //### pagination ###//
            jQuery('.nextpage').on('click', async function(e){
                e.stopPropagation();
                e.preventDefault();
                // const data = await fetchdata('/api/master/master-stone/master-stone-name?perPage=10&page=1');
                const currentPage = $(this).parent('.paging-block').find('.currentpage').val();
                paginate.setCurrentPage = currentPage;
                


                // List master data
            
            console.log(paginate.getTotalPage)
            console.log(paginate.getCurrentPage)
                if(paginate.getCurrentPage<paginate.getTotalPage){
                    
                    const nextPageNum = parseInt(paginate.getCurrentPage)+1;
                    $(this).parent('.paging-block').find('.currentpage').val(nextPageNum);
              
                    const data = await fetchdata('/api/master/master-stone/'+options.masterTypeRouteName+'?perPage='+paginate.perPage+'&page='+nextPageNum);

                    const master_list_resp = await data.data;
                    console.log(master_list_resp);
                    const listobj = [...master_list_resp];
                    masterItem.clearListData();
                    masterItem.setListData = listobj;
            
                    jQuery('#mastertable').empty();
                    let MountedDom = jQuery("#mastertable").html(headerTable(dataField.heading,dataField.options));
                MountedDom.append(listTableData(  masterItem.getListData,dataField.colData,dataField.options))
                
                playBootstrapSwitch(MountedDom)
                actionListInit(jQuery("#mastertable"))  
            
                }
            });
            jQuery('.prevpage').on('click', async function(e){
                e.stopPropagation();
                e.preventDefault();
                // const data = await fetchdata('/api/master/master-stone/master-stone-name?perPage=10&page=1');
                const currentPage = $(this).parent('.paging-block').find('.currentpage').val();
                paginate.setCurrentPage = currentPage;
                


                // List master data
            
            
                if(paginate.getCurrentPage>1){
                    
                    const prevPageNum = parseInt(paginate.getCurrentPage)-1;
                    $(this).parent('.paging-block').find('.currentpage').val(prevPageNum);
                
                    // const data = await fetchdata('/api/master/master-stone/master-stone-name?perPage='+paginate.perPage+'&page='+prevPageNum);
  
                    const data = await fetchdata('/api/master/master-stone/'+options.masterTypeRouteName+'?perPage='+paginate.perPage+'&page='+prevPageNum);

                    const master_list_resp = await data.data;
                    console.log(master_list_resp);
                    const listobj = [...master_list_resp];
                    masterItem.clearListData();
                    masterItem.setListData = listobj;
            
                    jQuery('#mastertable').empty();

                    let MountedDom = jQuery("#mastertable").html(headerTable(dataField.heading,dataField.options));
                MountedDom.append(listTableData(  masterItem.getListData,dataField.colData,dataField.options))
                
                playBootstrapSwitch(MountedDom)
                actionListInit(jQuery("#mastertable"))  
            
                }
            });

    //### end of pagination ###//

            // jQuery("#mastertable").find('td.status').each(function(){
            //     let currentPerentElem= $(this);
            //     currentPerentElem.find('.active_status_button').on('click',async function(e){
            //     if(currentPerentElem.find('.master_active_status').attr('checked')){
            //         currentPerentElem.find('.master_active_status').removeAttr("checked");
            //     }else{
            //         currentPerentElem.find('.master_active_status').attr('checked','')
            //     }
            
            
            //     })
            // })
            
            // preview list
            jQuery("#mastertable").on('click','.preview_list_item', async function(e){
            
            e.stopPropagation();
            e.preventDefault();
            let masterAvailableFor = "";
         
   
            
            modalConfig.setMessageConfirmHeading = options.message.edit.confirmHeading;
            modalConfig.setMessageConfirmText = options.message.edit.confirmText;
            modalConfig.setMessageDoneHeading =  options.message.edit.doneHeading;
            modalConfig.setMessageDoneText = options.message.edit.doneText;
            modalConfig.setFormMethod = "view";
            
            
            const master_id = jQuery(this).parents('tr').find('.master_id').val();
            const master_data_resp = await SendAjaxGet(options.viewRoute+"/?master_id="+master_id);
            const master_data = master_data_resp.data;
            console.log(master_data.data);
            masterCodeItemData.setData(master_data.data);
            
            
            mapFillInput(jQuery(options.modalId),{
                "master_id":master_id,
                "parent_id":masterCodeItemData.getParentId,
                "master_code":masterCodeItemData.getMasterCode,
                "master_name":masterCodeItemData.getMasterName,
                "master_description":masterCodeItemData.getDescription,
                "master_status":masterCodeItemData.getStatus,
                "master_type":masterCodeItemData.getMasterType,
            })
            
            jQuery('.status').each(function(){
                if($(this).val()==masterCodeItemData.getStatus){
                    $(this).parent('.radio_check').addClass('checked');
                }else{
                    $(this).parent('.radio_check').removeClass('checked');
            
                }
            })
            
            jQuery('input,select,textarea').each(function(){
                $(this).prop('disabled', true);
            })
            jQuery('.modal-footer button').hide();
            jQuery('.radio_check').prop('disabled',true);
            
            jQuery(options.modalId).modal()
            
            jQuery('.radio_check').on('click',function(e){
                
                e.stopPropagation();
                e.preventDefault();
                return false;
            });
            
            switch(options.masterType){
                case "master_stone_name":
                    insertOption("parent_id",stone_group.getData,"Stone Group");

                break;
                case "master_item_size":
                    if(!master_data.data.master_available_for){
                        masterAvailableFor = "all_item"

                    }else{
                        masterAvailableFor = await JSON.parse(master_data.data.master_available_for);


                    }

                    let avaliableSelectList = jQuery('.select_avaliable_list').clone(true,true);
                    jQuery('.select_avaliable_list').remove();
                  
                    
                    console.log(masterAvailableFor)
                    mapFillInput(jQuery(options.modalId),{
                        "master_id":master_id,
                        "parent_id":masterCodeItemData.getParentId,
                        "master_code":masterCodeItemData.getMasterCode,
                        "master_name":masterCodeItemData.getMasterName,
                        "master_description":masterCodeItemData.getDescription,
                        "master_status":masterCodeItemData.getStatus,
                        "master_type":masterCodeItemData.getMasterType,
    
                    });

                    if(masterAvailableFor=="all_item"){
                        jQuery(options.modalId).find('#all-item-radio').prop("checked", true);
                        jQuery('.select_avaliable_list_block').append('<div class="select_avaliable_list"> '+avaliableSelectList.html()+ '</div>');
                    }else{
                        
                        jQuery(options.modalId).find('#available-radio').prop("checked", true);

                        masterAvailableFor.map((v,k)=>{
                            // console.log(k);
                            // avaliableSelectList.insertAfter('.select_avaliable_list_block');
                          
                            jQuery('.select_avaliable_list_block').append('<div class="select_avaliable_list"> '+avaliableSelectList.html()+ '</div>');
                            if(parseInt(k+1)==masterAvailableFor.length&&k>0){
                                
                                jQuery('.select_avaliable_list').eq(k).find('.delete-row-btn').show();
                            }
                            jQuery('.select_avaliable_list').eq(k).find('.master_available_for').val(v);

                            
                        })
                        jQuery('.action_avaliable').hide();
                    }
                    jQuery('.select_avaliable_list').on('change',function(){
                        jQuery(options.modalId).find('#available-radio').prop("checked", true);
                    })

                break;
            }
            
            })
            // end preview list
            
            // edit list
            jQuery("#mastertable").on('click','.edit_list_item', async function(e){
            
                e.stopPropagation();
                e.preventDefault();
                modalConfig.setMessageConfirmHeading = options.message.edit.confirmHeading;
                modalConfig.setMessageConfirmText = options.message.edit.confirmText;
                modalConfig.setMessageDoneHeading =  options.message.edit.doneHeading;
                modalConfig.setMessageDoneText = options.message.edit.doneText;
                modalConfig.setFormMethod = "put";



                switch(options.masterType){
                    case "master_stone_name" :
                        insertOption("parent_id",data,"Stone Group");

                    break;
              
                }
                // if(options.masterType=="master_stone_name"){
                    
                //     insertOption("branch_location",data,"Branch location");

                // }else

           
                
            
                const master_id = jQuery(this).parents('tr').find('.master_id').val();


                jQuery(options.modalId).find('form').prepend('<input type="hidden" name="master_id" id="master_id" value="'+ master_id+'">');
                jQuery(options.modalId).addClass('modal_edit');

                const master_data_resp = await SendAjaxGet(options.viewRoute+"?master_id="+master_id);
                const master_data = master_data_resp.data;
                
                console.log(master_data)
                masterCodeItemData.setData(master_data.data);

                let masterInfo = "";
                let masterAvailableFor = "";
              

                switch(options.masterType){

                    case "master_account_storage":
                        masterInfo = await JSON.parse(master_data.data.master_infomation);
                      
                        jQuery("#branch_location").val(masterInfo.branch_location);
                    break;

                    case "master_account_customer":
                        masterInfo = await JSON.parse(master_data.data.master_infomation);
                     console.log(master_data.data.master_infomation)
              
                     jQuery('.gender_check').each(function(k,v){
                     
                        if($(this).val()==masterInfo.gender){
                            $(this).parent('.radio_check').addClass('checked');
                        }else{
                            $(this).parent('.radio_check').removeClass('checked');
                
                        }
                    })
                    
                    break;

            
                    case "master_account_vendor":
                        masterInfo = await JSON.parse(master_data.data.master_infomation);
                break;

                    case "master_item_size":
                        console.log(master_data.data.master_available_for,'master_data.data.master_available_for')
                        if(!master_data.data.master_available_for){
                            masterAvailableFor = "all_item"

                        }else{
                            masterAvailableFor = await JSON.parse(master_data.data.master_available_for);


                        }
                        
                    break;
                  
                }


                switch(options.masterType){
                    case "master_account_customer":
                        console.log(masterInfo.ship_address_country)
                        jQuery('.ship_address_country').val(masterInfo.ship_address_country).change();
                        jQuery('.tax_address_country').val(masterInfo.tax_address_country).change();
                        
                        const country_state_city_value = [masterInfo.ship_address_country,masterInfo.ship_address_state,masterInfo.ship_address_city]

                        const country_state_city_elem = [jQuery('.ship_address_country'),jQuery('.ship_address_state'),jQuery('.ship_address_city')]


                        const tax_country_state_city_value = [masterInfo.tax_address_country,masterInfo.tax_address_state,masterInfo.tax_address_city]

                        const tax_country_state_city_elem = [jQuery('.tax_address_country'),jQuery('.tax_address_state'),jQuery('.tax_address_city')]


                        // Run trigger Function from masterCustomer.blade.php
                        $(".ship_address_country").trigger("country_change",[country_state_city_elem,country_state_city_value]);
                        $(".ship_address_state").trigger("state_change",[country_state_city_elem[2],country_state_city_value])


                        $(".tax_address_country").trigger("tax_country_change",[tax_country_state_city_elem,tax_country_state_city_value]);
                        $(".tax_address_state").trigger("tax_state_change",[tax_country_state_city_elem[2],tax_country_state_city_value]);

                        mapFillInput(jQuery(options.modalId),{
                            "master_id":master_id,
                            "citizen_id":masterInfo.citizen_id,
                            "first_name":masterInfo.first_name,
                            "middle_name":masterInfo.middle_name,
                            "last_name":masterInfo.last_name,
                            "gender":masterInfo.gender,
                            "birthdate":masterInfo.birthdate ,
                            "birthmonth":masterInfo.birthmonth ,
                            "birthyear ":masterInfo.birthyear  ,
                            "email ":masterInfo.email  ,
                            "phone_code ":masterInfo.phone_code  ,
                            "phone_number ":masterInfo.phone_number  ,
                            "ship_address ":masterInfo.ship_address  ,
                            // "ship_address_country ":masterInfo.ship_address_country  ,
                            // "ship_address_state ":masterInfo.ship_address_state  ,
                            // "ship_address_city ":masterInfo.ship_address_city  ,
                            "ship_address_poscode ":masterInfo.ship_address_poscode  ,
                             "tax_address":masterInfo.tax_address  ,
                            // "tax_address_country":masterInfo.tax_address_country  ,
                            // "tax_address_state":masterInfo.tax_address_state  ,
                            // "tax_address_city":masterInfo.tax_address_city  ,
                            "tax_address_poscode":masterInfo.tax_address_poscode  ,

        
                        })
                    break;

                    case "master_account_vendor":
                        console.log(masterInfo.ship_address_country)
                        jQuery('.ship_address_country').val(masterInfo.ship_address_country).change();
                        jQuery('.tax_address_country').val(masterInfo.tax_address_country).change();
                        
                        const vendor_country_state_city_value = [masterInfo.ship_address_country,masterInfo.ship_address_state,masterInfo.ship_address_city]

                        const vendor_country_state_city_elem = [jQuery('.ship_address_country'),jQuery('.ship_address_state'),jQuery('.ship_address_city')]


                        const vendor_tax_country_state_city_value = [masterInfo.tax_address_country,masterInfo.tax_address_state,masterInfo.tax_address_city]

                        const vendor_tax_country_state_city_elem = [jQuery('.tax_address_country'),jQuery('.tax_address_state'),jQuery('.tax_address_city')]


                        // Run trigger Function from masterCustomer.blade.php
                        $(".ship_address_country").trigger("country_change",[vendor_country_state_city_elem,vendor_country_state_city_value]);
                        $(".ship_address_state").trigger("state_change",[vendor_country_state_city_elem[2],vendor_country_state_city_value])


                        $(".tax_address_country").trigger("tax_country_change",[vendor_tax_country_state_city_elem,vendor_tax_country_state_city_value]);
                        $(".tax_address_state").trigger("tax_state_change",[vendor_tax_country_state_city_elem[2],vendor_tax_country_state_city_value]);

                        mapFillInput(jQuery(options.modalId),{
                            "master_id":master_id,
                            "company_name":masterInfo.company_name,
                            "company_registration_number":masterInfo.company_registration_number,

                            "email ":masterInfo.email  ,
                            "phone_code ":masterInfo.phone_code  ,
                            "phone_number ":masterInfo.phone_number  ,
                            "ship_address ":masterInfo.ship_address  ,
                            // "ship_address_country ":masterInfo.ship_address_country  ,
                            // "ship_address_state ":masterInfo.ship_address_state  ,
                            // "ship_address_city ":masterInfo.ship_address_city  ,
                            "ship_address_poscode ":masterInfo.ship_address_poscode  ,
                             "tax_address":masterInfo.tax_address  ,
                            // "tax_address_country":masterInfo.tax_address_country  ,
                            // "tax_address_state":masterInfo.tax_address_state  ,
                            // "tax_address_city":masterInfo.tax_address_city  ,
                            "tax_address_poscode":masterInfo.tax_address_poscode  ,

        
                        })
                    break;
                    case "master_item_size" :
                        let avaliableSelectList = jQuery('.select_avaliable_list').clone(true,true);
                        jQuery('.select_avaliable_list').remove();
                        console.log(masterAvailableFor)
                        mapFillInput(jQuery(options.modalId),{
                            "master_id":master_id,
                            "parent_id":masterCodeItemData.getParentId,
                            "master_code":masterCodeItemData.getMasterCode,
                            "master_name":masterCodeItemData.getMasterName,
                            "master_description":masterCodeItemData.getDescription,
                            "master_status":masterCodeItemData.getStatus,
                            "master_type":masterCodeItemData.getMasterType,
        
                        });

                        if(masterAvailableFor=="all_item"){
                            jQuery(options.modalId).find('#all-item-radio').prop("checked", true);
                            jQuery('.select_avaliable_list_block').append('<div class="select_avaliable_list"> '+avaliableSelectList.html()+ '</div>');
                        }else{
                            
                            jQuery(options.modalId).find('#available-radio').prop("checked", true);

                            masterAvailableFor.map((v,k)=>{
                                // console.log(k);
                                // avaliableSelectList.insertAfter('.select_avaliable_list_block');
                              
                                jQuery('.select_avaliable_list_block').append('<div class="select_avaliable_list"> '+avaliableSelectList.html()+ '</div>');
                                if(parseInt(k+1)==masterAvailableFor.length&&k>0){
                                    
                                    jQuery('.select_avaliable_list').eq(k).find('.delete-row-btn').show();
                                }
                                jQuery('.select_avaliable_list').eq(k).find('.master_available_for').val(v);
    
                                
                            })
                        }
                        jQuery('.select_avaliable_list').on('change',function(){
                            jQuery(options.modalId).find('#available-radio').prop("checked", true);
                        })

                        availablePlayer()
                    break;
                    
                    default:
                        mapFillInput(jQuery(options.modalId),{
                            "master_id":master_id,
                            "parent_id":masterCodeItemData.getParentId,
                            "master_code":masterCodeItemData.getMasterCode,
                            "master_name":masterCodeItemData.getMasterName,
                            "master_description":masterCodeItemData.getDescription,
                            "master_status":masterCodeItemData.getStatus,
                            "master_type":masterCodeItemData.getMasterType,
        
                        })
                    break;

               





                }

                switch(options.singleImage){
                    case true :
                    
                        jQuery(options.singleImageParent).find('img').attr('src',window.location.protocol+"//"+window.location.host+"/"+masterCodeItemData.getMasterImage)
                    break;

                }

          
               console.log(masterCodeItemData.getStatus)
            
                    jQuery('.status').each(function(){
                        if($(this).val()==masterCodeItemData.getStatus){
                            $(this).parent('.radio_check').addClass('checked');
                        }else{
                            $(this).parent('.radio_check').removeClass('checked');
            
                        }
                    })
                    
                // jQuery('.status').each(function(){
                //     if($(this).val()==masterCodeItemData.getStatus){
                //         $(this).parent('.radio_check').addClass('checked');
                //     }else{
                //         $(this).parent('.radio_check').removeClass('checked');
            
                //     }
                // })
                
                jQuery('input,select,textarea').each(function(){
                    $(this).prop('disabled', false);
                })
                jQuery('.modal-footer button').show();
                jQuery('.radio_check').prop('disabled',false);
            
            
                    
                    jQuery(options.modalId).modal()

            
                    jQuery('.radio_check').on('click',function(e){
  
            e.stopPropagation();
            let parent = jQuery(this).parents('.radio_div_wrp');
            
            if(parent.hasClass('toggle_self')==true){
                parent.find('.radio_check').toggleClass('checked');
                parent.find('.radio_checkbox').attr( 'checked', !parent.find('.radio_checkbox').prop("checked"));
            }else{
                parent.find('.radio_div_group').each(function(){
                    jQuery(this).find('.radio_check').removeClass('checked');         
            
                });
                jQuery(this).toggleClass('checked');
            
               const statuscheck = jQuery(this).parent('.radio_div_group').find('.radio_checkbox').attr( 'checked', 'checked' );
                masterCodeItemData.setStatus = statuscheck.val();
                parent.find('.status_value').val(statuscheck.val());
            
            }
            });

            
            })
            // end edit list
            
            // delete list
            jQuery("#mastertable").on('click','.delete_list_item',async function(e){
                e.preventDefault();
                e.stopPropagation();
                const master_id = jQuery(this).parents('tr').find('.master_id').val();
                let checkUsing;
                if(options.checkExistUrl!=""){
                          checkUsing = await SendAjaxGet(options.checkExistUrl+'&master_id='+master_id);
                          console.log(checkUsing)

                }
        
if(typeof checkUsing != "undefined"){
    if(checkUsing.data>0){
        modalConfig.setMessageConfirmHeading = "Warning";
    modalConfig.setMessageConfirmText = "This Item is in use can't delete";
    modalConfig.setMessageConfirmImageIcon = "/images/icons/exclamation.png";

    $('.modal-content').html('').html(showModalReject(modalConfig.getMessageConfirmHeading,modalConfig.getMessageConfirmText,modalConfig.getMessageConfirmImageIcon));
    jQuery(options.modalId).modal()

    }else{

    modalConfig.setFormMethod = "delete";

    $('.modal-content').html('').html(modalFormDelete(options.deleteRoute+'?id='+master_id,options.message.delete,options.message.imageIcon));
    jQuery(options.modalId).modal()
    }
}else{
    
    modalConfig.setFormMethod = "delete";

    $('.modal-content').html('').html(modalFormDelete(options.deleteRoute+'?id='+master_id,options.message.delete,options.message.imageIcon));
    jQuery(options.modalId).modal()
}
            
            
             
            });
            
            // end delete list
            

           


            jQuery('.create').on('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                modalConfig.setMessageConfirmHeading = options.message.create.confirmHeading;
                modalConfig.setMessageConfirmText = options.message.create.confirmText;
                modalConfig.setMessageDoneHeading =  options.message.create.doneHeading;
                modalConfig.setMessageDoneText = options.message.create.doneText;
                modalConfig.setFormMethod = "post"

                mapFillInput(jQuery(options.modalId),options.dataField.inputFillAble)
                
                // console.log(modalConfig.getFormMethod)

        if(options.masterType=="master_stone_name"){
                    
         if(!stone_group.getData===false){
                    jQuery('input,select,textarea').each(function(){
                    $(this).prop('disabled', false);
                })
                jQuery('.modal-footer button').show();
                jQuery('.radio_check').prop('disabled',false);
            
                  
                }

        }else if(options.masterType=="master_base_metal"){


        }else if(options.masterType=="master_account_storage"){
           

        }
        jQuery(options.modalId).addClass('modal_add')





        jQuery(options.modalId).modal();

            
  


            });

            jQuery('#stone_group').on('change',function(e){
                jQuery(this).val(e.target.value);
                    })
            });
// end of first init

function getRoute(formMethod){
    switch(formMethod){
        case "post":
            return options.postRoute
        break;
        case "get":
            return options.getRoute
        break;
        case "put":
            return options.updateRoute
        break;
        case "delete":
            return options.deleteRoute
        break;
    }
}



            $(options.modalId).on('shown.bs.modal', function (e) {
                jQuery('.ship_address_country').on('change',function(){

                                    console.log($(this).val(),"country on chage")
                                    if(jQuery(e.currentTarget).hasClass('modal_add')){
                            
                                //,[country_state_city_elem,country_state_city_value] 
                                let country_state_city_value = [$(this).val(),"",""]
                                  
                                const country_state_city_elem = [jQuery('.ship_address_country'),jQuery('.ship_address_state'),jQuery('.ship_address_city')]
                                
                                $(".ship_address_country").trigger("country_change",[country_state_city_elem,country_state_city_value]);
                    

                                    }
                                    
                                    if(jQuery(e.currentTarget).hasClass('modal_edit')){
                                        let master_info = JSON.parse(masterCodeItemData.getMasterInfo)
                                                
                                    let country_state_city_value = [master_info.ship_address_country,master_info.ship_address_state,master_info.ship_address_city]

                                    const country_state_city_elem = [jQuery('.ship_address_country'),jQuery('.ship_address_state'),jQuery('.ship_address_city')]
                                   
                                   if($(this).val()==master_info.ship_address_country){
                                    $(".ship_address_country").trigger("country_change",[country_state_city_elem,country_state_city_value]);
                                    $(".ship_address_state").trigger("state_change",[country_state_city_elem[2],country_state_city_value]);
                                
                                   }else{
                                    jQuery('.ship_address_state').empty();
                                    country_state_city_value = [$(this).val(),"",""];

                                    $(".ship_address_country").trigger("country_change", [country_state_city_elem,country_state_city_value]);

                                   }  
                                
                                   
                                    
                                    
                                    }
                                    
                            
                  });

                  jQuery('.ship_address_state').on('change',function(e){
              
                    const country_state_city_elem = [jQuery('.ship_address_country'),jQuery('.ship_address_state'),jQuery('.ship_address_city')]
                    // console.log(e.target.value,"change state")
                  
                // $(".ship_address_state").trigger("state_change",[{},e.target.value]);
                    if(e.target.value!=""){
                                            getCities(e.target.value,country_state_city_elem[2])

                    }
                });

                
                jQuery('.tax_address_country').on('change',function(){

                                    console.log($(this).val(),"country on chage")
                                    if(jQuery(e.currentTarget).hasClass('modal_add')){
                            
                                //,[country_state_city_elem,country_state_city_value] 

                                let tax_country_state_city_value = [$(this).val(),"",""]
                                  
                                let tax_country_state_city_elem = [jQuery('.tax_address_country'),jQuery('.tax_address_state'),jQuery('.tax_address_city')]

                                $(".tax_address_country").trigger("tax_country_change",[tax_country_state_city_elem,tax_country_state_city_value]);

                          

                                    }
                                    
                                    if(jQuery(e.currentTarget).hasClass('modal_edit')){
                                        let master_info = JSON.parse(masterCodeItemData.getMasterInfo)
                                                
                                    let tax_country_state_city_value = [master_info.tax_address_country,master_info.tax_address_state,master_info.tax_address_city]

                                    let tax_country_state_city_elem = [jQuery('.tax_address_country'),jQuery('.tax_address_state'),jQuery('.tax_address_city')]




                                   
                                   if($(this).val()==master_info.tax_address_country){
                                    $(".tax_address_country").trigger("tax_country_change",[tax_country_state_city_elem,tax_country_state_city_value]);

                                    $(".tax_address_state").trigger("tax_state_change",[tax_country_state_city_elem[2],tax_country_state_city_value]);
                                
                                   }else{
                                    jQuery('.tax_address_state').empty();
                                    tax_country_state_city_value = [$(this).val(),"",""];

                                    $(".tax_address_country").trigger("tax_country_change", [tax_country_state_city_elem,tax_country_state_city_value]);

                                   }
                                   
                                    
                                    
                                    }
                                    
                            
                  });

                  jQuery('.tax_address_state').on('change',function(e){
              
                    // console.log(e.target.value,"change state")
                  
                // $(".ship_address_state").trigger("state_change",[{},e.target.value]);
                const tax_country_state_city_elem = [jQuery('.tax_address_country'),jQuery('.tax_address_state'),jQuery('.tax_address_city')]
                    if(e.target.value!=""){
                                            getCities(e.target.value,tax_country_state_city_elem[2])

                    }
                });
                   
        }); 

        // validate area

        // special char validate
        if(!options.dataField.specialCharFilterField===false){
            if(options.dataField.specialCharFilterField.length>0){
             
                for(let specialCharFieldKey =0 ; specialCharFieldKey<options.dataField.specialCharFilterField.length;specialCharFieldKey++){

                    jQuery('.'+options.dataField.specialCharFilterField[specialCharFieldKey]).on('change',function(e){
            
                        if(SpecialCharValidate($(this).val(),$(this),"change")===false){
                            
                            jQuery('.save').attr('disabled', 'disabled');
                        }else{
                            jQuery('.save').removeAttr('disabled');
                        }
                    });

                }
            }
        }
            

        // number validate
        if(!options.dataField.numberVailidateField===false){
            if(options.dataField.numberVailidateField.length>0){
                for(let numberFieldKey =0 ; numberFieldKey<options.dataField.numberVailidateField.length;numberFieldKey++){
                    console.log(options.dataField.numberVailidateField[numberFieldKey])

                    jQuery('.'+options.dataField.numberVailidateField[numberFieldKey]).on('keypress keydown keyup',function(e){
                        console.log(e)
                        NumberValidate($(this).val(),$(this),options.dataField.numberCountValidate[numberFieldKey]);
                    });

                }
            }

        }



            // email validate
            if(!options.dataField.emailValidateField===false){
            if(options.dataField.emailValidateField.length>0){
                
                for(let EmailFieldKey =0 ; EmailFieldKey<options.dataField.emailValidateField.length;EmailFieldKey++){

                    jQuery('.'+options.dataField.emailValidateField[EmailFieldKey]).on('change',function(e){
                        if(EmailValidate($(this).val(),$(this),options.dataField.emailValidateField[EmailFieldKey])===false){
                            jQuery('.save').attr('disabled', 'disabled');
                        }else{
                            jQuery('.save').removeAttr('disabled');

                        }
                    });

                }
            }
        }


            function availablePlayer(){
                

            // Hide delete button if there is only one row
            if ($('.select_avaliable_list').length === 1) {
                $('.delete-row').hide();
            }

            // Add click event for add button
            $('.add-row').click(function () {
                // Remove event listeners from cloned add buttons
                $('.add-row').off('click');

                // Clone the last row
                var newRow = $('.select_avaliable_list').last().clone();
                // Clear the selected value in the new row
                newRow.find('select').val('');
                newRow.find('.form-check').hide();
                newRow.find('label[for="available-radio"]').hide();
                // Show the add button on the new last row
                newRow.insertAfter('.select_avaliable_list:last-child');
                $('.add-row').before().hide();
                $('.add-row').last().show();
                // Reattach click event listener to add button
                $('.add-row').click(arguments.callee);
                // Show delete button if there is more than one row
                jQuery('.select_avaliable_list').each(function(k){
                    if(k>0){
                        $(this).find('.delete-row').show();
                    }
                });
               
            });

            // Define the deleteRow function
       
            // Add click event for delete button to use the deleteRow function
            $(document).on('click', '.delete-row' ,function(){
                console.log('delete')
                var $row = $(this).parents('.select_avaliable_list');
                // Show form-check on next row if it's the first row that was deleted
                if ($row.index() === 0) {
                    $row.next('.select_avaliable_list').find('.form-check, .form-check-label').show();
                }
               
                // Remove the row
                $row.remove();
                $('.select_avaliable_list').last().find('.add-row').show();
                // Hide delete button if there is only one row
                if ($('.select_avaliable_list').length === 1) {
                    $('.delete-row').hide();
                }
            });

   
            }

         
            $(options.modalId).on('hidden.bs.modal', function () {
               
              window.location.reload();
            });


            return this;
        };
      })(jQuery);

