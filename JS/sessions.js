function login(){
	try{
	if(document.getElementById("username") !== "username" && document.getElementById("password") !== "password"){
		var username = document.getElementById("username");
		var password = document.getElementById("password");
	}else{
		var login = false;
	}
	
	if(login == false){
		document.getElementById("errorMessage").innerHTML = "Invalid Login Information";
	}else{
		document.getElementById("errorMessage").innerHTML = "";
		document.cookie = "username=username";
		window.location.replace("./home.html");
	}
	}catch(err){
		alert(err);
	}
}