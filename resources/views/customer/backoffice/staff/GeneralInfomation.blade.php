@extends('layouts.customer.main')
 
@section('head')
@section('title', 'General Information')

    <link rel="stylesheet" href="{{ URL::asset('/css/general-info/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/general-info/responsive.css') }}">
@endsection

@section('content')
<div class="modal fade" id="BranchModal" tabindex="-1" role="dialog" aria-labelledby="BranchModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        
</div>
</div>
</div>
<div id="page-form" class="general_infomation">
    
<h1>
General Infomation
</h1>
        <div class="page-form__wrapper d-none">

            <!-- TABS START -->
            <div class="page-form__tabs-wrapper">
                <div class="page-form__tabs">
                    <div class="page-form__tab active" data-unique-id="16884325735786">
                        <span>Head office</span>
                        <div class="page-form__cross-wrapper" data-unique-id="16884325735786" style="display: none;">
                            <div style="position: relative;">
                                <div class="page-form__cross-icon one"></div>
                                <div class="page-form__cross-icon two"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-form__tab-add">
                    <div class="page-form__add-wrapper tab">
                        <div class="page-form__add-icon one"></div>
                        <div class="page-form__add-icon two"></div>
                    </div>
                </div>
            </div>
            <!-- TABS END -->

            <!-- BUTTONS START -->
            <div class="page-form__buttons-wrapper">
                <button type="button" class="page-form__button">Cancel</button>
                <button type="button" class="page-form__button teal save_branch">Save</button>
            </div>
            <!-- BUTTONS START -->

            <!-- FORM START -->
            <div class="page-form__form-wrapper">
                <form action="" class="page-form__form form-popup head_office" data-unique-id="16884325735786">
                    <div class="left">
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Brand Logo
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>

                        <!-- Logo input field start -->
                        <div class="page-form__input-field">
                            <div class="page-form__logo-placeholder">
                                <img src="#" alt="" class="page-form__img-preview" style="display: none;">
                                <label for="42542767667" class="logo-inp-label">
                                    <div class="page-form__add-wrapper add-logo">
                                        <div class="page-form__add-icon one"></div>
                                        <div class="page-form__add-icon two"></div>
                                    </div>
                                </label>
                            </div>
                            <input id="42542767667" class="brandLogo" type="file" style="display: none;" name="brand_logo">
                        </div>
                        <!-- Logo input field end -->


                        <!-- title start -->
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Branch Information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title start -->

                        <!-- Business type start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Business Type
                            </div>
                            <select class="page-form__input business_type" name="business_type">
                                <option value="retails">Retails</option>
                                <option value="wholesale">Wholesale</option>
                                <option value="shop">Shop</option>
                                <!-- other option here -->
                            </select>
                        </div>
                        <!-- Business type end -->


                        <!-- Company name start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Company name
                            </div>
                            <input type="text" class="page-form__input company_name required_field" name="company_name">
                        </div>
                        <!-- Company name end -->

                        <!-- Branch location start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Branch location
                            </div>
                            <input type="text" class="page-form__input branch_location required_field" name="branch_location">
                        </div>
                        <!-- Branch location end -->


                        <!-- Branch code start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Branch code
                            </div>
                            <input type="text" class="page-form__input branch_code required_field" name="branch_code">
                        </div>
                        <!-- Branch code end -->

                        <!-- Tax ID start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Tax ID
                            </div>
                            <input type="number" class="page-form__input tax_id required_field"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="tax_id">
                        </div>
                        <!-- Tax ID end -->


                        <!-- Address start -->
                        <div class="page-form__input-field required" style="margin-top: 40px;">
                            <div class="page-form__input-label" style="margin-top: -40px;">
                                Address
                            </div>
                            <textarea class="page-form__input address required_field" style="resize: none;height: 75px;"
                                name="address"></textarea>
                        </div>
                        <!-- Address end -->

                        <!-- country start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Country
                            </div>
                            <input type="text" class="page-form__input country required_field" name="country">
                        </div>
                        <!-- country end -->

                        <!-- Province start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Province
                            </div>
                            <input type="text" class="page-form__input province required_field" name="province">
                        </div>
                        <!-- Province end -->

                        <!-- City start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                City
                            </div>
                            <input type="text" class="page-form__input city required_field" name="city">
                        </div>
                        <!-- city end -->

                        <!-- zip code start -->
                        <div class="page-form__input-field required">
                            <div class="page-form__input-label">
                                Zipcode
                            </div>
                            <input type="number" class="page-form__input zipcode required_field"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="zip_code">
                        </div>
                        <!-- zip code end -->
                    </div>

                    <div class="right">
                        <!-- title start -->
                        <div class="page-form__form-title">
                            <span class="page-form__form-title-txt">
                                Contact Information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title end -->

                        <!-- email start start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Email
                            </div>
                            <input type="email" class="page-form__input email" name="email">
                        </div>
                        <!-- email start end -->


                        <!-- phone number start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Phone Number
                            </div>
                            <div class="page-form__phone-input-wrapper">
                                <select class="page-form__input country-code phone_code" style="width: 90px;margin-right: 10px;"
                                    name="country_code">
                                </select>
                                <input type="number" class="page-form__input phone_number" style="flex: 1;"
                                    onkeydown="javascript: return event.keyCode == 69 ? false : true"
                                    name="phone_number">
                            </div>
                        </div>
                        <!-- phone number end -->

                        <!-- fax number start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label">
                                Fax Number
                            </div>
                            <input type="number" class="page-form__input fax_number"
                                onkeydown="javascript: return event.keyCode == 69 ? false : true" name="fax_number">
                        </div>
                        <!-- fax number end -->


                        <!-- title start -->
                        <div class="page-form__form-title" style="margin-top: 25px;">
                            <span class="page-form__form-title-txt">
                                Footer information
                            </span>
                            <div class="page-form__form-title-line"></div>
                        </div>
                        <!-- title end -->

                        <!-- general footer start -->
                        <div class="page-form__input-field">
                            <div class="page-form__input-label" style="margin-top: -20px;">
                                General Footer
                            </div>
                            <textarea name="general_footer" style="resize: none;height: 50px;"
                                class="page-form__input general_footer"></textarea>
                        </div>
                        <!-- general footer end -->

                        <!-- certificate footer start -->
                        <div class="page-form__input-field" style="margin-top: 25px;">
                            <div class="page-form__input-label" style="margin-top: -20px;">
                                Certificate Footer
                            </div>
                            <textarea name="certificate_footer" style="resize: none;height: 50px;"
                                class="page-form__input certificate_footer"></textarea>
                        </div>
                        <!-- certificate footer start -->


                    </div>
                </form>
            </div>
            <!-- FORM END -->

            <div></div>
            <div></div>
        </div>
    </div>
    
