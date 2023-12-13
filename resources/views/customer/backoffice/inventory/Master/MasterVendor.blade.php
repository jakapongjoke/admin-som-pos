@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Vendor Master')
@endsection

@section('content')

    @include('components.tables.master.MasterVendorTable')
    @include('components.modal.master.MasterVendorModal')
    
@endsection


@section('footer_script')
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/element_helper.js')}}"></script>

<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/input_validate.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_account_vendor",
            masterTypeRouteName:"master-vendor",
            modalId:"#MasterVendorModal",
            listDataRoute:"/api/master/master-vendor",
            viewRoute:"/api/master/master-vendor/view/",
            getRoute:"api/master/master-vendor/list",
            postRoute:"api/master/master-vendor",
            updateRoute:"api/master-vendor",
            deleteRoute:"api/master-vendor",
            validateRoute:"api/master/master-vendor-validate",
            changeStatusUrl:"",
            checkExistUrl:"",
            dataField : {
                heading:[checkbox,'No.', 'Name', 'Code', 'Description', 'Last Modified Date'],
                colData:["master_name","master_code","master_description","updated_at"],
                numberVailidateField:["company_registration_number","phone_number","poscode"],
                numberCountValidate:[10,10,6],
                emailValidateField:["email"],
                specialCharFilterField:[],
                textVailidateField:[],
                floatVailidateField:[],
                options:{
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
            
              
            
            
            },
            paginate : {
                perPage:10,
            },

            message:{
           
                create:{
                     confirmHeading:"Create",
                    confirmText : "Do you want to create this master vendor ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master vendor ?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete this master vendor  ?",
                    doneHeading : "Successful",
                    doneText : "Delete  Master Successful",
                },
                imageIcon:{
                    confirmIcon:"/images/icons/question.png",
                    doneIcon:"/images/icons/checked.png",
                    confirmDelete:"/images/icons/question.png",
                    doneDelete:"/images/icons/cancel1.png"
                }
               
            }
    }
    jQuery('#mastertable').masterTable(tableOptions);


  
    window.addEventListener('DOMContentLoaded', async () => {
    

    // Trigger When Country Select Change
    $(".ship_address_country").on("country_change", function(event, country_state_city_elem, country_state_city_value) {
        console.log(event)
        
        if(typeof(country_state_city_value)=="undefined"){
            console.log('sss')
            getStates()

        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{

            getStates(country_state_city_value[0],country_state_city_elem[1],true,country_state_city_value[1])

        }

      });   
    $(".tax_address_country").on("tax_country_change", function(event, country_state_city_elem, country_state_city_value) {
        console.log(event)
        
        if(typeof(country_state_city_value)=="undefined"){
            console.log('sss')
            getStates()

        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{

            getStates(country_state_city_value[0],country_state_city_elem[1],true,country_state_city_value[1])

        }

      });   

// Trigger When State Select Change
    $(".ship_address_state").on("state_change", function(event, state_city_elem, state_city_value) {
        console.log("state_change")
        if(typeof(state_city_value)=="undefined"){
        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{
            console.log('ddd')

            // run getCities form input_helper
            console.log(state_city_value[2],'aasdda')
            getCities(state_city_value[1],state_city_elem,true,state_city_value[2])
        }

      });

    $(".tax_address_state").on("tax_state_change", function(event, state_city_elem, state_city_value) {
        console.log("tax_state_change")
        console.log(event)

        if(typeof(state_city_value)=="undefined"){

        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{
            console.log('ddd')

            // run getCities form input_helper
            getCities(state_city_value[1],state_city_elem,true,state_city_value[2])
        }

      });

    //   $(".ship_address_country").trigger("country_change");
    //   $(".tax_address_country").trigger("tax_country_change");
    //   $(".ship_address_state").trigger("state_change");
    //   $(".tax_address_state").trigger("tax_state_change");


      jQuery('#city option').remove();
    let select = document.getElementById("city");
        
    let option = document.createElement("option");
        option.text = 'City';
        option.value = "";
        select.add(option);


    let countries =  await axios.get('/api/countries');
    console.log(countries.data.data)
    countries.data.data.map((v,idx)=>{
        //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
        let select = [jQuery('.ship_address_country'),jQuery('.tax_address_country')];
        var option = document.createElement("option");
        option.text = v.name;
        option.value = v.id;
        
        $(select[0]).append(jQuery('<option>', { 
            value: v.id,
            text : v.name
        }));
        $(select[1]).append(jQuery('<option>', { 
            value: v.id,
            text : v.name
        }));
    })
 
}); 

</script>

@endsection

