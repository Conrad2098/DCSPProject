function addToCart(value){
    if(sessionStorage.getItem("username") == null){
        window.location.replace("./login.html");
        return;
    }
    if(sessionStorage.getItem("cart") == null){
        sessionStorage.setItem("cart", value);
    }else{
        var oldMessage = sessionStorage.getItem("cart");

        sessionStorage.removeItem("cart");
        sessionStorage.setItem("cart", oldMessage + value);

    }
    Notification.requestPermission();
    var notification = new Notification('Item Added');
}

function removeItem(val){
    var oldCart = sessionStorage.getItem("cart");
    sessionStorage.removeItem("cart");

    var newCart = oldCart.replace(val, '');
    sessionStorage.setItem("cart", newCart);
    window.location.reload();
}

function emptyCart(){
    alert(sessionStorage.getItem("cart"));
    sessionStorage.removeItem("cart");
    alert("Cart Emptied");
}