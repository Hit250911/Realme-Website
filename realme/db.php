<?php
    
    $servername='localhost';
    $username='root';
    $password='';
    $database='LoginSystem2';
    
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        echo"not connected";
    }
    

?>