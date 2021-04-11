

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'maindb');
     if($conn)
     {
        echo "connection succesfull <br>";
     }
     else
     {
        die("connection lost".$conn->connect_error);
     }
     
  
     $name = $_POST['user'];
     $password = $_POST['psw'];


     //insert value in table
     $sql = "INSERT INTO main_login_data(name, password) VALUES ('$name', '$password')";
     if($conn->query($sql) === TRUE)
     {
        echo "data is inserted succesfully";
     }
     else
     {
        echo "data is not inserted".$conn->error;
     }
     header('location: done.php');
     $conn->close();
?>