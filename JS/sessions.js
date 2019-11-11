function login(){
	var name = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "0"){
				alert("Invalid Login Credientials");
			}else{
				sessionStorage.setItem("username", name);
				window.location.replace("home.html");
			}
        }
    }
    req.open("GET", "login.php?u=" + name + "&p=" + pass, true);
    req.send();
}

function checkIfLoggedIn(){
	try{
		if(sessionStorage.length == 1){
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
		if(sessionStorage.length == 1){
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
		if(sessionStorage.length == 1){
			sessionStorage.removeItem("username");
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