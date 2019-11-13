function purchase() {
	if (confirm("Are you sure you want to Purchase")){
		window.location.replace("./home.html");
		sessionStorage.removeItem("cart");
	}
}