<?php // Determine page selection and initialize content
@require_once('classes/class.PageDefinitions.inc');

$pageDefs = new PageDefinitions;

if( empty( $_GET['url'] ) ){

	$pageDefs->uri = 'home';
	$pageDefs->title = 'Home Page';
	
}else{
	
	$pageDefs->uri = $_GET['url'];
	$pageDefs->title = 'Define Titles';
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Dennis Mohr : Web Development, Digital Marketing & Graphic Design</title>

<link rel="stylesheet" type="text/css" href="site-styles/reset.css">
<link rel="stylesheet" type="text/css" href="site-styles/text.css">
<link rel="stylesheet" type="text/css" href="site-styles/960_12_col.css">
<link rel="stylesheet" type="text/css" href="site-styles/custom.css">
<link rel="stylesheet" type="text/css" href="site-styles/jquery-ui-1.10.2.custom.min.css">

<script src="site-scripts/jquery-min-1.9.js"></script>
<script src="site-scripts/jquery-ui-1.10.2.custom.min.js"></script>

<script>
    $(function() {
        $( "#tabs" ).tabs();
    });
</script>
</head>

<body id="body_<?php echo $pageDefs->uri; ?>">
<div id="container" class="container_12">
    <div id="primary_nav">
        <ul>
            <li id="primary_nav_home"><a href="main.php">Home</a></li>
            <li id="primary_nav_work"><a href="index.php?url=work">Work</a></li>
            <li id="primary_nav_service"><a href="index.php?url=service">Services</a></li>
            <li id="primary_nav_contact"><a href="index.php?url=contact">Contact</a></li>
        </ul>
        <div id="head_logo">
        	<img src="images/logo.png" width="80" height="48" alt="logo">
        </div>
     </div><!-- end:primary_nav -->
</div><!-- end:container -->
<div id="space">&nbsp;</div>
<div class="container_12">
    <div class="grid_7">
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Development</a></li>
                <li><a href="#tabs-2">Marketing</a></li>
                <li><a href="#tabs-3">Design</a></li>
            </ul>
        
            <div id="showcase">
                <div id="tabs-1" class="service"><img src="images/services/develop.png" width="254" height="138" alt="Web, mobile and smartphone development">Web, mobile and smartphone development
                </div><!-- end: tabs-1 -->
                <div id="tabs-2" class="service"><img src="images/services/sem.png" width="254" height="138" alt="Search Engine and Social Media Marketing">Search Engine and Social Media Marketing
                </div><!-- end: tabs-2 -->
                <div id="tabs-3" class="service"><img src="images/services/design.png" width="254" height="138" alt="Graphic Design">Graphic Design
                </div><!-- end: tabs-3 -->
            </div><!-- end: showcase -->
        </div><!-- end: tabs -->
    </div><!-- end: grid_7 -->
    <div class="grid_5">
        <div class="grid_5 alpha">
    	    <strong>Join me</strong>
        </div><!-- end: grid_5 alpha -->
        <div class="grid_2 alpha">
            Present RSS Feeds
        </div><!-- end: grid_2 alpha -->
        <div class="grid_2 omega">
            <img src="images/socmed/blog.png" width="79" height="60" alt="blog">
            <img src="images/socmed/facebook.png" width="79" height="60" alt="Facebook">
            <img src="images/socmed/Linkedin.png">
        </div><!-- end: grid_2 omega -->
    </div><!-- end: grid_5 -->
    <div class="container_12">
        <div class="grid_7">
            <h1>Drive traffic, engage visitors</h1>
            <p>
            Two overarching concepts determine the success of your Web marketing.  First, customers must find your Web site.  Second, they must quickly find reason to stay.
            </p>
            <p>
            The first step is accomplished through a multitude of channels including search engines, social media, email, and often through traditional media.  Each channel provides its own opportunities and challenges, we will help you understand how to navigate the terrain.
            </p>
            <p>
            Turning visitors into customers requires communicating effectively through design, usability and the medium.  Web sites present challenges in today's media because devices vary in size and shape.  We employ appropriate methods of progressive enhancement, device detection and sometimes combine those methods to deliver your message to customers.
            </p>
        </div>
    </div>
</div><!-- end: container_12 -->
<div id="footer">
	<div class="container_12">
    	<div class="grid_4 footer_links">
            <ul>
                <li class="mainCat">Site Links</li>
                <li><a href="">Work</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="grid_4 footer_links middle">
            <ul>
                <li class="mainCat">Social Network</li>
                <li><a href="">Blog</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Linkedin</a></li>
            </ul>
        </div>
        <div class="grid_4 footer_links">
            <ul>
                <li class="mainCat">&copy; 2013</li>
            </ul>
            <div id="footer_logo">
                <img src="images/logo.png" width="116" height="89" alt="DM Studio, Design, Web Development, logo">
            </div>
        </div>
    </div><!-- end: container_12 -->
</div><!-- end: footer -->
</body>
</html>