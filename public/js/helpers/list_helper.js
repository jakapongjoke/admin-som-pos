function headerTable(header=[],tableOptions={}){
/*
        options:{
            activeStatusButton:true,
            actionButton:true,
            actionListMenu:{
            preview:true,
            edit:true,
            copy:true,
            delete:true,
        }
*/

    let listheader = "";
    if(header.length>0){
        listheader += "<thead>";
        listheader += "<tr>";
       
        for(let th = 0 ; th<header.length; th++){
            listheader += "<th>";
            listheader += header[th];
            listheader += "</th>";
        }
        if(tableOptions.activeStatusButton===true){
            listheader += "<th>";
            listheader += "Active";
            listheader += "</th>";
        }
        if(tableOptions.actionButton===true){
            listheader += "<th>";
            listheader += "Action";
            listheader += "</th>";
        }
 
        listheader += "</tr>";

        listheader += "</thead>";

    }
    return listheader;
}
function footerTable(message,currentPaging=1,totalPaging=0){
    let listFooter =  "";

    listFooter += "<div class=\"d-flex align-items-center ml-auto paging-block\" style=\"width: 200px;white-space: nowrap; column-gap: 10px;\">";


    listFooter += "<button type=\"button\" class=\"btn btn-outline-secondary prevpage \"><i class=\"fa fa-solid fa-caret-left  \"></i></button>";
    listFooter += "<input type=\"text\" class=\"form-control text-right currentpage\" name=\"paginationTable\"";
    listFooter+= "value=\""+currentPaging+"\" ";
    
    listFooter += "readonly=\"\"><label for=\"paginationTable\">of";
    listFooter +=  totalPaging;
    listFooter +=  "</label>";
    listFooter +=  "<button type=\"button\" class=\"btn btn-outline-secondary nextpage \"><i class=\"fa fa-solid fa-caret-right \"></i></button>";
    listFooter +=  "</div>";
    return listFooter;
}
function listTableData(data=[],keyField=[],tableOptions={}){

    let listdata = "";
    if(typeof($)===undefined){
        $ = jQuery;
    }
  
    if(data.length>0){     
        
        listdata += "<tbody>";
       
        for(let list = 0 ; list<data.length; list++){
          
            const keylist = Object.keys(data[list]);
            const master_status = data[list]['master_status'];
            // console.log(keylist);
        listdata += "<tr>";

        listdata += "<td class=\""+"check_list"+"\">";
        listdata += "<input type='checkbox'/>"

        listdata += "</td>";


        listdata += "<td class=\""+"list_no"+"\">";
        // console.log(tableOptions.idField);
        if(typeof tableOptions.idField !== undefined || tableOptions.idField!=""){
            listdata += "<input type='hidden' class='master_id' value=\""+data[list][tableOptions.idField]+"\"> ";
            
        }
        listdata += parseInt(list+1);

        listdata += "</td>";
            for(let colKey = 0 ; colKey<keyField.length; colKey++){
                listdata += "<td class=\""+keyField[colKey]+"\">";
                
                if(!data[list][keyField[colKey]]){
                    listdata += "";
                }else{

                    if(checkimagefield(keyField[colKey])===true){
                    const masterimgdata = JSON.parse(JSON.stringify(data[list][keyField[colKey]]));
                    listdata += '<img src="'+masterimgdata[0].location+'" class="img_master_list">';
                    }else{
                    if(Array.isArray(data[list][keyField[colKey]])){
                        listdata += data[list][keyField[colKey]][0];
                    }else{
                        listdata += data[list][keyField[colKey]];
                    }
                   
                    }
                   
                }
                    listdata += "</td>";
                }
                if(tableOptions.activeStatusButton===true){

                    listdata += "<td class='status'>";
                    if(master_status=="active"){
                        listdata += '<input type="checkbox" name="master_active_status" class="master_active_status" checked data-bootstrap-switch value="active">';

                    }else{
                        listdata += '<input type="checkbox" name="master_active_status" class="master_active_status"  data-bootstrap-switch value="inactive">';

                    }
                        
                            listdata += "</td>";
                }
            
                if(tableOptions.actionButton===true){
                    listdata += "<td>";
                    listdata += listAction(tableOptions);
                    listdata += "</td>";
                }

                
        listdata += "</tr>";
        }
    
        listdata += "</tbody>";

        // pagination
    


   
          
          
    }
    return listdata;
}
function checkimagefield(fieldname){
    if(fieldname.includes("master_image")){
        return true;
    }
}
function changeStatus(){

}

function expandList(){
    
}
function copyList(originalListData,urlCreateData){
    
}

function listAction(actionOptions={}){
    let actionlist = "";
    actionlist+= '<div class="action_wrp">';
        actionlist+= '<div class="action_button">';
        actionlist+= '<span>...</span>';
        actionlist+= '</div>';

        actionlist+= '<div class="action_list">';

        actionlist+= '<ul>';
        if(actionOptions.actionListMenu.preview===true){
            actionlist+= '<li class="preview_list_item">';
            actionlist+= '<span class="icon"><img src="/images/icons/view_2.png"></span>';
            actionlist+= '<span class="text-link" data-id="">Preview</span>';
            actionlist+= '</li>';         
    
        }
        if(actionOptions.actionListMenu.edit===true){
                
                actionlist+= '<li class="edit_list_item">';
                actionlist+= '<span class="icon"><img src="/images/icons/editing-2.png"></span>';
                actionlist+= '<span class="text-link" data-id="">Edit</span></span>';
              actionlist+= '</li>';
            } 
          if(actionOptions.actionListMenu.delete===true){
                actionlist+= '<li class="delete_list_item">';
                actionlist+= ' <span class="icon"><img src="/images/icons/cancel1.png"></span>';
                actionlist+= ' <span class="text-link">Delete</span>';
                actionlist+= '</li>';
          }
        actionlist+= '</ul>';
    
        actionlist+= '</div>';

    actionlist+= '</div>';


  return actionlist;

}
function actionListInit(domElem){
    if(domElem.find('.action_button').length>0){

        domElem.find('.action_button').each(function(){
            $(this).on('click',function(e){
                e.preventDefault();
                e.stopPropagation();
            if($(this).parent('.action_wrp').hasClass('active')){
                $('.action_wrp').removeClass('active')
                console.log('active');
                $(this).parent('.action_wrp').removeClass('active')
        
              }else{
                $('.action_wrp').removeClass('active')
                $(this).parent('.action_wrp').addClass('active')
        
              }
        })
    })
     
    }
}