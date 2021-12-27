function save_data(){
    let form = document.forms["student_form"];

    let formData = new FormData(form);
    var queryString = "";

    for(let[name, value] of formData.entries()){
        queryString += name + "=" + value + "&";
    }

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            fetchTable();
        }
    }
    xml.open("POST", "insert_data.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send(queryString);
}


let fetchTable = () => {
    // document.getElementById("updateBtn").style.display = "none";
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("tabledata").innerHTML = this.responseText;
            // alert(this.responseText);
        }else{
            document.getElementById("tabledata").innerHTML = `<div class="mt-4 spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>`
        }
    }
    xml.open("GET", "fetch_data.php?fetchall=1", true);
    xml.send();
}

let loadData = (id) => {

    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
    document.getElementById("id").setAttribute("readonly", true);

            let data = JSON.parse(this.responseText);
            document.getElementById("id").value = data.id;
            document.getElementById("name").value = data.name;
            document.getElementById("age").value = data.age;
            document.getElementById("city").value = data.city;
        }
    }
    xml.open("GET", "fetch_data.php?load=1&id="+ id, true);
    xml.send();
}


function delete_row(id) {
    let data = 'id=' + id + '&del=1';
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            fetchTable();
        }
    }
    xml.open("POST", "delete.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send(data);
}

let update = () => {
    let stform = document.forms["student_form"];
    let formData = new FormData(stform);
    var queryString = "update=1&";

    for(let[name, value] of formData.entries()){
        queryString += name + "=" + value + "&";
    }


    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function () { 
        if(this.readyState == 4 && this.status == 200){
            alert(this.responseText);
            fetchTable();
        }
    }
    xml.open("GET", "update.php?"+ queryString, true);
    // xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send();

}