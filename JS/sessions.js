function login(){
	var name = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "0"){
				alert("Invalid Login Credientials");
			}else if(this.responseText == "admin"){
				sessionStorage.setItem("username", name);
				sessionStorage.setItem("admin", "yes")
				window.location.replace("home.html");
			}else{
				sessionStorage.setItem("username", name);
				sessionStorage.setItem("admin", "no")
				window.location.replace("home.html");
			}
        }
    }
    req.open("GET", "login.php?u=" + name + "&p=" + pass, true);
    req.send();
}

function adminBox(){
	if(sessionStorage.getItem("admin") == "yes"){
		document.getElementById("adminBox").innerHTML = `<div class="box categories">
		<h2>Admin Functions <span></span></h2>
		<div class="box-content">
		<ul>
		<li><a onclick="toAdmin('newAdmin')">Create New Admin</a></li>
		<li><a onclick="toAdmin('removeAdmin')">Remove Account</a></li>
		<li><a onclick="toAdmin('addItem')">Add Item to Store</a></li>
		<li class="last"><a onclick="toAdmin('removeItem')">Remove Item from Store</a></li>
		</ul>
		</div>
		</div>`;
	}else{
		document.getElementById("adminBox").innerHTML = "";
	}
}

function toAdmin(type){
	window.location.replace("./admin.html?q=" + type);
}

function checkIfLoggedIn(){
	try{
		if(sessionStorage.getItem("username") !== null){
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
		if(sessionStorage.getItem("username") !== null){
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
		if(sessionStorage.getItem("username") !== null){
			sessionStorage.removeItem("username");
			sessionStorage.removeItem("cart");
			sessionStorage.removeItem("admin");
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
	this.adminBox();
}