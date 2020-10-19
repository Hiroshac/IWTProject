function enableButton(){
	if(document.getElementById("agreesd").checked){
	    document.getElementById("submitc1").disabled=false;
	}
	else{
		document.getElementById("submitc1").disabled=true;	
	}
}
