<?php

    if(isset($_POST["logoutbtn"])){
            session_unset();
            session_destroy();
            header('location:Index.php');
        }
?>