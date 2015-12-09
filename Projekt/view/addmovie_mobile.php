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
        </head>
            
        <body>
            <h1>New</h1>
            <div class="wrapper">
	            <div class="form">
	                <form method="post" action="../dbquery/create.php" >
	                    <!-- Title -->
	                    <input type="text" name="title" placeholder="Title"></input>
	                   	
	                   	<!-- Year -->
	                    <input type="text" name="year" placeholder="Release year"></input>
	                   
	                   	<!-- Review -->
	                    <input type="text" name="review" placeholder="Your review"></input>
	                   
	                   	<!-- Genre -->
	                    <input type="text" name="genre" placeholder="Genre"></input>
	                   
	                    <!-- Publish_date -->
	                    <input type="hidden" name="publish_date"></input>

	                    <input class="btn-big" type="submit" name="btn_sub" value="Save movie"></input>
	                </form>
	            </div>
	        </div>
        </body>
    </html>

</xsl:template>
</xsl:stylesheet>