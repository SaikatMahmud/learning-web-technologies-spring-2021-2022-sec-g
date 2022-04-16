

function deactive(value) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../models/userModeljs.php?func=deactive&id=" + value, true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('table').innerHTML=loadTable();
            // location.reload(true);
            //alert(this.responseText);
            //document.getElementById('status').innerHTML= this.responseText;

        }
    }

}

function active(value) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../models/userModeljs.php?func=active&id=" + value, true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('table').innerHTML=loadTable();
            //location.reload(true);
            // return false;
            //window.location.href = window.location.href;
            //alert(this.responseText);
            //document.getElementById('status').innerHTML= this.responseText;
        }
    }
}

function loadTable() {
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../models/userModeljs.php?func=table&id=", true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('table').innerHTML=this.responseText;
            //location.reload(true);
            //alert(this.responseText);
            // return false;
            //window.location.href = window.location.href;
            //alert(this.responseText);
            //document.getElementById('status').innerHTML= this.responseText;
        }
    }
}
