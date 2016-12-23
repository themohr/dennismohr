<?php // rssfeed.php
/*
* Dennis Mohr
* Load XML document from blog site
* Prepare for display on Web site
* Currently only used for individual XML file
*/
$xmlfeed = 'http://dmmohr.wordpress.com/feed/';

$xmldoc = new DOMDocument();
$xmldoc->load($xmlfeed);

if($xmldoc !== ''){
	
	$channel = $xmldoc->getElementsByTagName('channel')->item(0);
	$channel_title = $channel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

//get and output "<item>" elements
$x=$xmldoc->getElementsByTagName('item');
for ($i=0; $i<=2; $i++)
  {
  $item_title=$x->item($i)->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue;

  echo ("<p><strong><a href='" . $item_link . "'>" . $item_title . "</a></strong>");
  echo ("<br>");
  echo substr($item_desc, 0, strpos($item_desc, '.') + 1) . '"<a href="' . $item_link . '"> &mdash; Read More...</a></p>';
  }
} else {
	echo "Feed not displaying";	
}
?>