<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="" />
		<meta http-equiv="language" content="deutsch, de"/>
		<meta name="keywords" content=""/>
		<meta name="robots" content=""/>
		<meta name="author" content=""/>
		<meta name="page-topic" content=""/>
		<meta name="revisit-after" content="2 days"/>
		<meta name="expires" content="0"/>
		<meta name="robots" content="all" />
		<link rel="stylesheet" href="css/main.css" type="text/css" /> 
		<lang="de" />
	</head>
	
	<div id="header">
		CandC - Brogrammers
		<div id="header2">
			Webhosting, Webdesign, Gameserver
		</div>
	</div>
	<hr>
	<div id="navlist">
		<li>|<a href="index.php?seite=1"> Home </a>|</li>
		<li><a href="index.php?seite=2">Teamspeak Server </a>|</li>
		<li><a href="index.php?seite=3">Webhosting </a>|</li>
		<li><a href="index.php?seite=4">Webdesign </a>|</li>
		<li><a href="index.php?seite=5">Impressum </a>|</li>
		<li><a href="index.php?seite=6">Login </a>|</li>
				
	</div>
	<hr>
	<div id="sidebarL">
		<a href="index.php?seite=7"><li>Kategorie1</li></a>
		<a href="index.php?seite=8"><li>Kategorie2</li></a>
		<a href="index.php?seite=9"><li>Kategorie3</li></a>
	</div>
	<div id="sidebarR">
		<a href="index.php?seite=10"><li>Service1</li></a>
		<a href="index.php?seite=11"><li>Service2</li></a>
		<a href="index.php?seite=12"><li>Service3</li></a>
	</div>
	<div id="body">
		<?php 
			/**
			 * Fallunterscheidung Tamplate-Technik
			 */
		
			//aus der URL die angeforderte Seite extrahieren und in $page speichern
			$page = (isset($_GET['seite'])) ? $_GET['seite'] : 1;
		
			//teilweises ausgeben der angeforderten Seitennummer
			//echo $page;					
			switch($page) {

				default:
				//---navlist--------------------------------------//
				Case '1':
					include 'navlist/home.php';
					break;
				Case '2':
					include 'navlist/teamspeakServer.php';
					break;
				Case '3':
					include 'navlist/webhosting.php';
					break;
				Case '4':
					include 'navlist/webdesign.php';
					break;
				Case '5':
					include 'navlist/impressum.php';
					break;
				Case '6':
					include 'navlist/login.php';
					break;
				//---SidebarL-----------------------------------------//
				Case '7':
					include 'sidebarL/kat1.php';
					break;
				Case '8':
					include 'sidebarL/kat2.php';
					break;
				Case '9':
					include 'sidebarL/kat3.php';
					break;
				//---SidebarR-----------------------------------------//	
				Case '10':
					include 'sidebarR/service1.php';
					break;
				Case '11':
					include 'sidebarR/service2.php';
					break;
				Case '12':
					include 'sidebarR/service3.php';
					break;

			}
		?>
		
	</div>
	
	<div id="footer">
		<img src="logo.png" alt="logo">
	</div>
