function enableusername(){
	if(document.getElementById("chgun").checked){
        console.log("test");
        document.getElementById("chgusername").disabled=false;
	}
	else{
        document.getElementById("chgusername").disabled=true;	
	}
}

function enablepassword(){
	if(document.getElementById("chgpwd").checked){
        document.getElementById("pwdreset").disabled=false;
	}
	else{
        document.getElementById("pwdreset").disabled=true;	
	}
}

function checkPassword(){
	if(document.getElementById("newpwd").value!=document.getElementById("newrpwd").value){
		alert("Password Mismatch");
		return false;
	}
}