<?php /* index.php - main directory file */
	// Configure page to display content dynamically
	$pageDefs->directory = scandir(substr($pageDefs->content,0,-10));
?>
<div id="content" class="content section section-top">
    	<div class="container">
			<div class="row">
                <div class="col-md-8">
                     <h1>Work</h1>
                 	<p>My career developing Web applications includes custom automation, open source content management sytems (CMS) and enterprise CMS implementation.  It is imperative to consider the cost of ownership in light of return on investment to get the right solution.  As a full stack web developer I am capable of analyzing the entire application stack to ensure the right solution.</p>
                </div>
                <div class="col-md-4">
                	 <h3>Details</h3>
                     <ul>
                     	<li><a href="#">Download Resume</a></li>
                     <?php // Secondary Nav
					 	foreach($pageDefs->directory as $files => $file){
								//echo '<li>' . strpos($file,'.') . '</li>';
							if(substr($file,-9) !== 'index.php' && strpos($file,'.') !== 0){
								echo '<li><a href="'. $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . $file . '">' . strtoupper($file) . '</a></li>';
							}
						}
					 ?>
                     </ul>
                </div>
            </div>
        </div>
    </div>