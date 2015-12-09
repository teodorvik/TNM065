<?php  
    $host ="tv-195283.mysql.binero.se";
    $username = "195283_gm88388";
    $password = "teo4ever";
    $name = "195283-tv";
    $link = mysqli_connect($host, $username, $password, $name) or die ("Connection fail!");
    
    $query = "SELECT * FROM movies ORDER BY publish_date DESC";
    
    $result = mysqli_query($link, $query) or die("Query failed");

    $returnstring = '<?xml version="1.0"?>';
    $returnstring = $returnstring . '<!DOCTYPE movies SYSTEM "http://annaflisberg.se/dev/tv/project/movies.dtd">';
    $returnstring = $returnstring . "<movies>";
        
    while ($line = mysqli_fetch_object($result)) {
        $movie_id = $line->movie_id; 
        $title = $line->title; 
        $year = $line->year;
        $review = $line->review;
        $genre = $line->genre;
        $publish_date = $line->publish_date;
        
        $title = preg_replace("/&/","&amp;", $title);
        $publish_date = date("c",strtotime($publish_date));

        $returnstring = $returnstring . "<movie>";
        $returnstring = $returnstring . "<movie_id>$movie_id</movie_id>";
        $returnstring = $returnstring . "<title>$title</title>";
        $returnstring = $returnstring . "<year>$year</year>";
        $returnstring = $returnstring . "<review>$review</review>";
        $returnstring = $returnstring . "<genre>$genre</genre>";
        $returnstring = $returnstring . "<publish_date>$publish_date</publish_date>"; 
        $returnstring = $returnstring . "</movie>"; 
    }

    // skrivs ut.
    $returnstring = $returnstring . "</movies>";
    header('Content-Disposition: attachment; filename="moviedatabase.xml"');
    echo $returnstring; 
?>