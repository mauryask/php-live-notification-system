
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author"  content="Shubham Maurya">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
<title>Live Notification | PHP | AJAX </title>
<link href="index.css" type="text/css" rel="stylesheet">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js" type="text/javascript"></script>
</head>
<body>

<div id="popup" style="display:none;">

</div>

<p class="head">Live notification using Ajax, php & mysql</p>
<div class="msg">
<form method='post' autocomplete="off">
<input type="text" placeholder="Topic" name="topic" id="topic">
<textarea placeholder="Type your message here...." name="msg" id="msg" rows="4" style="resize:none;"></textarea>
<input type="submit" id="send" value="Send" name="send">
</form>
</div>
<img src="notification.svg" onclick="show()">
<span id="count"></span>

</body>

</html>


<script type="text/javascript">

/* ===================  Display Notification   ==================== */

var action=1;
function show()
{
if(action==1)
{



var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200)
 {
  document.getElementById("popup").innerHTML = this.responseText;
 }
};
xhttp.open("GET", "get_noti.php", true);
xhttp.send();



document.getElementById('popup').style.display='block';

action=2;
}
else
{
document.getElementById('popup').style.display='none';
action=1;
}
}





$(document).ready ( function(){

/* ===================  Send Notification   ==================== */

$("#send").click(function(){

var topic = $('#topic').val().trim();
var msg = $('#msg').val().trim();

       $.ajax({

        url:'insert.php',
        type:'post',
        data:{topic:topic, msg:msg},
        success: function(response)
		{
             alert(response);
                                    
		}

       })

})


})

/* ===================   Get total Number of notifications   ==================== */
function loadDoc() {

setInterval(function(){

 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   document.getElementById("count").innerHTML = this.responseText;
  }
 };
 xhttp.open("GET", "fetch.php", true);
 xhttp.send();

},1000);

}
loadDoc();


</script>


