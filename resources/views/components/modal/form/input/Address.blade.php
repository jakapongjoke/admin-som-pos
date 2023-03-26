<div class="block">
         <label for="email" class="block col-form-label">
        
        Ship Address
        
        <span style='color:red;'>*</span>
   
    </label>
            <textarea class="form-control" name="ship_address" id="ship_address"></textarea>

         </div>

<select class="form-control country" name="country" id="country">
 <option value="">Country</option>

</select>
<select class="form-control state" name="state" id="state" >
 <option value="">State</option>

</select>
<select class="form-control city" name="city" id="city" >
 <option value="">City</option>

</select>
<div class="block">
<input type="text" class="form-control poscode" id="poscode" placeholder="Postal Code">
</div>
<script>
 
   
    async function getCities(StateID){
        let states =  await axios.get('/api/cities/'+StateID).then((v)=>{
         
            if(v.status==200){
                jQuery('#city option').remove();
                
            let select = document.getElementById("city");
            
            let option = document.createElement("option");
            option.text = 'City';
            option.value = "";
            select.add(option);

            
 v.data.map((v,idx)=>{
            
            let option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
          
            select.add(option);
        })
            }
        });
       
    }
    async function getStates(countryID){
        let states =  await axios.get('/api/states/'+countryID).then((v)=>{
            if(v.status==200){
                if(jQuery('#state option').length>1){
                jQuery('#state option').remove();
                
            let select = document.getElementById("state");
            
            let option = document.createElement("option");
            option.text = 'State';
            option.value = "";

            }
 v.data.map((v,idx)=>{

            //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
          
            let select = document.getElementById("state");
            
            var option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
          
            select.add(option);
        })
            }
        });
       
    }
             
   window.addEventListener('DOMContentLoaded', async (event) => {
    jQuery('.country').on('change',function(){
        getStates(jQuery(this).val())
          jQuery('#city option').remove();
        let select = document.getElementById("city");
            
        let option = document.createElement("option");
            option.text = 'City';
            option.value = "";
            select.add(option);
    });
    jQuery('.state').on('change',function(){
        getCities(jQuery(this).val())
    });
        let countries =  await axios.get('/api/countries');
        countries.data.map((v,idx)=>{
            //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
            let select = document.getElementById("country")
            var option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
            select.add(option);
        })
   }); 
 
</script>