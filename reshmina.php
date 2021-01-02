<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&family=Teko&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="alive.css">


    <title>Rashmina Weds Abinas</title>
  </head>
  <body>
    <!-- Banner and Nav -->
    <div class="navBar">
      <div></div>
      <div class="title-container">
          <div class="title"><a href="home.php" style="text-decoration: none;"><h1>AMRIT GURUNG</h1></a></div>
      </div>
      <div class="navIcon-container">
        <div class="navIcon"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></div>
      </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Motion</a>
        <a href="home.php#stills">Still</a>
        <a href="contact.php">Info</a>
        <a href="contact.php#contact">Contact</a>
    </div>

    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>

    <!-- Video Player -->
    <div class="video-container m-auto px-1 lg:flex">
      <div class="video-frame">
        <iframe src="https://www.youtube.com/embed/QCTrOvVK97c" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
    </div>

    <div class="video-descrip">
      <div class="inner-descrip">
        <h2>RASHMINA WEDS ABINAS</h2>

      </div>
    </div>

    <div class="stills-container">

      <div class="stills-frame">

        <div class="still">
          <div class="still-img">
            <img src="MOTION/6_rashmina_weds_abinas/1.jpg" alt="WEDDING" class="imageS"></img>
          </div>
        </div>

        <div class="still">
          <div class="still-img">
            <img src="MOTION/6_rashmina_weds_abinas/2.jpg" alt="FOOD" class="imageS"></img>
          </div>
        </div>

        <div class="still">
          <div class="still-img">
            <img src="MOTION/6_rashmina_weds_abinas/3.jpg" alt="EVENTS THUMBNAIL" class="imageS"></img>
          </div>
        </div>

        <div class="still">
          <div class="still-img">
            <img src="MOTION/6_rashmina_weds_abinas/4.jpg" alt="EVENTS THUMBNAIL" class="imageS"></img>
          </div>
        </div>

      </div>

    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:10px">
      <a href="https://www.facebook.com/AmritGurungPhotography" style="text-decoration: none;"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
      <a href="https://www.instagram.com/amritgurung7/?hl=en" style="text-decoration: none;"><i class="fa fa-instagram w3-hover-opacity"></i></a>
      <a href="https://www.youtube.com/channel/UCeJTqv3bk1cTtKQLzvcOqKw/videos" style="text-decoration: none;"><i class="fa fa-youtube w3-hover-opacity"></i><a/>
      <p class="w3-medium">@AmritGurungFilms</p>
    </footer>

  </body>
</html>
