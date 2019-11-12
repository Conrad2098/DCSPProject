function addToCart(value){
    if(sessionStorage.getItem("username") == null){
        window.location.replace("./login.html");
    }
    if(sessionStorage.getItem("cart") == null){
        sessionStorage.setItem("cart", value);
        alert(sessionStorage.getItem("cart"));
    }else{
        var oldMessage = sessionStorage.getItem("cart");

        sessionStorage.removeItem("cart");
        sessionStorage.setItem("cart", oldMessage + value);
        alert(sessionStorage.getItem("cart"));
    }
}

function removeItem(){
    alert("yeet");
}

function emptyCart(){
    sessionStorage.removeItem("cart");
    alert("Cart Emptied");
}