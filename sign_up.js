function sign_up() {
	
	var xhr = new XMLHttpRequest();
	var url = "sign_up.php";

	var name = document.getElementById("user_name").value;
	var id = document.getElementById("user_id").value;
	var email = document.getElementById("user_email").value;
	var pass = document.getElementById("user_pass").value;
	var dob = document.getElementById("user_dob").value;
	var sex = document.getElementById("user_sex").value;
	var branch = document.getElementById("user_branch").value;
	var batch = document.getElementById("user_batch").value;
	var hostel = document.getElementById("user_hostel").value;
	var room = document.getElementById("user_room").value;
	var advisor = document.getElementById("user_advisor").value;
	var college = document.getElementById("user_college").value;

	var params = "name="+name+"&id="+id+"&email="+email+"&pass="+pass+"&dob="+dob+"&sex="+sex+"&branch="+branch+"&batch="+batch+"&hostel="+hostel+"&room="+room+"&advisor="+advisor+"&college="+college;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){
    	if (xhr.readyState == 4 && xhr.status == 200) {
    		if (xhr.responseXML) {
    			document.getElementById("dialog_content").innerHTML = xhr.responseXML.getElementsByTagName("label")[0].firstChild.nodeValue;
    		}
    	}
    }
    xhr.send(params);

}