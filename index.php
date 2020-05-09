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
    	$page=$_REQUEST["page"]="control";
    	$_REQUEST["param"]="Accueil";
    	include (dirname(__FILE__)."/control/".$page.".php");
    }
	include 'page/pied.php';
?>	