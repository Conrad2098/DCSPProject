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
        Item Name: <input class="field" type="text" id="name" value=""><br><br>
        Price: <input class="field" id="price" type="number" value="10" min="10" step="10"> <br><br>
        Item Category: <select class="field" id="cat">
          <option value="graphicscards" id="graphicscards">Graphics Cards</option>
          <option value="motherboard" id="motherboard">Motherboards</option>
          <option value="cpu" id="cpu">CPUs</option>
          <option value="ram" id="ram">RAM</option>
        </select><br><br>
        Item Description: <input class="field" type="text" id="desc" value=""><br><br>
        Image: <input class="field" type="file" id="img" value=""><br><br>
        <button onclick="preview()" class="search-submit" type="button">Preview Store Item</button>
        <button onclick="addItem()" class="search-submit" type="button">Add Item</button><br>
        <div id="preview" class="products">
        <div class="cl">&nbsp;</div>
        <ul id="previewContent"></ul>
        <div class="cl">&nbsp;</div>
        </div>`;
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
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var cat = document.getElementById("cat").value;
    var desc = document.getElementById("desc").value;
    var img = document.getElementById("img").value;

    var fileName = img.substring(12, img.length);
    var newFilePath = "./CSS/Images/" + fileName;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == ""){
                alert("Could not add item.")
            }else{
                alert("Item added to store.");
            }
        }
    }
    req.open("GET", "admin.php?n=" + name + "&p=" + price + "&c=" + cat + "&d=" + desc + "&i=" + newFilePath + "&t=addItem", true);
    req.send();
}

function preview(){
    var name = document.getElementById("name").value;
    var price = document.getElementById("price").value;
    var cat = document.getElementById("cat").value;
    var desc = document.getElementById("desc").value;
    var img = document.getElementById("img").value;

    var fileName = img.substring(12, img.length);
    var newFilePath = "./CSS/Images/" + fileName;

    document.getElementById("previewContent").innerHTML = `
    <li> <a href='#'><img src='` + newFilePath + `' width='235' height='275'></a>
        <div class='product-info'>
            <h3>` + name + `</h3>
            <div class='product-desc'>
                <h4>` + cat + `</h4>
                <p>` + desc + `</p>
                <strong class='price'>$` + price + `.00</strong></div>
        </div>
    </li>`;
}

function removeItem(){
    var num = document.getElementById("").value;

    var req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == ""){
                alert("Could Not Remove Item.");
            }else{
                alert("Item Removed.");
            }
        }
    }
    req.open("GET", "admin.php?n=" + num + "&t=removeItem", true);
    req.send();
}

window.onload = function(){
    this.adminPage();
}