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
                <h1>Find your Account</h1>
                            <p>
                                Please Enter your e-mail address to find your account.
                            </p>
                        
                            <form action="" method="post" enctype="multipart/form-data">
                            
                                        <input type="email" name="femail" placeholder="E-Mail Address">
                                
                                        <?php
						                if($isPost==true && $Email=="")
							             echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
                                        ?>
                                    
                                        <?php
                                            if($Email!="" && $isFind==false)
                                            echo "<span style='color:red;font-size:13px;text-align:left;'>User Not Found.</span>";
                                        ?><br>
                                    
                                            
                                        
                                            <input type="submit" name="emailfindbtn" value="Search">
                                    
                            </form>
            </div>
        </div>
       
    </body>
</html>