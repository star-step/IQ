<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php $_SESSION["TrackingURL"]=$_SERVER["PHP_SELF"];
 Confirm_Login(); ?>
<?php ?>

<!DOCTYPE>

<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="Css/Styles.css">
  <link rel="stylesheet" href="Css/app.css">

  <style type="text/css">
.card-container {
  height: 50px;
  perspective: 600;
  position: relative;
  width: 150px;
  background-color: transparent; 
}

.card {
  height: 50%;
  position: absolute;
  transform-style: preserve-3d;
  transition: all 1s ease-in-out;
  width: 82.3%;
}

.card:hover {
  transform: rotateY(180deg);
}

.card .side {
  backface-visibility: hidden;
  height: 100%;
  position: absolute;
  width: 100%;
}

.card .back {
  transform: rotateY(180deg);
}

.box {
        animation: fadeInAnimation ease 2s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
      }

      @keyframes fadeInAnimation {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }
    
  </style>

  <script src="jquery.js"></script>
  <script src="cycle2.js"></script>
    <title>Home</title>

  </head>
  <body>
    
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0074D9; height: 120px;">
    <div class="container">
      <div class="hea">

      <a href="#" class="navbar-brand"><img src="Includes/logo.PNG" style="height: 75px; width: 170px;"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="hea">
      <div class="collapse navbar-collapse" id="navbarcollapseCMS">
          <div class="offset-lg-4">
              <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="Logout.php" class="nav-link"><h4>
          <i class="fas fa-user-times text-danger" style="font-size: 15px;"> Logout</i></h4> </a></li>
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="edit.php" class="nav-link"> <h4><i class="fas fa-user" style="color: #01FF70; font-size: 15px;"> Edit Profile</i></h4> </a>
        </li>
      </ul>
      </div>
      </div>
    </div>
    </div>
  </nav>
  <div class="background"></div>
    <div class="box">
  <div class="col-sm-8 offset-lg-2 py-2">

<style type="text/css">
  .background {
        display: block;
        z-index: 1;
        left: 0;
        right: 0;
        background-image: url(Includes/main.png);
        height: 585px;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: fixed;
      }

      .box {
        position: fixed;
        left: 0;
        right: 0;
        z-index: 9999;
      }

      .hea {
        animation: fadeInAnimation ease 2s;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
      }

      @keyframes fadeInAnimation {
        0% {
          opacity: 0;
        }

        100% {
          opacity: 1;
        }
      }

      .main {
    opacity: 0;
    animation: fadeBounce 1.5s forwards;
    -webkit-animation: fadeBounce 1.5s forwards;
}

.main :nth-child(2) .card {
    animation-delay: 1s;
    -webkit-animation-delay: 1s;
}

.main :nth-child(3) .card {
    animation-delay: 1.5s;
    -webkit-animation-delay: 1.5s;
}

.main :nth-child(4) .card {
    animation-delay: 2s;
    -webkit-animation-delay: 2s;
}
</style>


    
<div class="offset-lg-4 py-4">


  

<div class="container">
  <div class="main">
  <div style="margin-top: 10px; box-sizing: border-box;">
  <div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-pause-on-hover="true">
        
              <div class="slide img">
                <img src="images/iq1.jpg" alt="IQ">
              </div>
              <div class="slide img">
                <img src="images/iq2.jpg" alt="IQ">
              </div>

              <div class="slide img">
                <img src="images/iq3.jpg" alt="IQ">
              </div>

            </div>
          </div>
        </div>
      </div>
        </div>
    
<style type="text/css">
  .button {
    background-image: url(Includes/bg2.png);
    background-size: 100%;
  }
</style>

    <div style="margin-top: 15px;">
      <div class="container">
      <div class="main">
        <div class="card-container">

          <div class="card">
            <div class="side">
        <div class="button">
        <button class="btn">
          <h4><div style="color: #FFF;"> Take test</div></h4>
</button>
</div>
</div>
<div class="side back">
<div class="button">
        <button class="btn">
          
          <h4><a href="newtest.php"><div style="color: #FFF;"> Start new IQ Test</div></a></h4>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
