<?php
  	session_start();
    include '../Controller/log_out.php';

    $email=$_SESSION['email'];

?>
<html>
    <head>
        <title>Profile</title>
        <link rel="stylesheet" href="../Model/css/navbar.css?v<?php echo time(); ?>">
    </head>
    <body>
        <div class="container">
            <nav id="navbar">
                <div class="sname">
                    <?php echo $email; ?>
                </div>
                <div class="menubar">
                    <ul>
                        <li>
                            <a href="BProfile.php">Profile</a>
                        </li>
                        <li>
                            <a href="product.php">Product</a>
                        </li>
                        <li>
                            <a href="SinMap.php">Seller in Map</a>
                        </li>
                        <li>
                            <a href="Bnotification.php">Notification</a>
                        </li>
                        <li>
                            <a href="BNotice.php">Notice</a>
                        </li>
                        <li>
                            <a href="BReport.php">Report</a>
                        </li>
                    </ul>
                </div>
                <div class="logoutbtn">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="submit" name="logoutbtn" value="Log Out">
                    </form>
                </div>
            </nav>
        </div>
    </body>
</html>