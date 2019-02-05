<!DOCTYPE html>
<html class="boxed">
<head>
<meta charset="UTF-8">
<title>BusPlanner</title>
<link rel="stylesheet" type="text/css" href="index.css">    
</head>
<div id="achtergrond">
<body>
    <h1>BusPlanner</h1>
    <br><br><br><br><a onclick="document.getElementById('id01').style.display='block'" class="myButton">Login</a>
    <div id="id01" class="modal"> 
    <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/logo.PNG" alt="logo" class="logo" style="width:100px;height:100px">
    </div>

    <div class="login">
      <b>E-mail</b><br>
      <input type="email" placeholder="Enter uw e-mail adres" name="email" required><br>
        <br>
      <b>Wachtwoord</b>
      <input type="password" placeholder="Enter uw wachtwoord" name="password" required><br>
        
      <br><input type="submit" value="Verzenden"><br>
    </div>

    <div class="login" style="background-color:ffffff"></div>
    </form>
    </div>
    
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }   
    </script>
</body>
</div>
</html>