@endsection
@section('footer_script')
<script>
        const branchData = {
        headOffice :{
            brand_logo:"",
            company_name:"",
            business_type:"",
            email:"",
            branch_location:"",
            branch_code:"",
            tax_id:"",
            address:"",
            country:"",
            province:"",
            city:"",
            zipcode:"",
            phone_number:"",
            phone_code:"",
            fax_number:"",
            general_footer:"",
            certificate_footer:"",
            
            
        },
        branch:[],
        set setHeadOffice(Obj){
            for(const prop in this.headOffice){
                this.headOffice[prop] = Obj[prop]

            }

        },
        get getHeadOffice(){
            return this.headOffice;
        },
        set setHeadOfficeBrandLogo(file){
            this.headOffice.brand_logo = file;
        },
        get getHeadOfficeBrandLogo(){
            return this.headOffice.brand_logo
        },
        set setBranchData(data){
            this.branch.splice(0,this.branch.length);
            this.branch.push(data)
            return this.branch;
        },
        set updateBranchImage(obj){
           const filterData =  this.branch.filter((branch)=>{
                return branch.id = obj.formId;
            }) ;
            filterData.forEach(function(item){
                item.brand_logo = obj.brandLogo
            });
        },
        get getBranchData(){
            return this.branch;
        }
    }
    const formDom = {
        currentFormDom:"",
        requied:"",
        currentFormId:"",
        prevFormId:"",
        nexFormId:"",
        set setCurrentFormDom(val){
            this.currentFormDom = val
        },
        get getCurrentFormDom(){
            return this.currentFormDom
        },
        set setRequied(val){
            this.requied = val
        },
        get getRequied(){
            return this.requied
        },
        set setCurrentFormId(val){
            this.currentFormId = val
        },
        get getCurrentFormId(){
            return this.currentFormId
        },
         

        set setNextFormId(val){
            this.nextFormId = val
        },
        get getNextFormId(){
            return this.nextFormId
        },

        set setPrevFormId(val){
            this.prevFormId = val
        },
        get getPrevFormId(){
            return this.prevFormId
        }


    }
</script>
<script src="{{ URL::asset('/js/general_info.js') }}"></script>
<script src="{{ URL::asset('/js/helpers/input_helper.js') }}"></script>
<script src="{{ URL::asset('/js/helpers/modal_helper.js') }}"></script>

