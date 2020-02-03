<?php
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username) || !empty($password))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="phpmyadmin";
    $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    } else {
        $sql="INSERT INTO test (username, password) values('$username','$password')";
        if($conn->query($sql)) {
            echo "New record is inserted sucessfully";
        }
        else{
            echo "Error: " .$sql ."<br>" .$conn->error;
        }
        $conn->close();
    }
}
    else{
        echo "ALL field is required";
    }


?>