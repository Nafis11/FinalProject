<?php
    session_start();
    include '../Controller/forgetPass.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forget Password</title>
        <link rel="stylesheet" href="../Model/css/for1.css?v<?php echo time(); ?>">

    </head>
    <body>
        <div id="container">
            <div class="forget">
            <h2>Reset Password</h2>
                   
                   <form action="" method="post" enctype="multipart/form-data">
                       
                               <input type="password" name="npass" placeholder="New Password">
                           
                               <?php
                                   if($isPost==true && $NPass=="")
                                    echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                               ?><br><br>
                           
                               <input type="password" name="cnpass" placeholder="Confirm password">
                           
                               <?php
                                   if($isPost==true && $CNPass=="")
                                    echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                               ?><br><br>
                           
                               <?php
                                   if($NPass!="" && $CNPass!="" && $isMatch==false)
                                    echo "<span style='color:red;font-size:13px;text-align:left;'>Password not matched</span>";
                               ?><br><br>
                           
                               
                                   <input type="submit" value="Back" formaction="Index.php">
                               
                                   <input type="submit" value="Save" name="passSavebtn">
                               
                   </form>
            </div>
        </div>
                        
                    
    </body>

</html>