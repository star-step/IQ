<?php require_once("Includes/DB.php"); ?>
<?php require_once("Includes/Functions.php"); ?>
<?php require_once("Includes/Sessions.php"); ?>
<?php
if(isset($_SESSION["UserId"])){
  Redirect_to("Dashboard.php");
}

if (isset($_POST["Submit"])) {
  $UserName = $_POST["uname"];
  $Password = $_POST["Password"];
  if (empty($UserName)||empty($Password)) {
    $_SESSION["ErrorMessage"]= "All fields must be filled out";
    Redirect_to("Login.php");
  }else {
    // code for checking username and password from Database
    $Found_Account=Login_Attempt($UserName,$Password);
    if ($Found_Account) {
      $_SESSION["UserId"]=$Found_Account["id"];
      $_SESSION["UserName"]=$Found_Account["uname"];
      $_SESSION["Name"]=$Found_Account["name"];
      $_SESSION["SuccessMessage"]= "Welcome";
      if (isset($_SESSION["TrackingURL"])) {
        Redirect_to($_SESSION["TrackingURL"]);
      }else{
      Redirect_to("Dashboard.php");
    }
    }else {
      $_SESSION["ErrorMessage"]="Incorrect Username/Password";
      Redirect_to("Login.php");
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <link rel="stylesheet" href="Css/Styles.css">

  <title>Login</title>
</head>
<body>

    <!-- HEADER -->
    <header class="text-white py-3" style="background-color: #0074D9;">
      <div class="container0">
        <div class="row">
          <div class="col-md-12">
            <img src="Includes/logo.PNG" style="height: 70px; width: 130px;">
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER END -->
<style type="text/css">
  .background {
        display: block;
        z-index: 1;
        left: 0;
        right: 0;
        background-image: url(Includes/login.png);
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



    <!-- Main Area Start -->
    <div class="background"></div>
      <div class="box">
    <section class="container py-2 mb-4">
      <div class="container">
      <div class="row">
        <div class="offset-sm-3 col-sm-6" style="min-height:500px;">
          <br><br><br>
          <?php
           echo ErrorMessage();
           echo SuccessMessage();
           ?>
          <div class="card text-dark" style="background-color: #0074D9;">
            <div class="card-header">
              <h4 style="text-align: center; color:#FFF; ">Welcome</h4>
              </div>
              <div class="card-body bg-light">
              <form class="" action="Login.php" method="post">
                <div class="form-group">
                  <label for="uname"><span class="FieldInfo" style="color: #0074D9;">Username</span></label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white" style="background-color: #0074D9;"> <i class="fas fa-user"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="uname" id="uname" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password"><span class="FieldInfo" style="color: #0074D9;">Password</span></label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-white" style="background-color: #0074D9;"> <i class="fas fa-lock"></i> </span>
                    </div>
                    <input type="password" class="form-control" name="Password" id="password" value="">
                  </div>
                </div>
                <input type="submit" name="Submit" class="btn btn-block text-white" style="background-color: #0074D9;" value="Login">
             </form>
            </div>
          </div>
              <div style="text-align: center;">New user? <a href="register.php">Register here</a></div>
       </div>
      </div>
    </div>
       </section>
     </div>
    <!-- Main Area End -->
   

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
</script>
</footer>
</body>
</html>
