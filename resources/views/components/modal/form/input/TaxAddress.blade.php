<div class="block">
         <label for="tax_address" class="block col-form-label">
        
        <span class="text">{{$heading}}</span>
        @if($has_previous==true)
        <div class="">

        </div>
        @endif
        <span style='color:red;'>*</span>
   
    </label>
            <textarea class="form-control" name="tax_address" id="tax_address"></textarea>

         </div>

<select class="form-control tax_address_country" name="tax_address_country" id="tax_address_country">
 <option value="">Country</option>

</select>
<select class="form-control tax_address_state" name="tax_address_state" id="tax_address_state" >
 <option value="">State</option>

</select>
<select class="form-control tax_address_city" name="tax_address_city" id="tax_address_city" >
 <option value="">City</option>

</select>
<div class="block">
<input type="text" class="form-control tax_address_poscode" id="tax_address_poscode" placeholder="Postal Code">
</div>
<script>
 
   
    async function getTaxCities(StateID){
        let states =  await axios.get('/api/cities/'+StateID).then((v)=>{
            console.log(v);
            if(v.status==200){
                jQuery('#tax_address_city option').remove();
                
            let select = document.getElementById("tax_address_city")

            let option = document.createElement("option");
            option.text = 'City';
            option.value = "";
            select.add(option);

            
 v.data.map((v,idx)=>{
            //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
          
            let select = document.getElementById("tax_address_city")

            let option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
          
            select.add(option);
        })
            }
        });
       
    }
    
    async function getTaxStates(countryID){
        let states =  await axios.get('/api/states/'+countryID).then((v)=>{
            if(v.status==200){
                if(jQuery('#tax_address_state option').length>1){
                jQuery('#tax_address_state option').remove();
                
            let select = document.getElementById("tax_address_state")

            let option = document.createElement("option");
            option.text = 'State';
            option.value = "";

            }
 v.data.map((v,idx)=>{

            //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
          
            let select = document.getElementById("tax_address_state")

            var option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
          
            select.add(option);
        })
            }
        });
       
    }
             
   window.addEventListener('DOMContentLoaded', async (event) => {
    jQuery('.tax_address_country').on('change',function(){
        getTaxStates(jQuery(this).val())
          jQuery('#tax_address_city option').remove();
          let select = document.getElementById("tax_address_city")

        let option = document.createElement("option");
            option.text = 'City';
            option.value = "";
            select.add(option);
    });
    jQuery('.tax_address_state').on('change',function(){
        getTaxCities(jQuery(this).val())
    });
        let taxCountries =  await axios.get('/api/countries');
        taxCountries.data.map((v,idx)=>{
            //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
            let select = document.getElementById("tax_address_country")
            let option = document.createElement("option");
            option.text = v.name;
            option.value = v.id;
            select.add(option);
        })
   }); 
 
</script>