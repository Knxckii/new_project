<!DOCTOTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Location Info </title>
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body class="contact-body">
<header>

  <h2 class="logo">Geoloc</h2>
  <nav class="navigation">
    
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    
    <div class="list-container">
      <ul class="uls">
        <li><a class="home" id="links" href="home.php">Home</a></li>

        <li>
          <a class="account" id="links" href="#">Account ▼</a>
          <ul class="dropdown">
            <li><a class="settings" id="links" href="#">Settings</a></li>
            <li><a class="data" id="links" href="#">Data</a></li>
          </ul>
        </li>

        <button class="btnLogin-popup" onclick="window.location.href='logreg.php';">Login</button>

        <li><a class="contact" href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>

</header>

  <div class="contactform">
    <form>      
      <input name="name" type="text" class="feedback-input" placeholder="Name" />   
      <input name="email" type="text" class="feedback-input" placeholder="Email" />
      <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
      <input class="subcontact" type="submit" value="SUBMIT"/>
    </form>
  </div>

  <script src="js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>