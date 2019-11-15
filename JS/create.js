function createNew(){
    var name = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if(name == "" || pass == ""){
        alert("Must put in both a username and password for new account.");
        return;
    }

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == ""){
                alert("Already Exists. Please try again.")
            }else{
                alert("Account Created. Click OK to return to the login page.");
                window.location.replace("login.html");
            }
        }
    }
    req.open("GET", "create.php?u=" + name + "&p=" + pass, true);
    req.send();
}