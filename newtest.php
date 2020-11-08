<!DOCTYPE>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Css/app.css">
    <title>Test</title>

  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0074D9; height: 100px;">
    <div class="container">
      <a href="#" class="navbar-brand mb-5"><img src="Includes/logo.PNG" style="height: 55px; width: 130px;"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarcollapseCMS">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcollapseCMS" style="float: right;">
          <div class="offset-lg-10">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="Dashboard.php" class="nav-link"> <i class="fas fa-window-close text-danger"> Exit</i> </a>
        </li>
      </ul>
      </div>
      </div>
    </div>
  </nav>
  <style type="text/css">

    .nav-item:hover {
      color: #01FF70;
    }

    .nextButton {
      border-radius: 5px;
      transition: transform .5s;
      font-weight: normal;
      box-shadow: 10px 10px 5px rgba(0,0,0,0.3);
      border: none;
      background : #404040;
      font-size: 15px;
      color : #FFF !important;
      font-weight: 100;
      padding: 20px;
      text-transform: uppercase;
      border-radius: 6px;
      display: inline-block;
      transition: all 0.5s ease 0s;
    }

    .nextButton:hover {
      color: #404040 !important;
      font-weight: 700 !important;
      letter-spacing: 1px;
      background : none;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.6);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.6);
      transition: all 0.3s ease 0s;
    }

    .choiceList {
      color: #000;
    }
    .question {
      color: #FFF;
    }
  .iqBox {
    background-color: #CAFAFE;
  }
  
  .background {
        display: block;
        z-index: 1;
        left: 0;
        right: 0;
        background-image: url(Includes/test.png);
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
      
</style>

<div class="background"></div>
<div class="container iqBox box">
    <div class="quizContainer container-fluid" style="height: 500px;">
        <div id="quiz1" class="iqQuiz text-center">
      
      <h2>IQ Quiz</h2>
    
    <div id="count" class="timer"><span style="color: #000;" id="timer"></span>: left</div>
    </div>
        <div class="question bg-info">
              <div class="Count" id="count">Start</div>
        </div>
        <ul class="choiceList"></ul>
        <div class="quizMessage bg-danger" style="visibility: hidden;"></div>
         
      <div class="result"></div>
        <style>
            .nextButton{
                position: fixed;
                bottom: 50px;
                right: 100px;
            }
            .view{
              visibility: visible;
            }
        </style>
         <button class="nextButton bg-success" value="submit" id="next">Next Question</button>
        <button class="preButton bg-success" style="visibility: hidden;" id="pre"></button>

    </div>
  </div>
</body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
          <script src="app2.js"></script>

</html>
