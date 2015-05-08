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
					include '#';
					break;
				Case '2':
					include '#';
					break;
				Case '3':
					include '#';
					break;
				Case '4':
					include '#';
					break;
				Case '5':
					include '#';
					break;
				Case '6':
					include '#';
					break;
				//---SidebarL-----------------------------------------//
				Case '7':
					include '#';
					break;
				Case '8':
					include '#';
					break;
				Case '9':
					include '#';
					break;
				//---SidebarR-----------------------------------------//	
				Case '10':
					include '#';
					break;
				Case '11':
					include '#';
					break;
				Case '12':
					include '#';
					break;

			}
		?>
		
	</div>
	
	<div id="footer">
		<img src="logo.png" alt="logo">
	</div>
