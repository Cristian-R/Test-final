
    <link type='text/css' rel='stylesheet' href='controller/read-post.css'>


<?php

    require_once(__DIR__ ."/../model/config.php");
    
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
   

    if ($result){
       
        
        while($row = mysqli_fetch_array($result)){
            //this is what reads pposts on my website
            echo "<div class='post'>";
            //modified it because that guy julian i think put <echo "<p>" . $row['post'] . "</h1>";> making css not work on the posts i also fixed some peoples like that 
            echo "<h1>" . $row['title'] . "</h1>";         
            echo "<br />";
            echo "<h2>" . $row['post'] . "</h2>";
            //this reads posts
            echo "<br/>";
            echo "</div>";
        }
    }
