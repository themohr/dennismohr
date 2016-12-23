<?php
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
<title>Website Development, Design, &amp; Marketing<?php echo $pageDefs->title; ?></title>
<link href="site-styles/main.css" rel="stylesheet" type="text/css">
</head>

<body id="body_<?php echo $pageDefs->uri; ?>">
<div id="container">
	<div id="primary_nav">
        <ul>
        	<li id="primary_nav_home"><a href="/dennismohr">Home</a></li>
            <li id="primary_nav_work"><a href="index.php?url=work">Work</a></li>
            <li id="primary_nav_service"><a href="index.php?url=service">Services</a></li>
            <li id="primary_nav_contact"><a href="index.php?url=contact">Contact</a></li>
        </ul>
    </div><!-- end: primary_nav" -->
	<div id="masthead">
        <div id="logo"><img src="images/logo.png" width="116" height="89" alt="DM Logo">
        </div><!-- end: logo -->
        
        <div id="showcase">
        	<div id="tabs">
                <ul>
                    <li class="selected">Digital Marketing</li>
                    <li>Application Development</li>
                    <li>Graphic Design</li>
                </ul>
            </div><!-- end: tabs -->
        <br style="clear: both;">
        	<div class="box digmar">
                <h5>Digital Marketing</h5>
                <ul>
                    <li>
                        <img src="images/services/sem.png" width="254" height="138" alt="Search Engine and Social Media marketing">
                    </li>
                </ul>
            </div>
            <div class="box devdes">
              <h5>Development</h5>
                <ul>
                	<li>
		                <img src="images/services/develop.png" width="254" height="138" alt="Web development and media services">
                    </li>
                </ul>
            </div>
            <div class="box wricon">
            	<h5>Design</h5>
            	<ul>
                	<li>
		                <img src="images/services/design/bw-small.png" width="205" height="138" alt="Graphic Design">
                    </li>
                </ul>
            </div>
            <br style="clear: both;">
        </div><!-- end: showcase -->
	</div><!-- end: masthead -->
    <div id="content">
    	<div id="main_content">
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
        </div><!-- end: main_content -->
        <div id="secondary_content">
            <h2>Network</h2>
            <div id="feeds">
                <h3>Feed Headline 1</h3>
                <ul>
                	<li>Headline summary in (n) characters for most recent headline...<a href="">MORE</a></li>
                </ul>
                <h3>Feed Headline 2</h3>
                <ul>
                	<li>Headline summary in (n) characters for most recent headline...<a href="">MORE</a></li>
                </ul>
            </div><!-- feeds -->
            <div id="socmed">
            <img src="images/socmed/blog.png" width="79" height="60" alt="Dennis Mohr design blog">
            <br>
			<img src="images/socmed/Linkedin.png" width="79" height="60" alt="Linkedin social media page">
            <br>
			<img src="images/socmed/facebook.png" width="79" height="60" alt="Facebook">
            </div><!-- end: socmed -->
        </div><!-- end: secondary_content -->
        <br style="clear: both;">
    </div><!-- end: content -->
</div><!-- end: container -->
<div id="footer">
    	<div id="footer_contain">
        	<div class="footer_links">
            	<ul>
                	<li class="mainCat">Site Links</li>
                    <li><a href="">Work</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Home</a></li>
            	</ul>
            </div>
            <div class="footer_links middle">
            	<ul>
                	<li class="mainCat">Social Network</li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Linkedin</a></li>
                </ul>
            </div><!-- end: footer_links -->
        	<div class="footer_links">
                <ul>
                    <li class="mainCat">&copy; 2013</li>
                </ul>
            	<div id="footer_logo">
                	<img src="images/logo.png" width="116" height="89" alt="DM Studio, Design, Web Development, logo">
                </div>
            </div><!-- end: footer_links -->
            <br style="clear: both;">
        </div><!-- end: footer_contain -->
    </div><!-- end: footer -->
</body>
</html>
