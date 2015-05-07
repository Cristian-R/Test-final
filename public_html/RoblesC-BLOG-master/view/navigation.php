<?php
    require_once(__DIR__ ."/../model/config.php");
     require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        ?><!--This is to make sure the user is first signed in--><?php
        die();
    } 
    
  
?>
<nav>
    <ul>
        <li><a class="btn btn-primary btn-md" href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
    <!--this makes both links post.php and logout-user.php visible only once the user has been signed in-->
    <ul>
        <li><a class="btn btn-primary btn-md" href="<?php echo $path . "controller/logout-user.php"?>">Logout</a></li>
    </ul>
</nav>
