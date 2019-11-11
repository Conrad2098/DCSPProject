function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^*]*)/gi, function(m, key, value){
        key = decodeURIComponent(key);
        value = decodeURIComponent(value);
        vars[key] = value;
    });
    return vars;
}

function category(){

}

function results() {
    try{
        document.getElementById("searchbar").value = getUrlVars()["q"];
        var searchQ = getUrlVars()["q"];

        var req = new XMLHttpRequest();
        req.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("searchRes").innerHTML = this.responseText;
            }
        }
        req.open("GET", "query.php?q=" + searchQ + "&search=itmName", true);
        req.send();
    }catch(err){
        alert(err);
    }
}

window.onload = function(){
    this.results();
}