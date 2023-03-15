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

function Image(src){
    var img = document.createElement("img");
    img.setAttribute("src", src);
}

function CreateTagElement(text,elem,classname=""){
    const newDiv = document.createElement(elem);
    const newContent = document.createTextNode(text);

    newDiv.appendChild(newContent);

    return newDiv;
    // return "<"+ elem+" class=\""+classname+"\">"+text+"</"+elem+">";
}


