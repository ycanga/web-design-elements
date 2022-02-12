<?php // veri tabanı bağlantısı
 	error_reporting(0);
 	$host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) 
    {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
     $sql = "select * from admin where admin_username = '$username' and admin_password = '$password'";

?>
