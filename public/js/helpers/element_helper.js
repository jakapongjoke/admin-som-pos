
function Heading1(text,tagsize,classname=""){

    const Heading = document.createElement(tagsize);
    const Content = document.createTextNode(text);

    Heading.appendChild(Content);

    return Heading;

    // return "<"+ tagsize+" class=\""+classname+"\">"+text+"</"+tagsize+">";
}
function h1(text){

    const Heading = document.createElement('h1');
    const Content = document.createTextNode(text);

    Heading.appendChild(Content);

    return Heading;

    // return "<"+ tagsize+" class=\""+classname+"\">"+text+"</"+tagsize+">";
}
function h2(text){

    const Heading = document.createElement('h2');
    const Content = document.createTextNode(text);

    Heading.appendChild(Content);

    return Heading;

    // return "<"+ tagsize+" class=\""+classname+"\">"+text+"</"+tagsize+">";
}
function p(text){

    const Heading = document.createElement('h2');
    const Content = document.createTextNode(text);

    Heading.appendChild(Content);

    return Heading;

    // return "<"+ tagsize+" class=\""+classname+"\">"+text+"</"+tagsize+">";
}
function div(text,className="content"){

    const elm = document.createElement('div');
    elm.setAttribute('class',className);
    const Content = document.createTextNode(text);
    
    elm.appendChild(Content);

    return elm;

    // return "<"+ tagsize+" class=\""+classname+"\">"+text+"</"+tagsize+">";
}

function Image(src,className="img",containerClassName=""){

    if(containerClassName!=""){
        
        const elmBlockImg = document.createElement('div');
        elmBlockImg.setAttribute('class',containerClassName);
    
    
        var img = document.createElement("img");
        img.setAttribute("src", src);
        img.setAttribute("class", className);
    
        elmBlockImg.appendChild(img);
        return elmBlockImg;


    }else{

        var img = document.createElement("img");
        img.setAttribute("src", src);
        img.setAttribute("class", className);

        return img;
    }




}



function CreateTagElement(text,elem,classname=""){
    const newDiv = document.createElement(elem);
    const newContent = document.createTextNode(text);

    newDiv.appendChild(newContent);

    return newDiv;
    // return "<"+ elem+" class=\""+classname+"\">"+text+"</"+elem+">";
}

function insertOption(selectElm,optionData,defaultEmptyOption="",defaultSelect="",queryType="id"){
    // jQuery('#'+selectElm).remove();

    // jQuery('#'+selectElm).children('option')

    switch(queryType){
        case "id":
            if(jQuery('#'+selectElm).find("option").length>0){
                jQuery('#'+selectElm).empty();
                }
                clearOption(selectElm,defaultEmptyOption);
                for(i = 0 ; i<optionData.length ; i++){
                    jQuery('#'+selectElm).append( '<option value="'+optionData[i].id+'">'+optionData[i].master_name+'</option>' );
                }
                if(defaultSelect!=""){
                    jQuery('#'+selectElm).val(defaultSelect)
                }
        break;
        case "class":

        if(jQuery('.'+selectElm).find("option").length>0){
            jQuery('.'+selectElm).empty();
            }
            clearOption(selectElm,defaultEmptyOption);
            for(i = 0 ; i<optionData.length ; i++){
                jQuery('.'+selectElm).append( '<option value="'+optionData[i].id+'">'+optionData[i].master_name+'</option>' );
            }
            if(defaultSelect!=""){
                jQuery('.'+selectElm).val(defaultSelect)
            }
        break;
        case "currentdom":

        if(selectElm.find("option").length>0){
            selectElm.empty();
            }
            clearOption(selectElm,defaultEmptyOption,queryType);
            for(i = 0 ; i<optionData.length ; i++){
                selectElm.append( '<option value="'+optionData[i].id+'">'+optionData[i].master_name+'</option>' );
            }
            if(defaultSelect!=""){
                selectElm.val(defaultSelect)
            }

        break;
        
    }

  



    // for (const key in optionData) {

    //     jQuery('#'+selectElm).append( '<option value="'+optionData['id']+'">'+optionData['master_name']+'</option>' );
    // }

}

function clearOption(selectElm,defultValue,queryType="id"){
   switch(queryType){
    case "id" :
        jQuery('#'+selectElm).children('option').remove();
        jQuery('#'+selectElm).append( '<option value="">'+defultValue+'</option>' );

    break;
    case "currentdom":
        selectElm.children('option').remove();
        selectElm.append( '<option value="">'+defultValue+'</option>' );
    break;

   }


}

function tableColumn(content){
    let td =  document.createElement("td");
    td.appendChild(content);
    return td;
}


function selectList(id,className,selectName,list){
    let selectList = "<select>"
     selectList += "</select>"
    return selectList;
}

function InputText(className="",Inputname="",InputTextVal=""){
    let TheInputText = "<input type=\"text\" ";
    TheInputText += "class=\""+className+"\" ";
    TheInputText += "name=\""+Inputname+"\"";
    TheInputText += " value=\""+InputTextVal+"\"";
    TheInputText += ">"
    return TheInputText;
}