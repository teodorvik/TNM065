<?php  
   
    $host ="tv-195283.mysql.binero.se";
    $username = "195283_gm88388";
    $password = "teo4ever";
    $name = "195283-tv";

    // $link = mysqli_connect($host, $username, $password) or die("Could not connect");
    // mysql_select_db($name) or die("Could not select database");
    
    $link = mysqli_connect($host, $username, $password, $name) or die ("Connection fail!");

    $movie_id = $_POST["movie_id"];
    
    $query = "DELETE FROM  movies WHERE  movie_id = $movie_id";

    $result = mysqli_query($link, $query) or die("Query failed");
    
    header("Location: ../index.php");
    $link->close();
?>