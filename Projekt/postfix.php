<?php 
	//put XML content in a string
	$xmlstr=ob_get_contents();
	ob_end_clean();
	
	// Load the XML string into a DOMDocument
	$xml = new DOMDocument;
	$xml->loadXML($xmlstr);
	
	// Make a DOMDocument for the XSL stylesheet
	$xsl = new DOMDocument;
	
	// See which user agent is connecting
 	$UA = getenv('HTTP_USER_AGENT');
    if (preg_match('/iPhone/i', $UA)) 
    {
        header("Content-type:text/html;charset=utf-8");
        $xsl->load('view/main_mobile.xsl');
    } else {
        header("Content-type:text/html;charset=utf-8");
        $xsl->load('view/main_desktop.xsl');
    }
	
	// Make the transformation and print the result
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); // attach the xsl rules
	echo utf8_decode($proc->transformToXML($xml));
	?>

