<?php
    require_once(__DIR__ ."/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        //this is to make the page redirect once the form has been sent to the  database
        die();
    }  
?>

<h1>Create Blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title:</label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">Post:</label>
        <!--here is the form for the blog  post  form where our posts are sent to the database-->
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>   
</form>