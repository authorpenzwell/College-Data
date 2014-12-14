<?php
	include ('autoloader.php'); //include the autoloader page
	$pageType = $_GET['pageType'];
	$class = "classes\\pages\\{$pageType}";
	if(empty($_GET)) {
		$home = new classes\pages\Main;
	} else {
		$home = new $class;
	}
?> 