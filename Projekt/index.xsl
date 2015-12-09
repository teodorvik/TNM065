<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform" 
    xmlns="http://www.w3.org/1999/xhtml">
<xsl:output indent="yes" encoding="UTF-8"/>
<xsl:template match="data">
    <html>
        <head>
            <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'/>
            <link rel="stylesheet" type="text/css" href="css/style_desktop.css" />
            <script src="//code.jquery.com/jquery-1.11.3.min.js">//</script>
            <SCRIPT LANGUAGE="javascript" src="js/functions.js">//
    </SCRIPT>

        </head>
            
        <body>
            <h1>MOVIES!</h1>
            <div class="wrapper">

              <!-- BUTTON ADD MOVIE -->
              <button type="button" class="btn-add">
                <a href="addmovie.php">
                  <p>Add a movie</p>
                </a>
              </button>
              <p class="center">Click on a movie to show its review</p>
              <ul>
              <!-- SHOW ALL MOVIES --> 
              <xsl:for-each select="movie">
                  <li class="item" onclick="toggleClass(this)">
                    <div class="row">
                    <p>
                      <xsl:value-of select="title"/> (<xsl:value-of select="year"/>)
                    </p>  

                    <!-- UPDATE --> 
                    <form method="post" action="updatemovie.php">
                      <input class="btn-row" type="submit" name="btn-edit" value="Edit"></input>
                        
                      <input type="hidden" name="title" placeholder="Title">
                          <xsl:attribute name="value">
                              <xsl:value-of select="title"/>
                          </xsl:attribute>
                      </input>
                      
                      <input type="hidden" name="year" placeholder="Release year">
                          <xsl:attribute name="value">
                              <xsl:value-of select="year"/>
                          </xsl:attribute>
                      </input>
                     
                      <input type="hidden" name="review" placeholder="Your review">
                          <xsl:attribute name="value">
                              <xsl:value-of select="review"/>
                          </xsl:attribute>
                      </input>
                     
                      <input type="hidden" name="genre" placeholder="Genre">
                          <xsl:attribute name="value">
                              <xsl:value-of select="genre"/>
                          </xsl:attribute>
                      </input>
                     
                      <input type="hidden" name="publish_date">
                          <xsl:attribute name="value">
                              <xsl:value-of select="publish_date"/>
                          </xsl:attribute>
                      </input>

                      <input type="hidden" name="movie_id">
                          <xsl:attribute name="value">
                              <xsl:value-of select="movie_id"/>
                          </xsl:attribute>
                      </input>
                    </form> <!-- END UPDATE --> 

                    <!-- DELETE --> 
                    <form method="post" action="dbquery/delete.php">
                        <input class="btn-row" type="submit" name="btn-delete" value="Delete"></input>
                        <input type="hidden" name="movie_id">
                            <xsl:attribute name="value">
                                <xsl:value-of select="movie_id"/>
                            </xsl:attribute>
                        </input>
                    </form> <!-- END DELETE --> 
                    </div>
                    <div class="review hidden">
                      <p class="genre"><xsl:value-of select="review"/></p>
                      <p class="genre">Genre: <xsl:value-of select="genre"/></p>
                    </div>
                  </li>
              </xsl:for-each>
            </ul>

            <!-- BUTTON DOWNLOAD XML -->
            <button type="button" class="btn-add btn-xml">
              <a href="dbquery/download.php">
                <p>Download XML</p>
              </a>
            </button>

            </div>
        </body>
    </html>
</xsl:template>

</xsl:stylesheet>