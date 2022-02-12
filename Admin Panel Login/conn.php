<?php
include('ayar.php');  
     
    $username = $_POST['name'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where admin_username = '$username' and admin_password = '$password'";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if ($username=="root") {
            $admin_var=1;
        }
        elseif($username=="admin"){
            $admin_var=2;
        }
        
        if($count == 1)
        {
                header("Location: social.php"); 
        } 
        else{  

            include('login.css');

            echo "<div class='notif notif--error'>
              <div class='notif__picto'></div>
              <div class='notif__text'>Giriş bilgileriniz yanlış. Lütfen bilgilerinizi kontrol ediniz!</div>
              <a href='../login/index.php'><button class='notif__button'>X</button></a>
            </div>"; 

        }     

?>