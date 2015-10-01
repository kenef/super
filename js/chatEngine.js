function postMessage() {

        //creating new class to use for httprequest
        var xmlhttp = new XMLHttpRequest();

        //creating variables to send to php file
        var url = "insert.php";
        var chatArea = document.getElementById('chatbox').value;
        var message = document.getElementById('describe').value;
        var vars = "message="+message;
        xmlhttp.open("POST", url, true);

        // Set content type header information for sending url enxoded variables in the request
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Access the onreadystatechange event for the XMLHttpRequest object
        xmlhttp.onreadystatechange = function() {
                var return_data = xmlhttp.responseText;
                //remove text from textarea after each submission
                document.getElementById('describe').value = "";
                //autofocusing the textarea
                document.getElementById('describe').focus();
                //place chat messages in chatbox
                document.getElementById("chatbox").innerHTML = return_data;
        }

        // Send the data to PHP now... and wait for response to update the chatbox div
        xmlhttp.send(vars);

        
}