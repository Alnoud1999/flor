<?php

require_once ("conect.php");

if(isset($_POST['btn'])){

    $UserName = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);
    
    
    if(empty($UserName)|| empty($password|| empty($cpassword))){
        
        echo 'Please Fill in the Blanks';
    }
       if($password!=$cpassword){
    
        echo'password Not matched';
    }
    
    else
    {
       $pass = md5($password);
       $sql="insert into usr (usarnam,password) values('$UserName','$pass')";
       $result = mysqli_query($con,$sql);
    
       if($result){
    
        echo'your Record has Been savd in the Databse';
       }

       else{
        echo 'please chec your Query';
       }
    }
}

?>