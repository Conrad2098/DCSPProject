function addToCart(value){
    if(sessionStorage.getItem("username") == null){
        window.location.replace("./login.html");
    }
    if(sessionStorage.getItem("cart") == null){
        sessionStorage.setItem("cart", value);
    }else{
        var oldMessage = sessionStorage.getItem("cart");

        sessionStorage.removeItem("cart");
        sessionStorage.setItem("cart", oldMessage + value);
    }
}

function removeItem(val){
    var oldCart = sessionStorage.getItem("cart");
    sessionStorage.removeItem("cart");

    var newCart = oldCart.replace(val, '');
    sessionStorage.setItem("cart", newCart);
    window.location.reload();
}

function emptyCart(){
    sessionStorage.removeItem("cart");
    alert("Cart Emptied");
}