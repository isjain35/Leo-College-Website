<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maindb";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if(!$con)
    
    {
        die("You are not connected because".mysqli_connect_error());
    }

    
    
        $CODE = $_POST['code'];
        $query = " SELECT * FROM secretCode WHERE code ='$CODE' ";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        if($total == 1)
        {
            echo $total."valid secret code";
            //$_SESSION['login_user'] = $user;
            header("location: create.php");
        
        }else {

            echo "invalid secret code";
            header('location: sorry_secret_code.php');

        }

        

    
?>