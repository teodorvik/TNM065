<?php include 'prefix.php';?>

<data>
  
 <?php  
    $host ="tv-195283.mysql.binero.se";
    $username = "195283_gm88388";
    $password = "teo4ever";
    $name = "195283-tv";

    $link = @mysql_connect($host, $username, $password) or die("Could not connect");
    mysql_select_db($name) or die("Could not select database");
    $returnstring ="";
    
    $query = "SELECT * FROM movies ORDER BY publish_date DESC";
         
    $result = @mysql_query($query) or die("Query failed");
        
    while ($line = mysql_fetch_object($result)) {
		$movie_id = $line->movie_id; 
        $title = $line->title; 
        $year = $line->year;
        $review = $line->review;
        $genre = $line->genre;
        $publish_date = $line->publish_date;
        
        $title = preg_replace("/&/","&amp;", $title);
        $description = preg_replace("/&/","&amp;", $description);
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
    
    print utf8_encode($returnstring); 
    ?>

</data>
<?php include 'postfix.php';?>
