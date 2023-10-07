
                                <label class="col-sm-2 col-form-label">Stone Code <span style="color:red;">*</span></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control stone_code" name="stone_code" value="" readonly>
                                </div>
                                <div class="col-sm-3 d-flex align-items-center pr-0">
                                    <div class="form-check form-check-inline">
                                        @component('components.modal.form.input.SuggestId',['custom_class'=>"suggest_id toggle_self",'label'=>'Choose Suggest ID','value'=>true,'custom_class_checkbox'=>'suggest_id_check'])
                                        @endcomponent
                                    </div>
                                </div>
