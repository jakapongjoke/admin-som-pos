function headerTable(header=[]){

    let listheader = "";
    if(header.length>0){
        listheader += "<thead>";
        listheader += "<tr>";

        for(let th = 0 ; th<header.length; th++){
            listheader += "<th>";
            listheader += header[th];
            listheader += "</th>";
        }
 
        listheader += "</tr>";

        listheader += "</thead>";

    }
    return listheader;
}
function listTableData(data=[],header=[],field=[]){

    let listdata = "";
    if(typeof($)===undefined){
        $ = jQuery;
    }
  
    if(data.length>0){     
        
        listdata += "<tbody>";
       
        for(let list = 0 ; list<data.length; list++){
          
            const keylist = Object.keys(data[list]);
        listdata += "<tr>";

            for(let colKey = 0 ; colKey<header.length; colKey++){
                listdata += "<td>";
                    listdata += data[list][keylist[colKey]];
                    listdata += "</td>";
                }
            
                
        listdata += "</tr>";
        }
    
        listdata += "</tbody>";
    }
    return listdata;
}

function changeStatus(){

}

function expandList(){
    
}
function copyList(originalListData,urlCreateData){
    
}
