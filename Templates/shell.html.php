<?php /* index.php - controller file for implementing site pages */
	// Require page definitions class and other dependancies
	require_once('classes/class.PageDefinitions.inc');

	// Initialize page variables	
	$pageDefs = new PageDefinitions;
	$pageDefs->activepage = '';
	$pageDefs->content = 'pages/';
	
	$lnNum = '';
	
	if($_SERVER['QUERY_STRING'] != ''){
		$lnNum = "12";
		$pageDefs->activepage = substr($_SERVER['QUERY_STRING'],4);
		$pageDefs->content .= $pageDefs->activepage . '/index.php';
		if(strpos($_SERVER['QUERY_STRING'],'&') !== 0){
			$lnNum = "15";
			// Replace the (&) with (/)
			$pageDefs->activepage = substr($_SERVER['QUERY_STRING'],4);
			$pageDefs->content = str_replace('&','/',$pageDefs->content);
		}
	} else {
		$lnNum = "21";
		$pageDefs->activepage = 'home.php';
		$pageDefs->content .= $pageDefs->activepage;
	}

?>
<!DOCTYPE html>
<html>
	<?php include('Templates/includes/headlibs.html.php'); ?>
    <body class="body<?php echo ' body-' . $pageDefs->activepage; ?>">
    <?php include('Templates/includes/doc_head.html.php'); ?>
    <?php
		if(file_exists($pageDefs->content)){
			include( $pageDefs->content );
		} else {
	?>
    <div id="content" class="content section">
    	<div class="container">
        	<div class="row">
	            <div class="col-md-12">
                	<h1>Resource not found</h1>
                    <p><?php echo str_replace('&','/',$pageDefs->content);?> - It appears that the resource you requested either doesn't exist, or the link you clicked contains an error.</p>
                    <p>NOTE: consider logging this error</p>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-12">
                	<h1>Site Info - Testing only, DO NOT PUBLISH!!!</h1>
                    <?php echo $lnNum; ?>
                    <pre>
					<?php print_r($_SERVER) ?>
                    </pre>
                </div>
            </div>
        </div>
    </div>
    <?php	
		}
	?>
    <?php include('Templates/includes/doc_foot.html.php'); ?>
    <script src="_js/site/site-profile.js"></script>
    </body>
</html>