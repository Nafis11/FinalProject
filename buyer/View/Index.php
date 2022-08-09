<?php
	include '../Controller/login_validation.php';
?>
<html>
  <head>
    <title>Log in</title>
    <link rel="stylesheet" href="../Model/css/index.css?v<?php echo time(); ?>">
  </head>
  <body>
    <div id="container">
      <div class="log">
        <div class="webtitle">
          <h2 >Plastic & Polythene Collector</h2>
        </div>
        <div class="logform">
            <?php
            if($login==false)
              echo "<p style='color:red;font-size:14px;text-align:center;margin:20px;'>Wrong password.Try again.</p>";
            ?>
          <form name="loginform" action="" method="POST" enctype="multipart/form-data" onsubmit="return validateform()">
            <input class="inputbox" id="email" class="inputbox" type="email" name="email" placeholder="E-Mail Address" onclick="alert_email()" oninput="return alert_wrng()">
            <span class="span" id="span">Required</span>
            <input class="inputbox" id="password" class="inputbox" type="password" name="password" placeholder="Password" onclick="alert_password()" oninput="return alert_wrng()">
            <span class="span1" id="span1">Required</span>
            <input class="loginbtn" type="submit" name="loginbtn" value="Log in">
          </form>
        </div>
        <div class="other">
          <a href="ForgetPassword.php">Forgotten Account?</a><br>
          <a href="registration.php">New User? Create a new Account.</a>
        </div>
      </div>
    </div>
    <script src='../Controller/js/jquery.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
    <script src='../Controller/js/login _vali.js?v<?php echo time(); ?>' crossorigin='anonymous'></script>
  </body>
</html>



      

    