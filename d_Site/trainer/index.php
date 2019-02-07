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
    <br><br><br><br>
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'login')" id="defaultOpen">Login</button>
  <button class="tablinks" onclick="openCity(event, 'registreer')">Registreer</button>
</div>

<!-- Tab content -->
<div id="login" class="tabcontent">
  <h2>Login</h2>
    <div id="id01" class="modal"> 
        <form class="modal-content animate" action="logins.php" method="POST">
            <div class="imgcontainer">
              <img src="images/logo.PNG" alt="logo" class="logo" style="width:150px;height:150px;">
            </div>
            <div class="login">
                <br><p1><b>E-mail</b></p1><br>
                <br>
                <input type="email" placeholder="Enter uw e-mail adres" name="email" required>
                <br>
                <br><br><p1><b>Wachtwoord</b></p1><br><br>
                <input type="password" placeholder="Enter uw wachtwoord" name="password" required><br>
                <br>
                <br><input type="submit" value="Verzenden">     
                <br>
            </div>
            <div class="login" style="background-color:ffffff"></div>
        </form>
    </div>
</div>

<div id="registreer" class="tabcontent">
  <h2>Registreer</h2>
            <form class="modal-content animate" action="registreer.php" method="POST">
            <div class="imgcontainer">
              <img src="images/logo.PNG" alt="logo" class="logo" style="width:150px;height:150px;">
            </div>
                <br><p1><b>E-mail:</b></p1><br>
                <br>
                <input type="email" placeholder="Enter uw e-mail adres" name="email" required>
                <br>
                <br><br><p1><b>Wachtwoord:</b></p1><br><br>
                <input type="password" placeholder="Enter een wachtwoord" name="password" required><br>
                <br>
                <br><p1><b>Naam:</b></p1><br><br>    
                <input type="text" name="naam" required>
                <br><br><br><p1><b>Voornaam:</b></p1><br><br>
                <input type="text" name="voornaam" required>
                <br><br><br><p1><b>Afdeling:</b></p1><br><br>
                <select class="select" name="afdelingen">
                    <option value="1">Buso</option>
                    <option value="2">Bubao</option>
                    <option value="3">NFC</option>
                    <option value="4">TWI</option>
                </select>
                    
                <br><br><br><br><input type="submit" value="Verzenden">     
        </form> 

    <script>function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
        }
      document.getElementById("defaultOpen").click();
    </script>
    </div>   
</body>
</div>
</html>