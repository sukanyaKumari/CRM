<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <style>
body {
    background-image: url('ia.jpg'); /* Replace 'your-image.jpg' with the path to your background image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 100vh;
    
    position: relative;
    text-align: center;
}

body::before {
    content: "";
    background-color: rgba(0, 0, 0, 0.7); /* Adjust the alpha value to control transparency (0.5 = 50% transparent) */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
    </style>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRM for Internet Service Provider </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="margin-left:890px">
          <li class="nav-item">
              <a href="index.php" class="nav-link">Home</a>
          </li> 
          <li class="nav-item">
              <a href="about.php" class="nav-link">About Us</a>
          </li> 
          <li class="nav-item">
              <a href="contact.php" class="nav-link">Contact Us</a>
          </li>
         
      </ul>
   
    </div>
  </div>
</nav>
    
</body>
</html>