<script>


    
        document.addEventListener('readystatechange',async function() {
            
            if(document.readyState=='interactive'){
                formDom.setCurrentFormDom = jQuery('#page-form');
                    const head_branch = await SendAjaxGet('/api/general-infomation/getbranch?type=head_office');

            const branch_resp = head_branch.data;
  if(branch_resp.count>0){
                // console.log(branch_resp.data)


                branchData.setHeadOffice = branch_resp.data[0];

            }else{
                console.log('no head branch onfp')
            }
            mapFillInput(jQuery(".head_office"),{
                    "branch_location":branchData.getHeadOffice.branch_location,
                    "branch_code":branchData.getHeadOffice.branch_code,   "company_name":branchData.getHeadOffice.company_name,  "business_type":branchData.getHeadOffice.business_type,
                    "tax_id":branchData.getHeadOffice.tax_id,
                    "address":branchData.getHeadOffice.address,
                    "country":branchData.getHeadOffice.country,
                    "province":branchData.getHeadOffice.province,
                    "city":branchData.getHeadOffice.city,
                    "zipcode":branchData.getHeadOffice.zipcode,
                    "email":branchData.getHeadOffice.email,
                    "fax_number":branchData.getHeadOffice.fax_number,
                    "phone_number":branchData.getHeadOffice.phone_number,
                    "phone_code":branchData.getHeadOffice.phone_code,
                    "general_footer":branchData.getHeadOffice.general_footer,
                    "certificate_footer":branchData.getHeadOffice.certificate_footer,
            
                });
                $('.head_office .page-form__img-preview').attr('src',branchData.getHeadOffice.brand_logo).show();
                updateFormAttrTrigger()
            }
        
            if(document.readyState=="complete"){


                setTimeout(()=>{
                    $('.page-form__wrapper').removeClass('d-none')
                },60)
                formDom.getCurrentFormDom.find('input').on('change',function(e){
                    e.preventDefault();
                    e.stopPropagation();
    console.log(e.target.value)
})

            }
          


        });


jQuery('.save_branch').click(function(){

    const headBranchForm = jQuery('.head_office');
    const BranchModal = jQuery('#BranchModal');
    const ModalContent =  BranchModal.find('.modal-content');
  
    ModalContent.html("");
    ModalContent.prepend(modalHeader('Update Branch'));
    ModalContent.append(modalConfirmBodyContent("Do you want to updating Branch Infomation?","/images/icons/question.png"));
    ModalContent.append(modalConfirmFooterContent())
    BranchModal.modal();
    





    ModalContent.find('.confirm-modal-confirm').on('click',async function(e){
e.preventDefault();
e.stopPropagation();
if(checkRequied()===true){
    
    getBranchFormData()

    const update =  await SendAjaxPost("/api/general-infomation/branch/",{
            _method:"PUT",
            head_branch:{
                id:0 ,
                business_type:headBranchForm.find('.business_type').val(),
                brand_logo:branchData.getHeadOfficeBrandLogo,
                branch_location:headBranchForm.find('.branch_location').val(),
                branch_code:headBranchForm.find('.branch_code').val(),
                tax_id:headBranchForm.find('.tax_id').val(),
                address:headBranchForm.find('.address').val(),
                country:headBranchForm.find('.country').val(),
                province:headBranchForm.find('.province').val(),
                city:headBranchForm.find('.city').val(),
                zipcode:headBranchForm.find('.zipcode').val(),
                email:headBranchForm.find('.email').val(),
                phone_number:headBranchForm.find('.phone_number').val(),
                phone_code:headBranchForm.find('.phone_code').val(),
                fax_number:headBranchForm.find('.fax_number').val(),
                general_footer:headBranchForm.find('.general_footer').val(),
                certificate_footer:headBranchForm.find('.certificate_footer').val()
            },
            branch:[
            
            ]
        },
        {
          
          headers: {
            // 'Accept': 'application/json',
            // 'Content-Type': 'application/x-www-form-urlencoded' 
                'Content-Type': 'multipart/form-data'
       
          },
          processData: false, // Prevent jQuery from processing the data
              contentType: true, // Set the content type to false as FormData will set it correctly
        }
        )
            //     $(this).prop('disabled',true)
            //     if(update.status==200){
            //         ModalContent.html("");
            // ModalContent.prepend(modalHeader('Update Branch'));
            // ModalContent.append(modalConfirmBodyContent("Update Branch Infomation Successful?","/images/icons/checked.png"));
            // ModalContent.append(modalCompleteFooterContent())
            //     }
    
}
      
    });




});


