<?php

include("connection.php");

if(isset($_POST["submit"])) {
    
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass1 = $_POST["pass1"];
    
    if($pass==$pass1){
        
$insert="INSERT INTO `dothis`(`id`, `uname`, `email`, `pass`) VALUES ('NULL','$uname','$email','$pass')";
    
    $insert_query = mysqli_query($con , $insert);
    
    if($insert_query){
        
        echo"successfully inserted";
        
    }
    
    else{
        
        echo "mysqli_error($con)";
        
    }
   
    }




else{
    
    echo "password do not match";
}
    
}



?>