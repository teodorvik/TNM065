<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
    xmlns="http://www.w3.org/1999/xhtml">
<xsl:output indent="yes" encoding="UTF-8" />
<xsl:template match="data">
    <html>
        <head>
        	<meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'/>
            <link rel="stylesheet" type="text/css" href="../css/style_mobile.css"> </link>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        </head>
            
        <body>
            <h1>Edit</h1>
            <div class="wrapper">
	            <div class="form">
	                <form method="post" action="../dbquery/update.php">
	                    <!-- Title -->
	                    <input type="text" name="title" placeholder="Title" value="<?php echo $_POST['title'] ?>"/>
                        
	                   	<!-- Year -->
	                    <input type="text" name="year" placeholder="Release year" value="<?php echo $_POST['year'] ?>"/>
	        
	                   	<!-- Review -->
	                    <input type="text" name="review" placeholder="Your review" value="<?php echo $_POST['review'] ?>"/>
	                   
	                   	<!-- Genre -->
	                    <input type="text" name="genre" placeholder="Genre" value="<?php echo $_POST['genre'] ?>"/>
	                   
	                    <!-- Publish_date -->
	                    <input type="hidden" name="publish_date" value="<?php echo $_POST['publish_date'] ?>"/>
						
						<!-- movie_id -->
	                    <input type="hidden" name="movie_id" value="<?php echo $_POST['movie_id'] ?>"/>

	                    <input class="btn-big" type="submit" name="btn_sub" value="Save changes"></input>
	                </form>
	            </div>
	        </div>
        </body>
    </html>

</xsl:template>
</xsl:stylesheet>