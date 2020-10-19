function checkPassword(){
	if(document.getElementById("password").value!=document.getElementById("confirm").value){
		alert("password mismatch.");
		return false;	
	}
	else{
		alert ("You have successfully Re-new password.");
		return true;
	}
}

function enableButon(){
	if(document.getElementById("agreeterms").checked){
		document.getElementById("submitc1").disabled=false;
	}
	else{
		document.getElementById("submitc1").disabled=true;	
	}
}



