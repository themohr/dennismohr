<?php // Determine page selection and initialize content
@require_once('classes/class.PageDefinitions.inc');
@require_once('classes/class.Calendar.inc');

$pageDefs = new PageDefinitions;

if( empty( $_GET['url'] ) ){

	$pageDefs->uri = 'home';
	$pageDefs->title = 'Home Page';
	$pageDefs->content = file_get_contents('content/home.php');
	
}elseif( file_exists('content/' . $_GET['url'] . '.php')){
	$pageDefs->uri = $_GET['url'];
	$pageDefs->content = file_get_contents('content/' . $pageDefs->uri .'.php');
	switch($_GET['url']){

		case 'html':
			$pageDefs->title = 'HTML Web Page Presentation';
			
		break;
		
		case 'css':
			$pageDefs->title = 'CSS Web Page Design';
			
		break;
		
		case 'javascript':
			$pageDefs->title = 'Javascript Web Page Behavior (Browser Scripting)';
		break;
		
		case 'serverside':
			$pageDefs->title = "Server side Web content delivery";
		break;
		
		case 'about':
		    $pageDefs->title = "About DM Studio";
		break;
		
		default:
			$pageDefs->title = 'Home';
	}
} elseif( $pageDefs->uri == 'contact'){
	$pageDefs->title = "Contact, send me a line";
	$pageDefs->content = include('content/' . $pageDefs->uri . '.php');
} elseif( $pageDefs->article ){
	
	// Display content from DB

} else {
	$pageDefs->title = "Sorry, we returned an error";
	$pageDefs->content = "Yo, it appears there's been a mistake. We'll throw this server away and get a new one.";	
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Web Development, Digital Marketing & Graphic Design <?php echo $pageDefs->title; ?></title>

<link rel="stylesheet" type="text/css" href="site-styles/reset.css">
<link rel="stylesheet" type="text/css" href="site-styles/960_12_col.css">
<link rel="stylesheet" type="text/css" href="site-styles/modules.css">

<script src="site-scripts/jquery-min-1.9.js"></script>
<script src="site-scripts/jquery-ui-1.10.2.custom.min.js"></script>
<script src="site-scripts/init.js"></script>
<script src="site-scripts/rssfeed.js"></script>

</head>

<body id="body_<?php echo $pageDefs->uri; ?>">
<div class="fullwidth-fixed header">
    <div id="container" class="container_12">
        <div id="primary_nav" class="list-horizontal list-horizontal_main">
            <ul>
                <li id="primary_nav_home"><a href="/dennismohr">Home</a></li>
                <li id="primary_nav_html"><a href="index.php?url=html">HTML</a></li>
                <li id="primary_nav_css"><a href="index.php?url=css">CSS</a></li>
                <li id="primary_nav_javascript"><a href="index.php?url=javascript">JavaScript</a></li>
                <li id="primary_nav_serverside"><a href="index.php?url=serverside">Server Side</a></li>
                <li id="logo-head"><img class="logo marT-10" src="images/logo.png" width="80" height="48" alt="logo"></li>
            </ul>
         </div><!-- end:primary_nav -->
    </div><!-- end:container -->
</div><!-- end:fullwidth -->
<div class="clearfix">&nbsp;</div>
<div class="container_12 marT-70">
    <div class="grid_7">
        <div id="promo" class="main-content">
        	<?php
			    if( $pageDefs->uri == "contact" ){
					if($_POST){
						
						echo '<h1>Process Form</h1>';
						
						echo '<pre>';
						print_r($_POST);
						echo '</pre>';
						
						echo '<ul>';
						foreach($_POST as $formItem => $input){
							echo '<li><strong>' . $formItem . '</strong>';
							echo '<ul>';
							
							echo '<li>Is set: ' . isset($input) . '</li>';
							echo '<li>Empty: ' . empty($input) . '</li>';
							echo '<li>Number: ' . is_numeric($input) . '</li>';
						    echo '<li>VALUE : ' . $input . '</li>';
							echo '</ul>';
							echo '</li>';
						}
						echo '</ul>';
						
					} else {
						
						if(substr($_SERVER['HTTP_HOST'],0,9) == "localhost"){
					?>
                    <h1>Local Contact Form - Bypass Browser Validation</h1>
                        <div id="formError"></div>
                        <form id="contact" name="contact" action="" method="post">
                            <ul class="form-group">
                                <li><label for="name">Name:</label><input type="text" placeholder="Full Name" id="name" name="name" /></li>
                                <li><label for="email">Email:</label><input type="text" id="email" name="email" /></li>
                                <li><label for="phone">Phone:</label><input type="text" placeholder="###-###-####" id="phone" name="phone"></li>
                                <li><label for="message">Message:</label><textarea name="message"></textarea></li>
                                <li><div id="btn_form"><input type="submit" name="send" id="send" value="Send" /></div></li>
                            </ul>
                        </form>
					<?php	
						}else{
							echo $pageDefs->content;
						}
					}
				}else{
        			 echo $pageDefs->content;
             	}
				?>
        </div>
    </div><!-- end: grid_7 -->
    <div class="grid_5">
        
        <div class="grid_3 alpha">
            <h4>Syndicate</h4>
            <div id="feed">
            
            </div>
        </div><!-- end: grid_2 alpha -->
        <div class="grid_2 omega">
            <a href="http://dmmohr.wordpress.com"><img src="images/socmed/blog.png" width="79" height="60" alt="blog"></a>
            <img src="images/socmed/facebook.png" width="79" height="60" alt="Facebook">
            <img src="images/socmed/Linkedin.png">
        </div><!-- end: grid_2 omega -->
        
    </div><!-- end: grid_5 -->
</div><!-- end: container_12 -->
<div class="container_12">
	<div class="grid_12">
    <h4>Test Calendar:</h4>
    <div>
    	<?php
		    $calDefs = new Calendar;
			
			$calDefs->monthName = date('F');
			$calDefs->nextMonth = date('F',mktime(0,0,0,date('n')+1,1,2014));
			$calDefs->prevMonth = date('F',mktime(0,0,0,date('n')-1,1,2014));
			$calDefs->firstDay = date('l',mktime(0,0,0,date('n'),1,2014));
			$calDefs->daysMonth = "31";
			
			echo "This month: " . $calDefs->monthName . "<br>";
			echo "What month: " . $calDefs->nextMonth . "<br>";
			echo $calDefs->prevMonth . "<br>";
			echo $calDefs->firstDay . "<br>";
			echo $calDefs->daysMonth . "<br>";
		?>
    </div>
    <h4>From around the Web</h4>
    <ul>
    	<li><a href="http://www.smacss.com">SMACSS</a></li>
        <li><a href="http://www.smashingmagazine.com">Smashing Magazine</a></li>
    </ul>
    </div>
</div>
<div id="footer" class="fullwidth footer">
	<div class="container_12">
    	<div class="grid_4 list-vertical list-vertical_footer">
            <ul>
                <li class="footer_mainCat">Site Links</li>
                <li id="footer_nav_html"><a href="index.php?url=html">HTML</a></li>
                <li id="footer_nav_css"><a href="index.php?url=css">CSS</a></li>
                <li id="footer_nav_javascript"><a href="index.php?url=javascript">JavaScript</a></li>
                <li id="footer_nav_serverside"><a href="index.php?url=serverside">Server Side</a></li>
                <li id="footer_nav_home"><a href="/dennismohr">Home</a></li>
            </ul>
        </div>
        <div class="grid_4 list-vertical list-vertical_footer marLR-5">
            <ul>
                <li class="footer_mainCat">Social Network</li>
                <li class="top"><a href="http://dmmohr.wordpress.com">Blog</a></li>
                <li><a href="">Facebook</a></li>
                <li class="bottom"><a href="">Linkedin</a></li>
            </ul>
        </div>
        <div class="grid_4 list-vertical list-vertical_footer">
            <ul>
                <li class="footer_mainCat">&copy; 2013</li>
                <li><a href="index.php?url=contact">Contact</a></li>
                <li><a href="index.php?url=about">About</a></li>
            </ul>
            <div id="footer_logo">
                <img src="images/logo.png" width="116" height="89" class="logo opaque-40" alt="DM Studio, Design, Web Development, logo">
            </div>
        </div>
    </div><!-- end: container_12 -->
</div><!-- end: footer -->
<script>
	var footer = document.getElementById('footer');
	
	var windowHeight = window.innerHeight;

	if(windowHeight > footer.offsetTop + footer.clientHeight){
		footer.style.position = "fixed";
		footer.style.bottom = "0";
		//console.log("Fix the footer to the bottom ");
	}
	else
	{
	
		console.log("Normal position footer " + window.innerHeight);
	}
</script>
</body>
</html>