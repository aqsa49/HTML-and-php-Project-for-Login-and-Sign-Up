<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="Style.css">
<link rel="stylesheet" type="text/css"
 href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
    <h2>Registeration</h2>
<form action="login.php" method="post">

<div class="form-group">
<label for="username">Username:</label>
 <input type="text" name="username" class="form-control" require>
   

</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="emai" name="email" class="form-control" require> 
</div>


<div class="form-group">
<label for="password"> Password: </label>
        <input type="password" name="password" class="form-control" require>
   
</div>
<button type="submit" class="btn btn-primary">Sign Up</button>


</form>
 <p>
            Already Member? <a href="login.php">Log in</a>
        </p>
    </div>

    

    
   
</form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>