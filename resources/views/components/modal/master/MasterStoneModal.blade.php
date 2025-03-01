
<!-- Modal -->
<div class="modal fade" id="MasterStoneModal" tabindex="-1" role="dialog" aria-labelledby="MasterStoneModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CREATE STONE MASTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form" method="post">
          <input type="hidden" class="master_id" name="master_id" value="">
          <input type="hidden" class="master_type" name="master_type" value="master_stone_name">
        <div class="form-group row">
    <label for="branch_location" class="col-sm-3 col-form-label">Stone Group</label>
       <div class="col-sm-9">
      <select class="form-control parent_id" id="parent_id"  name="parent_id" >
          <option value="">Stone Group</option>
      </select>

       </div>
     </div>
        <div class="form-group row">
    <label for="name" class="col-sm-3 col-form-label">Name</label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_name" id="name" name="master_name" placeholder="Name" required>
       </div>
     </div>          
        <div class="form-group row">
    <label for="code" class="col-sm-3 col-form-label">Code</label>
       <div class="col-sm-9">
      <input type="text" class="form-control master_code" name="master_code" id="code" placeholder="code" required>
       </div>
     </div>  
 


        <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Description</label>
       <div class="col-sm-9">
      <textarea class="form-control master_description" id="description" name="desctiption">
      </textarea>
       </div>
     </div>


     <div class="form-group row">
    <label for="description" class="col-sm-3 col-form-label">Status</label>
    <div class="col-sm-9">
      @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

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
<script>
  let modalConfig = {
 
 formMethod:"",
 message: {
     confirm:{
         heading:"",
         text:"",
         imageIcon:"/images/icons/question.png",
     },
     done:{
         heading:"",
         text:"",
         imageIcon:"/images/icons/checked.png",
     }
     
 },


 set setMessageConfirmHeading(value){
     return this.message.confirm.heading = value
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
</script>

