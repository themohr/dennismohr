<?php
class PageDefinitions {
	public $uri;
	public $title;
	public $content;
	public $activepage;
	public $directory;
	
	function get_uri(){
	
		$pageDefs = '';
	
			$pageDefs .= $this->uri;
			$pageDefs .= $this->title;
			$pageDefs .= $this->activepage;
			$pageDefs .= $this->content;
			$pageDefs .= $this->directory;
		
		return $pageDefs;
	}
}
?>