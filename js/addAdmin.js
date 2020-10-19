function checkPassword(){
	if(document.getElementById("pwd").value!=document.getElementById("rpwd").value){
		alert("password mismatch");
		return false;
	}
}

function enableButon(){
	if(document.getElementById("agreeterms").checked){
		document.getElementById("submita").disabled=false;
	}
	else{
		document.getElementById("submita").disabled=true;	
	}
}