// image upload data set 
$('.head_office').find('.brandLogo').on('change',function(e){

e.preventDefault();
      e.stopPropagation();

const file = e.target.files[0];
const newFile = new File([file], file.name, {
type: file.type,
lastModified: file.lastModified,
});


branchData.setHeadOfficeBrandLogo = newFile;
$(this).parents('form').attr("status","edit");


});

jQuery('.tab').on('click',function(e){
  e.preventDefault();
  e.stopPropagation();
  formDom.setCurrentFormDom = jQuery(this).parents('.page-form__wrapper');
  
     const current_add_form = formDom.getCurrentFormDom.find('.branch[status="add"]');

     if(checkRequied()===true){
        
    if(current_add_form.length==0){
        // add tab if not hav any tab and set current tab id active

            formDom.setCurrentFormId = addTab()
       
       formDom.getCurrentFormDom.find('.branch').eq(0).attr('status','add');
      
       formDom.getCurrentFormDom.find('.branch').eq(0).find('.page-form__img-preview').attr('src',branchData.getHeadOfficeBrandLogo).show()

       



        // formDom.setCurrentFormId = 
        // formDom.getCurrentFormDom.find('.page-form__tab').hasClass('active').attr("data-unique-id");
    

    }else{
   
        

 
            // formDom.setCurrentFormId = jQuery('.branch').hasClass('active').attr('data-unique-id');  
            formDom.setNextFormId = addTab()

       

        formDom.setCurrentFormId = formDom.getNextFormId

            formDom.getCurrentFormDom.find('.branch[data-unique-id="'+formDom.getNextFormId+'"]').attr('status','add')
            
            formDom.setCurrentFormDom = jQuery(this).parents('.page-form__wrapper');
                  
            formDom.getCurrentFormDom.find('.branch[data-unique-id="'+formDom.getNextFormId+'"]').attr('status','add');
      
       formDom.getCurrentFormDom.find('.branch[data-unique-id="'+formDom.getNextFormId+'"]').find('.page-form__img-preview').attr('src',branchData.getHeadOfficeBrandLogo).show()
            updateFormAttrTrigger()
        
        
    }
     }
    

});

function updateFormAttrTrigger(){
    
    formDom.getCurrentFormDom.find('input').on('change',function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    const parentForm = $(this).parents(".page-form__form");
                    switch (parentForm.attr('status')){
                        case "add" :
                            return false;
                        break;
                        case "edit" :
                            return false;
                        break;
                        case "list" :
                            parentForm.attr('status','edit')
                        default :
                        parentForm.attr('status','edit')
                        break;

                    }
        
    
})
}
    

function checkRequied() {
    let status = false;
    formDom.getCurrentFormDom.find('.required_field').each(function(k,v){ 
      
      
            if($(this).val()==""){
                const tabRequiredName = '.page-form__tab[data-unique-id="'+$(this).parents('.branch').attr('data-unique-id')+'"]'
                formDom.getCurrentFormDom.find(tabRequiredName).addClass('focus_error');

                alert("please Input Require field On Branch "+ k+1);
                status = false;
                return false;
            }else{
                status = true;
            }
          
        });
   

        return status;
}
function getBranchFormData(){
    let branch_form_data = []
    jQuery('.branch').each(function(){
        branch_form_data.push({
            form_status:$(this).attr("status"),
            business_type:$(this).find('.business_type').val(),
            brand_logo:branchData.getHeadOfficeBrandLogo,
            branch_location:$(this).find('.branch_location').val(),
            branch_code:$(this).find('.branch_code').val(),
            tax_id:$(this).find('.tax_id').val(),
            address:$(this).find('.address').val(),
            country:$(this).find('.country').val(),
            province:$(this).find('.province').val(),
            city:$(this).find('.city').val(),
            zipcode:$(this).find('.zipcode').val(),
            email:$(this).find('.email').val(),
            phone_number:$(this).find('.phone_number').val(),
            phone_code:$(this).find('.phone_code').val(),
            fax_number:$(this).find('.fax_number').val(),
            general_footer:$(this).find('.general_footer').val(),
            certificate_footer:$(this).find('.certificate_footer').val()
        })
    });
}
function setBranchObjData(form_id){
    return branchData.setBranchData({
            formId:form_id,
            brand_logo:"",
            company_name:"",
            business_type:"",
            email:"",
            branch_location:"",
            branch_code:"",
            tax_id:"",
            address:"",
            country:"",
            province:"",
            city:"",
            zipcode:"",
            phone_number:"",
            phone_code:"",
            fax_number:"",
            general_footer:"",
            certificate_footer:"",     
    })
}
function updateBranchObjData(form_id,obj){
    branchData.getBranchData.filter(function(formId){
        formId == form_id
    });
}
</script>

@endsection

