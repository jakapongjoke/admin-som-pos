@extends('layouts.customer.main')
 
@section('head')
@section('title', 'Master Storage')
@endsection

@section('content')

    @include('components.tables.master.MasterCustomerTable')
    @include('components.modal.master.MasterCustomerModal')
    
@endsection

@section('footer_script')
<script src="{{URL::asset('js/helpers/list_helper.js')}}"></script>
<script src="{{URL::asset('js/helpers/element_helper.js')}}"></script>

<script src="{{URL::asset('js/helpers/api_helper.js')}}"></script>
<script src="{{URL::asset('js/master-code-table.js')}}"></script>
<script>
            const checkbox = '<input type="checkbox" class="check_all_list"/>';
    let tableOptions = {
            masterType:"master_account_customer",
            masterTypeRouteName:"master-customer",
            modalId:"#MasterCustomerModal",
            listDataRoute:"/api/master/master-customer",
            viewRoute:"/api/master/master-customer/view/",
            getRoute:"api/master/master-customer/list",
            postRoute:"api/master/master-customer",
            updateRoute:"api/master-customer",
            deleteRoute:"api/master-customer",
            validateRoute:"api/master/master-customer-validate",
            changeStatusUrl:"",
            checkExistUrl:"",
            dataField : {
                heading:[checkbox,'No.', 'Name', 'Code', 'Description', 'Last Modified Date'],
                colData:["master_name","master_code","master_description","updated_at"],
                numberVailidateField:[],
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
                    confirmText : "Do you want to create this master storage ?",
                    doneHeading : "Successful",
                    doneText : "Save  Master Successful",
                },
                edit:{
                     confirmHeading:"Edit",
                    confirmText : "Do you want to change master storage ?",
                    doneHeading : "Successful",
                    doneText : "Edit Master Successful",

                },
                delete:{
                     confirmHeading:"Delete",
                    confirmText : "Do you want to delete thismaster storage  ?",
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


  
    window.addEventListener('DOMContentLoaded', async (event) => {
    
    $(".ship_address_country").on("country_change", function(country, state_city_elem, state_city_value) {
        if(typeof(state_city_value)=="undefined"){
        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{
                     getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }

      });   
    $(".ship_address_state").on("state_change", function(country, state_city_elem, state_city_value) {
        if(typeof(state_city_value)=="undefined"){
        // getStates(state_city_value[0],state_city_elem,true,state_city_value[1])
        }else{
            getCities(state_city_value[1],state_city_elem,true,state_city_value[2])
        }

      });
      $(".ship_address_country").trigger("country_change");
      $(".ship_address_state").trigger("state_change");

    // $(".ship_address_state").on("state_change", function(country, elem, fillValue) {
    //     console.log(country)
    //      getStates(country,jQuery(elem),true,fillValue)

    //   });


    jQuery('.ship_address_country').on('change',function(){
    // getStates(jQuery(this).val(),jQuery('.ship_address_state'),true,masterInfo.ship_address_state)
    }); 

      jQuery('#city option').remove();
    let select = document.getElementById("city");
        
    let option = document.createElement("option");
        option.text = 'City';
        option.value = "";
        select.add(option);


//     jQuery('.state').on('change',function(){
//     getCities(jQuery(this).val())
// })

;

    let countries =  await axios.get('/api/countries');
    console.log(countries.data.data)
    countries.data.data.map((v,idx)=>{
        //{id: 220, shortname: 'TO', name: 'Tonga', phonecode: 676}
        let select = jQuery('.ship_address_country')
        var option = document.createElement("option");
        option.text = v.name;
        option.value = v.id;
        
        $(select).append(jQuery('<option>', { 
            value: v.id,
            text : v.name
        }));
    })
 
}); 

</script>


@endsection

