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

function checkIfLoggedIn(){
	try{
		if(document.cookie != null){
			window.location.replace("./cart.html")
		}else{
			window.location.replace("./login.html")
		}
	}catch(err){
		alert(err)
	}
}

function loginout(){
	try{
		if(document.cookie != null){
			document.getElementById("account").innerHTML = "Logout";
		}else{
			document.getElementById("account").innerHTML = "Login";
		}
	}catch(err){
		alert(err);
	}
}

function logout(){
	try{
		if(document.cookie != null){
			document.cookie = null;
			window.location.replace("./logout.html");
		}else{
			window.location.replace("./login.html");
		}
	}catch(err){
		alert(err);
	}
}

window.onload = function(){
	this.loginout();
}