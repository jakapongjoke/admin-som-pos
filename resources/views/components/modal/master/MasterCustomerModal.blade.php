
<!-- Modal -->
<div class="modal fade" id="MasterCustomerModal" tabindex="-1" role="dialog" aria-labelledby="MasterCustomerModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Customer Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form">
     


        <div class="form-group row label-top">
@component('components.modal.form.Input3Col',[
    "label_heading"=>"Contact Name",
    "label_heading_required"=>true,
    'input_field_data'=>[
        "input_1"=>[
            "name"=>"master_infomation[first_name]",
            "placeholder"=>"First Name",
            "required"=>"required"
            ],
        "input_2"=>[
            "name"=>"master_infomation[middle_name]",
            "placeholder"=>"Middle Name",
            "required"=>"required"
            ],
        "input_3"=>[
            "name"=>"master_infomation[last_name]",
            "placeholder"=>"Last Name",
            "required"=>"required"
            ]
    ]
    ])
          @endcomponent
          </div>   
  


     <div class="form-group row label-top">
                            <div class="col-6">
                @component('components.modal.form.RadioGender')
                @endcomponent
                            </div>
                            <div class="col-6">
                            <div class="row label-top">
                            <div class="col-12">        
                    <label for="name" class="col-sm-12 col-form-label ">Date of Birth *</label>
                    </div>
                            <div class="col-sm-4">
                        @component('components.util.SelectLoop',[
                    "required"=>true,
                    "startnum"=>0,
                    "num"=>31,
                    "CustomClass"=>"birthdate",
                    "TextOption"=>"Day",
                    "SelectName"=>"master_infomation[birthdate]"
                    ])
                @endcomponent
                        </div>
                        <div class="col-sm-4">
                        @component('components.modal.form.MonthSelectBox',[
                    "required"=>true,
                    "CustomClass"=>"birthmonth",
                    "SelectName"=>"master_infomation[birthmonth]"
                    ])
                @endcomponent
                        </div>



                        <div class="col-sm-4">
                                @component('components.util.SelectLoop',[
                    "required"=>true,
                    "startnum"=>1940,
                    "num"=>2023,
                    "CustomClass"=>"birthyear",
                    "TextOption"=>"Year",
                    "SelectName"=>"master_infomation[birthyear]"

                    ])
                @endcomponent
                        </div>    

                            </div>
                
                    </div>

      
      </div>



      <div class="form-group row label-top">
           <div class="col-4">
           @component('components.modal.form.input.Email',["required"=>true])
                @endcomponent           
           </div>       
           <div class="col-8">
           @component('components.modal.form.input.Phone',[
            "required"=>true,
            "custominline"=>"style=width:230px; height: 32px;"
           
           ])
                @endcomponent                             
           </div>                      
       </div>

       <div class="form-group row label-top ">
    


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

