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
        <p>Type the username of the account you wish to remove:</p><br>
        Username: <input class="field" type="text" id="username" value=""><br><br>
        <button onclick="removeAdmin()" class="search-submit" type="button">Remove</button>`;
    }else if(type == "addItem"){
        document.getElementById("adminFunc").innerHTML = `<br><br><br>
        <h1>Add Item</h1><br><br>
        Item Name: <input class="field" type="text" id="username" value=""><br><br>
        Price: <input class="field" type="number" value="10" min="10" step="10"> <br><br>
        Item Category: <select class="field">
          <option value="graphicscards">Graphics Cards</option>
          <option value="motherboard">Motherboards</option>
          <option value="cpu">CPUs</option>
          <option value="ram">RAM</option>
        </select><br><br>
			  Item Description: <input class="field" type="text" id="password" value=""><br><br>
        <button onclick="addItem()" class="search-submit" type="button">Add Item</button>`;
    }else if(type == "removeItem"){
        document.getElementById("adminFunc").innerHTML = `<br><br><br>
        <h1>Remove Item</h1><br>
        <p>Please input the ID of the item you wish to delete:</p><br>
        Item ID: <input class="field" type="text" id="itemID" value=""><br><br>
        <button onclick="removeItem()" class="search-submit" type="button">Remove Item</button>`;
    }
}

function createAdmin(){
    var newUser = document.getElementById("username").value;
    var newPass = document.getElementById("password").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == ""){
                alert("Already Exists. Please try again.")
            }else{
                alert("Account Created.");
            }
        }
    }
    req.open("GET", "admin.php?u=" + newUser + "&p=" + newPass + "&t=createAdmin", true);
    req.send();
}

function removeAdmin(){
    var user = document.getElementById("username").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == ""){
                alert("Could not remove account")
            }else{
                alert("Successfully Removed");
            }
        }
    }
    req.open("GET", "admin.php?u=" + user + "&t=remove", true);
    req.send();
}

function addItem(){

}

function removeItem(){

}

window.onload = function(){
    this.adminPage();
}