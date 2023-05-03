function ProductGroupList (ContainerGroupList,groupListData=[]){
    
    if(groupListData.length==0){
     ContainerGroupList.append(  groupList(0,[]));
     
    }else{
        groupList([])

    }
 


}

function groupList(key=0,data={}){
    let list;
    
    if(Object.keys(data).length==0 ){
         list += '<tr key='+key+'>';
        list += '<td>'+InputText("product_info_group","product_info[][group]","")+'</td>';

        list += '<td>';

        list += '<div class=\"product_info_price\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number"  contenteditable="true" >';

        
        list += '</div>';
        list += '<div class="number-currency" >';
        list += 'THB';
        list += '</div>';

        list += '</div>';

        list += '<input type="hidden" class="form-control" name="product_info[][price]">';
        list += '<select class="form-control currency mb-1 unit_price" name="product_info[][unit_price]"></select>';

        list += '</div>';

        list += '</td>';

        list += '<td width="190">'+'<select class="mb-1 product_info_size" id="product_info_size" name="product_info[][size]"></select>'+'</td>'
        list += '<td>'+'<input type="text" class="form-control std_weight_val" name="product_info[][weight_unit]">'+'</td>'
        list += '<td class="action_col">'+actionColomnGroup()+'</td>'
        list += '</tr>';
    }else{
         list += '<tr key='+key+'>';
        list += '<td>'+'<input type="text" class="product_info_group" name="product_info[][group]" value=" '+">"+'</td>'
        list += '<td>'+'<input type="text" class="form-control product_info_price" name="product_info[][price]">'+'</td>'
        list += '<td>'+'<select class="form-control currency mb-1 unit_price" name="product_info[][unit_price]"></select>'+'</td>'
        list += '<td>'+'<select class="mb-1 product_info_size" name="product_info[][size]"></select>'+'</td>'
        list += '<td>'+'<input type="text" class="form-control std_weight_val" name="product_info[][weight_unit]">'+'</td>'
        list += '</tr>';
    }

    return list;
}

async function loadStoneGroup(company_name){
  await SendAjaxGet(company_name,'/master/stone-group')
}

function actionColomnGroup(){
    let actionGroup = "";
    actionGroup += "<div class=\"action_wrp\">";
    
    actionGroup += "<div class=\"action_button\">";
    actionGroup += "<span>...</span>";
    actionGroup += "</div>";

    actionGroup += "<div class=\"action_list\">";
    actionGroup += "<ul>";

    actionGroup += " <li class=\"add_group\">";

    actionGroup += " <span class=\"icon\">";
    actionGroup += "<img src=\""+ window.location.origin +"/images/icons/ic_control_point_24px.png\">";

    actionGroup += " </span>";
    actionGroup += "<span class=\"text-link\">New Group</span>";

    actionGroup += " </li>";

    
    actionGroup += " <li class=\"add_size\">";

    actionGroup += " <span class=\"icon\">";
    actionGroup += "<img src=\""+ window.location.origin +"/images/icons/rows-2.png\">";

    actionGroup += " </span>";
    actionGroup += "<span class=\"text-link\">Add Size</span>";

    actionGroup += " </li>";

    actionGroup += " <li class=\"edit_group_info\">";

    actionGroup += " <span class=\"icon\">";
    actionGroup += "<img src=\""+ window.location.origin +"/images/icons/editing-2.png\">";

    actionGroup += " </span>";
    actionGroup += "<span class=\"text-link\">Edit</span>";

    actionGroup += " </li>";

    actionGroup += " <li class=\"delete_group_info\">";

    actionGroup += " <span class=\"icon\">";
    actionGroup += "<img src=\""+ window.location.origin +"/images/icons/delete.png\">";

    actionGroup += " </span>";
    actionGroup += "<span class=\"text-link\">Delete</span>";

    actionGroup += " </li>";


    actionGroup += "</ul>";
    actionGroup += "</div>";

    actionGroup += "</div>";
return actionGroup;
}
