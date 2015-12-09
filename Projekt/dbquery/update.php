<?php  

    $host ="tv-195283.mysql.binero.se";
    $username = "195283_gm88388";
    $password = "teo4ever";
    $name = "195283-tv";

    $link = mysqli_connect($host, $username, $password, $name) or die ("Connection fail!");
    
    $movie_id = $_POST["movie_id"];
    $title = $_POST["title"];
    $year = $_POST["year"];
    $review = $_POST["review"];
    $genre = $_POST["genre"];
        
    $title = utf8_decode($title);
    $review = utf8_decode($review);
    $genre = utf8_decode($genre);

    $title = utf8_encode($title);
    $review = utf8_encode($review);
    $genre = utf8_encode($genre);

    $query = "UPDATE movies SET title = '$title', year = '$year', review = '$review', genre = '$genre'
                WHERE movie_id = '$movie_id'";
    
    //echo "'$title', '$genre'";
    $result = mysqli_query($link, $query) or die("Query failed");
    
    header("Location: ../index.php");
    
    $link->close();
?>