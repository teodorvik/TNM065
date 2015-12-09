<?php  

    $host ="tv-195283.mysql.binero.se";
    $username = "195283_gm88388";
    $password = "teo4ever";
    $name = "195283-tv";

    // $link = mysqli_connect($host, $username, $password, $name) or die ("Connection fail!");
    $link = new mysqli($host, $username, $password, $name);
    // mysqli_set_charset($link,"utf8");

    $title = $_POST["title"];
    $year = $_POST["year"];
    $review = $_POST["review"];
    $genre = $_POST["genre"];
    $publish_date = date("c");

    $title = utf8_encode($title);
    $review = utf8_encode($review);
    $genre = utf8_encode($genre);

    // $utfquery = "SET NAMES utf8";
    $query = "INSERT INTO movies (title, year, review, genre, publish_date) VALUES ('$title', $year, '$review', '$genre', '$publish_date')";
 
    // $result = mysqli_query($link, $utfquery) or die("Query failed");
    $result = mysqli_query($link, $query) or die("Query failed");
    
    header("Location: ../index.php");
    $link->close();
?>