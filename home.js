window.onload = home();

function home(){
    var xhr = new XMLHttpRequest();
    var url = "home.php";

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){

    	if (xhr.status == 200 && xhr.readyState == 4) {

    		if (xhr.responseXML) {

                var display_data = "";
    			var sys = xhr.responseXML.getElementsByTagName("available");
    			var system, state, id;
	        	for (var i = 0; i <= sys.length - 1; i++) {
					system = sys[i].getElementsByTagName('system')[0].firstChild.nodeValue;
					state = sys[i].getElementsByTagName('status')[0].firstChild.nodeValue;
					display_data += "\
					<tr>\
						<td>"+system+"</td>\
						<td>"+state+"</td>\
						<td><input type='text' id='txt"+system+"' placeholder='Enter User Id'></input></td>\
						<td><a id='btn"+system+"' onclick='assign(this)' href=''>Assign</a></td>\
					</tr>";
				}

				sys = xhr.responseXML.getElementsByTagName("not_available");
				for (var i = 0; i <= sys.length - 1; i++) {
					system = sys[i].getElementsByTagName('system')[0].firstChild.nodeValue;
					state = sys[i].getElementsByTagName('status')[0].firstChild.nodeValue;
					id = sys[i].getElementsByTagName('id')[0].firstChild.nodeValue;
					display_data += "\
					<tr>\
						<td>"+system+"</td>\
						<td>"+state+"</td>\
						<td id='txt"+system+"'>"+id+"</td>\
						<td><a id='btn"+system+"' onclick='unassign(this)' href=''>Unassign</a></td>\
					</tr>";
				}
				
		    	document.getElementById("system_disp_table").innerHTML = display_data;
    		}
    	}
    }

    xhr.send();

}

function assign(event){

	var button_value = $(event).attr("id").substring(3);
	var user_id = document.getElementById("txt"+button_value).value;
    var xhr = new XMLHttpRequest();
    var url = "assign.php";
    var params = "sysid="+button_value+"&user_id="+user_id;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){

    	if (xhr.status == 200 && xhr.readyState == 4) {

    		if (xhr.responseXML) {
    			home();
            }
    	}
    }

    xhr.send(params);

}

function unassign(event){

	var button_value = $(event).attr("id").substring(3);
	var user_id = document.getElementById("txt"+button_value).value;
    var xhr = new XMLHttpRequest();
    var url = "unassign.php";
    var params = "sysid="+button_value+"&user_id="+user_id;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){

    	if (xhr.status == 200 && xhr.readyState == 4) {

    		if (xhr.responseXML) {
    			home();
            }
    	}
    }

    xhr.send(params);

}