<?php
if (isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $db="bhavin";
    $connection=mysqli_connect($server,$username,$password,$db);
    if(!$connection){
        die(mysqli_connect_error());
    }
    echo "connected";
    $name=$_POST['name'];
    $sname=$_POST['surname'];

    echo $sql="INSERT INTO form (Name, Surname) VALUES('$name', '$sname')";

    $query=mysqli_query($connection,$sql);
    if ($query)
    {
        echo "data inserted";
    }
}
?>