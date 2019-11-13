function adminPage(){
    var url = String (document.location);
    var type = url.substring(42, url.length);

    if(type == "newAdmin"){
        document.getElementById("adminFunc").innerHTML = `<br><br><br>
        <h1>Create New Admin Account</h1><br>
        Username: <input class="field" type="text" id="username" value=""><br><br>
		Password: <input class="field" type="password" id="password" value=""><br><br>
        <button onclick="createAdmin()" class="search-submit" type="button">Create</button>`;
    }else if(type == "removeAdmin"){
        document.getElementById("adminFunc").innerHTML = `<br><br><br>
        <h1>Remove Admin Account</h1><br>
        <p>Type the username of the Admin you wish to remove:</p><br>
        Username: <input class="field" type="text" id="username" value=""><br><br>
        <button onclick="login()" class="search-submit" type="button">Remove</button>`;
    }else if(type == "addItem"){
        document.getElementById("adminFunc").innerHTML = ``;
    }else if(type == "removeItem"){
        document.getElementById("adminFunc").innerHTML = ``;
    }
}

function createAdmin(){

}

function removeAdmin(){
    
}

function addItem(){

}

function removeItem(){

}

window.onload = function(){
    this.adminPage();
}