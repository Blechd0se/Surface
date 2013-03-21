<?php
/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */

defined('_JEXEC') or die;

// Funktionen:

// IE6 Kontrolle:
	function detect_ie()
	{
		if (isset($_SERVER['HTTP_USER_AGENT']) && 
		(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 8') !== false))
			return true;
		elseif (isset($_SERVER['HTTP_USER_AGENT']) && 
		(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7') !== false)) 
			return true;	
		elseif (isset($_SERVER['HTTP_USER_AGENT']) && 
		(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6') !== false)) 
			return true;	
		else
			return false;
	}
	
	
// Browserweiche für Android / iOS:
// ToDo: Unterschied zwischen iOS und Android nötig?

	function detect_mobil()
	{
		if (isset($_SERVER['HTTP_USER_AGENT']) && 
			(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false))
				return true;
		elseif (isset($_SERVER['HTTP_USER_AGENT']) && 
			(strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false))
				return true;
		else
				return false;
	}
	
// Mootools:

   function mootools( $headerstuff )
   {
	   // Neues Mootools abschalten:
	   
	$scripts = $headerstuff['scripts'];
 	$headerstuff['scripts'] = array();
	foreach($scripts as $url=>$type) {
		if (strpos($url, 'mootools') === false) {
			$headerstuff['scripts'][$url] = $type;        
		}
	}
   }
   
// Timer-Funktion:   

   function startTime(){

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];

    return $time;

	}

	function endTime($timer){

    $timeExplode = explode(" ", microtime());
    $time = $timeExplode[1] + $timeExplode[0];
    $finish = $time - $timer;
    $endTime = sprintf("%5.3f", $finish);

    return $endTime;

	}

	