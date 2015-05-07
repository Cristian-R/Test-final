<?php

    require_once(__DIR__ . "/../model/config.php");
    
?>
<div class="container"> 
    <!--jumbotron -->
    <div class="jumbotron">

        <h1>Hello, Welcome to my blog...Please register!!!</h1>

        <div class="navbar navbar-inverse" role="group" aria-label="...">
            <!--links below with bootstrap-->
            <a class="btn btn-primary btn-md" type="button" href="index.php" class="btn btn-default">Home page</a>
            <a class="btn btn-primary btn-md" type="button" href="login.php" class="btn btn-default">Login</a>
            <a class="btn btn-primary btn-md" type="button" href="register.php" class="btn btn-default">Register</a>

        </div>
    </div>
</div>

<h1>Register</h1>

<form class="navbar-form navbar-left" method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    
    <div>
        <label for="email">Email: </label>
        <!--this is the form to submit information that you want to send to the database-->
        <input type="text" class="form-control" type="text" name="email" />          
    </div>
       
    <div>
        <label for="username">Username: </label>
        <!--where you put your username in when you are regestering-->
        <input  class="form-control"  type="text" name="username" />
    </div>
    
    <div>
         <label for="password">Password: </label>
         <!--where you input your password-->
         <input class="form-control"  type="password" name="password" />
    </div>
   
    <div>
        <button class="btn btn-default" type="submit">Submit</button>
        <!--SUBMIT!!!-->
    </div>
    
</form>



