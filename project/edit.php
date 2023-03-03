<?php

include ("connection.php");

$id=$_GET['editid'];

echo $id;

$select=mysqli_query($con,"SELECT * FROM dothis WHERE id='$id'");


while($row=mysqli_fetch_array($select)) {
    
    $id=$row['id'];
    $uname=$row['uname'];
    $email=$row['email'];
    $pass=$row['pass'];
    
}
?>


<html>
<head>
    <title>dothis</title>
<body>
    
   <form action="register.php?editid=<?php echo $id ?>" method="POST">
     
<p><label>uname:</label><input type="text" name="uname" placeholder="uname" value="<?php echo $uname?>"></p> 
       
<p><label>email:</label><input type="email" name="email" placeholder="email" value="<?php echo $email?>"></p>
       
<p><label>pass:</label><input type="text" name="pass" placeholder="pass" value="<?php echo $pass?>"></p>
       
<p><input type="submit" name="submit" name="submit" value="register"></p>
     
    </form> 
     
     
    </body>
    
    </head>

</html>