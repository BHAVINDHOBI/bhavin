<?php
echo "hi";
if (isset($_POST['rname'])){
    $server="localhost";
    $username="root";
    $password="";
    $db="bhavin";
    $connection=mysqli_connect($server,$username,$password,$db);
    if(!$connection){
        die(mysqli_connect_error());
    }
    echo "connected";

    $name=$_POST['rname'];

    echo $sql="SELECT * FROM form WHERE Name='$name'";

    $query=mysqli_query($connection,$sql);
    if ($query)
    {
        $r=mysqli_fetch_array($query);
        if ($r>0){
            echo "data retrived";
            echo "<table>";
            echo "<tr>";
            echo "<th>";
            echo "Name";
            echo "</th>";
            echo "<th>";
            echo "Surname";
            echo "</th>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>";
            echo $r['Name'];
            echo "</th>";
            echo "<th>";
            echo $r['Surname'];
            echo "</th>";  
            echo "</tr>";

        }
    }
}
?>