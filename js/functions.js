function changeTextColor(element,color){
    // element.css("color",color+";");
    if(element.is('label') || element.is('p') ){
        element.attr("style","color:" + color);
    }
}

function changeHTML(element,text){
    element.text(text);
}

