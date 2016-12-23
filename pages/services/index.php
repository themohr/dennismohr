<?php /* index.php - main directory file */
    // Configure page to display content dynamically
    $pageDefs->directory = scandir(substr($pageDefs->content,0,-10));
	
	$links = array();
    // Secondary Nav
    foreach($pageDefs->directory as $files => $file){
		//echo '<li>' . strpos($file,'.') . '</li>';
		if(substr($file,-9) !== 'index.php' && strpos($file,'.') !== 0){
			$links[] = $file;
			//echo '<li><a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $file . '">Find out more...</a></li>';
        }
    }
			
?>
<div id="content" class="section section-top section-gradient">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <div class="content-primary">
	                    <h1>Services</h1>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-8">
                    <div class="content-secondary">
                    <a name="<?php echo $links[0] ;?>"></a>
                    <h2>Front End Development</h2>
                    <p>Modern Websites must be available on a multitude of devices. It's no longer sustainable to allow your Website to display the same way on a mobile device as it does on a desktop.</p>
                    <div class="content-secondary-link content-secondary-border"><?php echo '<a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $links[0] . '">Explore solutions &raquo;</a>'; ?></div>
                    <h2>Back End Application Development</h2>
                    <p>Content managment systems (CMS) utilize various technologies to integrate content from data stores.  Performance and cost effectiveness are integral to ensureing your customers get the right information.</p>
                    <div class="content-secondary-link content-secondary-border"><?php echo '<a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $links[0] . '">Learn about delivery &raquo;</a>'; ?></div>
                    <h2>Databases &amp; Repositories</h2>
                    <p>Database technologies are still highly relevant for maintaining business information.  Other solutions in the market include XML and simple file formats to allow for flexibility.</p>
                    <div class="content-secondary-link content-secondary-border"><?php echo '<a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $links[0] . '">Data considerations &raquo;</a>'; ?></div>
                    <h2>Servers &amp; Hosting</h2>
                    <p>Website content requires a combination of rich information and fast delivery.  Hosting options depend on how substantial your application is and how to scale for the grow requirements of you customers.</p>
                    <div class="content-secondary-link"><?php echo '<a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $links[0] . '">Hosting details &raquo;</a>'; ?></div>
                    </div>
                </div>
                <div id="nav-sub" class="col-md-4">
                	<div id="affix-element">
                	 <h3>Details</h3>
                     <ul>
                     	<?php
                            echo '<li><a href="#' . $links[0] . '">' . $links[0] . '</a></li>';
						?>
                     </ul>
                     </div>
                </div>
            </div>
        </div>
</div>