window.onload = history();

function history(){
    var xhr = new XMLHttpRequest();
    var url = "history.php";

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){

        if (xhr.status == 200 && xhr.readyState == 4) {

            if (xhr.responseXML) {

                var display_data = "";
                var sys = xhr.responseXML.getElementsByTagName("item");
                var system, id, login, logout;
                for (var i = 0; i <= sys.length - 1; i++) {
                    system = sys[i].getElementsByTagName('system')[0].firstChild.nodeValue;
                    id = sys[i].getElementsByTagName('id')[0].firstChild.nodeValue;
                    login = sys[i].getElementsByTagName('login')[0].firstChild.nodeValue;
                    logout = sys[i].getElementsByTagName('logout')[0].firstChild.nodeValue;
                    display_data += "\
                    <tr>\
                        <td>"+system+"</td>\
                        <td>"+id+"</td>\
                        <td>"+login+"</td>\
                        <td>"+logout+"</td>\
                    </tr>";
                }
                
                document.getElementById("history_disp_table").innerHTML = display_data;
            }
        }
    }

    xhr.send();

}