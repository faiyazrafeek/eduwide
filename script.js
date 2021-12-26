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
           
        }
    }
    xml.open("POST", "insert_data.php", true);
    xml.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xml.send(queryString);


}