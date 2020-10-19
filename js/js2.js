function enableButton(){
    if(document.getElementById("agreeterms").checked){
        document.getElementById("submits").disabled=false;
    }
    else{
        document.getElementById("submits").disabled=true;  
    }
}