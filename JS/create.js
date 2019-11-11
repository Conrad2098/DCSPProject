function createNew(){
    var name = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            alert("Account Created. Click OK to return to the login page.");
            window.location.replace("login.html");
        }
    }
    req.open("GET", "create.php?u=" + name + "&p=" + pass, true);
    req.send();
}