<?php
if (!$_GET['access_token']){
    echo "<script type='text/javascript'>window.location = 'https://oauth.groupme.com/oauth/authorize?client_id=NkuhJN7TVOnFFMar9YbaHe8OCGezw8TuPh5vxodpl1sQNz7M'</script>";
}
else {
$token = "?token=".$_GET['access_token'];
//Structure
echo '
<!DOCTYPE HTML>
<head>
    <title>GroupMe KickOut</title>
    
    <style type="text/css" media="all">
        #app {
            background-color: #E0E0E0;
            position: absolute;
            left: 25%;
            top: 25%;
            border: 1px solid #000;
            width: 25%;
            height: 150px;
        }
    </style>
</head>
<body>
    <div id="app">
        <form id="main" name="select">
        <label>Select Relevant Group:</label>
            <select id="groups">
                <option value=""> </option>
            </select>
        </form>
    </div>
    <p id="token"></p>
    <p id="response"></p>
    <script type="text/javascript" charset="utf-8">
    var token = '.$token.';
    document.getElementById("token").innerHtml = "Your token is: " + token;

    var groupX = new XMLHttpRequest();
 		groupX.onreadystatechange = function() {
 		    var groups = groupX.responseText;
 		    document.getElementById("response").innerHTML = groups;
 		}
 		groupX.open("GET", "https://api.groupme.com/v3/groups?token=" + token + "&per_page=100", true);
 		groupX.send();
 		

    
    var x = document.getElementById("groups");
    var y = document.createElement("option");
    y.text = "Selector";
    x.add(y);

        /*var tCheck = new XMLHttpRequest();
 		tCheck.onreadystatechange = function() {
 		    var token = tCheck.responseText;
 		}
 		tCheck.open("GET", "f.php?type=tCheck", false);
 		tCheck.send();
        if ()*/
    </script>
}
</body>
</html>
';

}

?>
