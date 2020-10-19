function enableButton(){
	if(document.getElementById("agreepd").checked){
        document.getElementById("submitpd").disabled=false;
	}
	else{
        document.getElementById("submitpd").disabled=true;	
	}
}

function enableCardDetails(){
	document.getElementById("carddetails").disabled=false;
	document.getElementById("paypalemail").disabled=true;
}

function enablePaypal(){
	document.getElementById("paypalemail").disabled=false;
	document.getElementById("carddetails").disabled=true;
}