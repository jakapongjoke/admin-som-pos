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
         list += '<tr key='+key+' group="">';
        list += '<td class="p_info_group">'+InputText("product_info_group","product_info[group][]","")+'</td>';

        list += '<td class="p_info_sale_price">';

        list += '<div class=\"p_info_sale_price_wrp\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number sale_price"  contenteditable="true" >';

        
        list += '</div>';


        list += '<div class="number-currency" >';
        list += 'THB';
        list += '</div>';

        list += '</div>';

        list += '<input type="hidden" class="form-control sale_price_val" name="product_info[price][]">';
        list += '<select class="form-control currency mb-1 unit_price" name="product_info[unit_price][]">';

        list += '<option value="pcs">'+'Pcs'+'</option>';
        list += '<option value="cts">'+'Cts'+'</option>';
        list += '<option value="g">'+'G'+'</option>';
        list += '</select>';

        list += '</div>';

        list += '</td>';

        list += '<td class="p_info_size">'+'<select class="mb-1 product_info_size" id="product_info_size" name="product_info[size][]"></select>'
        
        list += '</td>'
        list += '<td class="p_info_standard_weight">'
        list += '<div class=\"p_standard_weight_wrp\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number standard_weight"  contenteditable="true" >';

        
        list += '</div>';

        
        list += '<div class="number-currency std_weight_label" >';
        list += 'g';
        list += '</div>';

        list += '</div>';
        list += '<select class="form-control currency mb-1 std_unit_price" name="product_info[unit_price][]">';

        list += '<option value="pcs">'+'Pcs'+'</option>';
        list += '<option value="cts">'+'Cts'+'</option>';
        list += '<option value="g">'+'G'+'</option>';
        list += '</select>';
        list += '</td>'
        list += '<td class="action_col">'+actionColomnGroupInfo()+'</td>'
        list += '</tr>';
    }else{
        list += '<tr key='+key+' group="">';
        list += '<td class="p_info_group">'+InputText("product_info_group","product_info[group][]","data")+'</td>';

        list += '<td class="p_info_sale_price">';

        list += '<div class=\"p_info_sale_price_wrp\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number sale_price"  contenteditable="true" >';

        
        list += '</div>';


        list += '<div class="number-currency" >';
        list += 'THB';
        list += '</div>';

        list += '</div>';

        list += '<input type="hidden" class="form-control sale_price_val" name="product_info[price][]">';
        list += '<select class="form-control currency mb-1 unit_price" name="product_info[unit_price][]">';

        list += '<option value="pcs">'+'Pcs'+'</option>';
        list += '<option value="cts">'+'Cts'+'</option>';
        list += '<option value="g">'+'G'+'</option>';
        list += '</select>';

        list += '</div>';

        list += '</td>';

        list += '<td class="p_info_size">'+'<select class="mb-1 product_info_size" id="product_info_size" name="product_info[size][]"></select>'
        
        list += '</td>'
        list += '<td class="p_info_standard_weight">'
        list += '<div class=\"p_standard_weight_wrp\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number standard_weight"  contenteditable="true" >';

        
        list += '</div>';

        
        list += '<div class="number-currency std_weight_label" >';
        list += 'g';
        list += '</div>';

        list += '</div>';
        list += '<select class="form-control currency mb-1 std_unit_price" name="product_info[unit_price][]">';

        list += '<option value="pcs">'+'Pcs'+'</option>';
        list += '<option value="cts">'+'Cts'+'</option>';
        list += '<option value="g">'+'G'+'</option>';
        list += '</select>';
        list += '</td>'
        list += '<td class="action_col">'+actionColomnGroupInfo()+'</td>'
        list += '</tr>';
    }

    return list;
}

function groupListRow(key){
    let list="";
    list += '<tr key='+key+'>';
        list += '<td>'+InputText("product_info_group","product_info[group][]","")+'</td>';

        list += '<td>';

        list += '<div class=\"product_info_price\">';
        list += '<div class="form-control number-block">';
        list += '<div class="number sale_price"  contenteditable="true" >';

        
        list += '</div>';
        list += '<div class="number-currency" >';
        list += 'THB';
        list += '</div>';

        list += '</div>';

        list += '<input type="hidden" class="form-control sale_price_val" name="product_info[][price]">';
        list += '<select class="form-control currency mb-1 unit_price" name="product_info[][unit_price]">';

        list += '<option value="pcs">'+'Pcs'+'</option>';
        list += '<option value="cts">'+'Cts'+'</option>';
        list += '<option value="g">'+'G'+'</option>';
        list += '</select>';
        list += '</div>';

        list += '</td>';

        list += '<td width="190">'+'<select class="mb-1 product_info_size" id="product_info_size" name="product_info[][size]"></select>'+'</td>'
        list += '<td>'+'<input type="text" class="form-control std_weight_val" name="product_info[][weight_unit]">'+'</td>'
        list += '<td class="action_col">'+actionColomnGroupInfo()+'</td>'
        list += '</tr>';
        return list;
}

async function loadStoneGroup(company_name){
  await SendAjaxGet(company_name,'/master/stone-group')
}

function actionColomnGroupInfo(){
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
