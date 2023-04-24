
<!-- Modal -->
<div class="modal fade" id="MasterVendorModal" tabindex="-1" role="dialog" aria-labelledby="MasterCustomerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Vendor Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form">
     


        



      <div class="form-group row label-top">
           <div class="col-8">
           @component('components.modal.form.input.InputText',["required"=>true,'ClassName'=>'company_name','LabelText'=>'Company Name','PlaceHolder'=>'Company Name'])
                @endcomponent          
           </div>       
           <div class="col-4">
           @component('components.modal.form.input.InputText',["required"=>true,'ClassName'=>'company_registration_number','LabelText'=>'Company Registration NO.','PlaceHolder'=>'Company Registration NO'])
                @endcomponent                              
           </div>                      
       </div>

      <div class="form-group row label-top">
           <div class="col-5">
           @component('components.modal.form.input.Email',["required"=>true])
                @endcomponent           
           </div>       
           <div class="col-7">
           @component('components.modal.form.input.Phone',[
            "required"=>true,
            "custominline"=>"style=width:230px; height: 32px;"
           
           ])
                @endcomponent                             
           </div>                      
       </div>

       <div class="form-group row label-top">
    


         <div class="block address-block ship-address-block">
            @component('components.modal.form.input.Address',[
                'heading'=>'Ship Address',
                'has_previous'=>false,
                'previous_label'=>'Use Previous Address'
                ])
            @endcomponent
        </div>
         <div class="block   address-block tax-address-block">
            @component('components.modal.form.input.TaxAddress',[
                'heading'=>'Tax Address',
                'has_previous'=>false,
                'previous_label'=>'Use Previous Address',
                'custom_elem_prefix','tax_'
                ])
            @endcomponent
        </div>
      
       </div>

</div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary save">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

