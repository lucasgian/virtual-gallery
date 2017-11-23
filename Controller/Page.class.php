<?php
define('LAYOUT', 'View/Layout/');

/**
* 
*/
class Page
{
	
	public function getView($page)
	{
		self::redirect($page);
	}


	private function redirect($page)
	{
		switch ($page) 
		{
			case 'value':
				# code...
				break;
			
			default:
				require_once LAYOUT.'header.php';
				require_once LAYOUT.'library.php';
				require_once LAYOUT.'nav-bar.php';
				require_once LAYOUT.'content.php';
				require_once LAYOUT.'footer.php';
				break;
		}
	}
}
?>