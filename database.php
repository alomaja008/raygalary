<?php
$db_server = "localhost";
$db_user = "root";
$db_password= "";
$db_name = "ray";
$conn= "";

    try{
        $conn=mysqli_connect($db_server,
                            $db_user,
                            $db_password,
                            $db_name);

    }
    catch(mysqli_sql_exception){
        
       #die("connection failed: ". $conn->connect_error);
      header("Location: error.php");
    }

?>