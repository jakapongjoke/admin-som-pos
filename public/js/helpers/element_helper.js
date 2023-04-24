
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
    if(containerClassName==""){
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

function insertOption(selectElm,optionData){
    // jQuery('#'+selectElm).remove();

    jQuery('#'+selectElm).children('option')
    for(i = 0 ; i<optionData.length ; i++){
        jQuery('#'+selectElm).append( '<option value="'+optionData[i].id+'">'+optionData[i].master_name+"__"+optionData[i].parent_id+'</option>' );
    }
    // for (const key in optionData) {

    //     jQuery('#'+selectElm).append( '<option value="'+optionData['id']+'">'+optionData['master_name']+'</option>' );
    // }

}

function clearOption(selectElm,defultValue){
    jQuery('#'+selectElm).children('option').remove();
    jQuery('#'+selectElm).append( '<option value="">'+defultValue+'</option>' );

}

