<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maindb";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if(!$con)
    
    {
        die("You are not connected because".mysqli_connect_error());
    }

    
    
        $user = $_POST['uname'];
        $pass = $_POST['psw'];
        //echo $user;
        //echo $pass;
        $query = " SELECT * FROM main_login_data WHERE name ='$user' && password ='$pass' ";
        $data = mysqli_query($con, $query);
        $total = mysqli_num_rows($data);
        if($total == 1)
        {
            echo $total."valid user name and password";
            $_SESSION['login_user'] = $user;
            header("location: showdata.php");
        
        }else {

            echo "invalid user name and password";
            header('location: sorry.php');

        }

        

    
?>