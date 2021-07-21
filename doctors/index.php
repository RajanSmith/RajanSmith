<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Doctors</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap" rel="stylesheet">

  </head>
  <body>
    <section class="header">
      <nav>
        <a href="index.php"> <img src="img/logo.png" alt="Logo"> </a>
        <div class="nav-links" id="navlinks">
          <i class="fa fa-times" onclick="hidemenu()"></i>
          <ul>
            <li> <a href="#">HOME</a> </li>
            <li> <a href="#">CONTACT</a> </li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>
      </nav>

      <div class="text-box">
        <h1>Life saving opportunity</h1>
        <p>From general health and wellness, to advanced and sophisticated medical conditions, <br>they draw on their medical talents to serve your brand needs.</p>
        <a href="#" class="hero-btn">Visit us to know more</a>
      </div>

    </section>


    <!--Javascript for toggle menu-->
    <script>
      var navlinks = document.getElementById("navlinks");
      function showmenu(){
        navlinks.style.right = "0";
      }
      function hidemenu(){
        navlinks.style.right = "-200px";
      }
    </script>

  </body>
</html>
