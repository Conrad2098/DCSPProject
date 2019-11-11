function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^*]*)/gi, function(m, key, value){
        key = decodeURIComponent(key);
        value = decodeURIComponent(value);
        vars[key] = value;
    });
    return vars;
}

function catQuery(){
    var catQ = getUrlVars()["cat"];

    var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("catRes").innerHTML = this.responseText;
            }
        }
        req.open("GET", "query.php?q=" + catQ + "&search=itmCat", true);
        req.send();
}

window.onload = function() {
    this.catQuery();
}