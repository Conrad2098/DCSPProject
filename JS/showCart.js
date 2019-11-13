function displayCart(){
    if(sessionStorage.getItem("cart") == null || sessionStorage.getItem("cart") == ""){
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

function price(){
    var cartStuff = sessionStorage.getItem("cart");

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("price").innerHTML = "Total Price: $" + this.responseText;
            }
        }
        req.open("GET", "price.php?q=" + cartStuff, true);
        req.send();
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

function purchase(){
    window.location.replace("./purchase.html")
}

window.onload = function(){
    this.loginout();
    this.price();
    this.displayCart();
};