<?php
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="admindb";
    


	$conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
	    die("Connection failed:".$conn->connect_error);
    }
    else{
        $Email=$Password="";
        $login=true;
        
        if(isset($_POST["loginbtn"])){

            if($_POST["email"]!=""){
                $Email=$_POST["email"];
            }

            if($_POST["password"]!=""){
                $Password=$_POST["password"];
            }

            if($_POST["email"]!="" && $_POST["password"]!=""){
                $q="SELECT * FROM tbuyer WHERE email='$Email' AND password = '$Password'";

                $result = mysqli_query($conn, $q);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count==1){  
                    session_start();
                    $_SESSION['email']=$Email;
                    header("location:Bprofile.php");  
                }  
                else{  
                    $login=false;
                }  
            }
            
        }
    }
    $conn->close();
?>



	