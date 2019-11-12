function displayCart(){
    if(sessionStorage.getItem("cart") == null){
        document.getElementById("cartContent").innerHTML = "<h1>No items in cart</h1><br><br>"
    }else{
        var cartStuff = sessionStorage.getItem("cart");

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("cartContent").innerHTML = this.responseText;
            }
        }
        req.open("GET", "cart.php?q=" + cartStuff, true);
        req.send();
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

window.onload = function(){
    this.loginout();
    this.displayCart();
};