<html>

<head>
    
<title>login form</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
<link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.css">
    
<link href="style1.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    
 <div class="container">
        
<div class="row d-flex justify-content-center first">
    
    <div class="col-md-10">

    
    <h3>Login form</h3>
        
     <form action="insertion.php" method="POST"> 
    
 <div class="form-group row">
    <label for="inputuser" class="col-sm-2 col-form-label"><i class="fa fa-user"></i></label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="user" name="uname" placeholder="user/email">
    </div>
  </div>
    
      
    <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label"><i class="fa fa-key"></i></label>
    <div class="col-md-10">
      <input type="password" class="form-control" id="password" name="pass" placeholder="password">
    </div>
  </div>
    
         <button type="login" name="login"> login </button>   
         

        </form>
    </div>
    
    <div class="col-md-4">
    
    
    </div>

     </div>
         
    
    
    </div>
    
    </body>
</html>
    