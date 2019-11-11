function login(){
	try{
	if(document.getElementById("username").value == "username" && document.getElementById("password").value == "password"){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
	}else{
		var login = false;
	}
	if(login == false){
		document.getElementById("errorMessage").innerHTML = "Invalid Login Information";
	}else{
		document.getElementById("errorMessage").innerHTML = "";
		sessionStorage.setItem("username", username);
		window.location.replace("./home.html");
	}
	}catch(err){
		alert(err);
	}
}

function checkIfLoggedIn(){
	try{
		if(sessionStorage.getItem("username") == "username"){
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
		if(sessionStorage.getItem("username") == "username"){
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
		if(sessionStorage.getItem("username") == "username"){
			sessionStorage.clear();
			window.location.replace("./logout.html");
		}else{
			window.location.replace("./login.html");
		}
	}catch(err){
		alert(err);
	}
}

function cat(cat){
	window.location.replace("category.html?cat=" + cat);
}

function create(){
	window.location.replace("createUser.html");
}

function search(){
	try{
		window.location.replace("results.html?q=" + document.getElementById("searchbar").value);
	}catch(err){
		alert(err);
	}
}

window.onload = function(){
	this.loginout();
}