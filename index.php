<?php
	session_start();
	include 'page/menu.php';
	if (isset($_REQUEST['page']))
	{
		$page=$_REQUEST['page'];
		include (dirname(__FILE__)."/control/".$page.".php");
	}
    else
    {
		include 'page/accueil.php';
    }
	include 'page/pied.php';
?>	