<?php	
		//	ME SIDA
		//=============================
		//	Jonathan Niklasson
		//	This page is made to show that i can use hotplate and make a nice looking page.
		//  The basic index.html is just divided in footer and header and content is included
		// 	between depending on input.
		
		include_once('src/start_session.php');
			
		$page = array('id'=>"",'title'=>"");
		
		if (isset($_GET['id'])) {
		$page['id'] = $_GET['id'];		
		} elseif (isset($_SESSION['checking_source'])) {
			$page['id']="3";
		} else {
			$page['id']="1";
		}
		
		switch ($page['id']) {
		case "1":
		$page['title'] = "Om Mig";
		if (isset($_SESSION['checking_source'])): unset($_SESSION['checking_source']); endif;
		break;
		case "2":
		$page['title'] = "Redovisning";
		if (isset($_SESSION['checking_source'])): unset($_SESSION['checking_source']); endif;
		break;
		case "3":
		$page['title'] = "Källkod";
		if (!isset($_SESSION['checking_source'])): $_SESSION['checking_source']="set"; endif;
		break;		
		}

		include('incl/head.php');
		if ($page['id']=="3" or isset($_SESSION['checking_source'])): include('incl/source.php'); endif;
		if ($page['id']=="1"): include('incl/me.html'); endif;
		if ($page['id']=="2"): include('incl/redov.html'); endif;

		include('incl/foot.php');
?>