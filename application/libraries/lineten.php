<?php
 
class lineten
{  
	
	// ------------------------------------------------------------------------
	
	/**
	 * lineten Class
	 *
	 * This class contains various functions 
	 *     
	 *                         
	 * @package		application
	 * @subpackage	Libraries
	 */
	
	
	/**
	 * Shows the selected option
	 *
	 * This function is used to show the selected
	 * option based on the user's selection.
	 *
	 * @return	void
	 */
	
	function _show_selected_option($links, $what, $newwindow = FALSE) {
	
		$class = "";
		$target = "";
		$parts = explode("/", $_SERVER['REQUEST_URI']);
		$navlink = "/";

		if (!is_array($links)) {
			$links = array($links);
		}
		if($newwindow){
			$target = "target='_blank'";
			$navlink = $links[0];
		} else{
			$navlink .= $links[0];
		}
		foreach ($links as $link) {
			if ($parts[1] == $link) {
				$class = "class='active'";	
				break;
			}
		}
	
		echo "<li {$class}><a href='{$navlink}' {$target}>{$what}</a></li>";
	
	}
     	  
}