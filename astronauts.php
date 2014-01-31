<?php
include "countdown.php";

	if (isset($_GET['id'])) 
	{
		switch ($_GET['id']) 
		{
			case '1'	:	$id = "1";		break;
			case '2'	:	$id = "2";		break;
			case '3'	:	$id = "3";		break;
			case '4'	:	$id = "4";		break;
			default		:	$id = "0";		break;
		}		
	}
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>


	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
	<meta name="author" content="Dennis Bacsafra">
	<meta name="keywords" content="Atlantis, NASA, Space Shuttle, launch, Kennedy Space Center, orbit, space, Avatrian, Second Life, virtual world, metaverse, lottery, raffle, explorer, astronaut, astronauts, fund-raising, event">
	<meta name="description" content="the main portal site for The Last Space Shuttle Launch in SL">
	<meta name="robots" content="all">

	<title>The Last Space Shuttle: A Historic Celebration in SL</title>

	<!-- to correct the unsightly Flash of Unstyled Content. http://www.bluerobot.com/web/css/fouc.asp -->
	<script type="text/javascript"></script>
	
	<style type="text/css" media="all">
		@import "lastshuttle.css";
	</style>
	
<!--


	This xhtml document is marked up to provide the designer with the maximum possible flexibility.
	There are more classes and extraneous tags than needed, and in a real world situation, it's more
	likely that it would be much leaner.
	
	However, I think we can all agree that even given that, we're still better off than if this had been
	built with tables.


-->

<script charset="utf-8" id="injection_graph_func" src="index_files/injection_graph_func.js"></script><script id="_nameHighlight_injection"></script><link class="skype_name_highlight_style" href="index_files/injection_nh_graph.css" type="text/css" rel="stylesheet" charset="utf-8" id="_injection_graph_nh_css"><link href="index_files/skypeplugin_dropdownmenu.css" type="text/css" rel="stylesheet" charset="utf-8" id="_skypeplugin_dropdownmenu_css"></head><body onload="window.defaultStatus='css Zen Garden: The Beauty in CSS Design';" id="css-zen-garden">

<div id="container">
	<div id="intro">
		<div id="pageHeader">
			<h1><span>The Four Astronauts</span></h1>
			<h2><span></span></h2>
		</div>

		<div id="quickSummary">
			<p class="p1"><span style="font-weight:bold;">Countdown To Launch: <br />
				<?php echo $countdown_days; ?> Days, <?php echo $countdown_hours; ?> Hours, <?php echo $countdown_minutes; ?> Minutes <br />
				</span></p>
			<p class="p2"><span>The search for the last 4 space shuttle astronauts have begun.  Take part in the final journey by visiting the <a href="http://slurl.com/secondlife/Avatrian%20Central/214/21/26/?img=http%3A//www.avatrian.com/lastshuttle/lastshuttlethumb.jpg&title=Last%20Space%20Shuttle&msg=Celebrate%20a%20historic%20event%21%20%20The%20search%20for%20the%20last%206%20space%20shuttle%20astronauts%20have%20begun.%20Take%20part%20in%20the%20final%20journey%20by%20visiting%20the%20space%20shuttle%20launch%20site%20in%20SL%20.%20" title="Last Space Shuttle in SL" target="_blank">space shuttle launch site in SL </a>. </span>
			<br />
			<br />
			<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=198495206863866&amp;xfbml=1"></script><fb:like href="http://lastshuttle.avatrian.com/index.php" send="true" layout="button_count" width="450" show_faces="true" font=""></fb:like>
			</p>
		</div>

	</div>

	<div id="supportingText">
		<p class = "astronauts">
		<br />
		<br />
		<?php 
		if ($id=="1")
		{
			echo "Commander: Phelpsa Resident"; 
			echo "<br />";
			echo "<span style='font-size: 9px;'>***The avatar won the position of Commander of the Atlantis STS-135 crew on July 5, 2011  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Second Life Birthdate: May 16, 2011  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Crew member has been given exclusive access to the Last Shuttle sim launch site  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***ACES spacesuit has been provided to the crew member</span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Prepping session for the crew member is currently being scheduled</span>";
			echo "<br />";
			echo "<br />";
			echo "<img src='commander.gif' border='0'>";		
		}
		if ($id=="2")
		{
			echo "Pilot: Walt Faulds";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***The avatar won the position of Pilot of the Atlantis STS-135 crew on July 5, 2011  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Second Life Birthdate: May 12, 2007  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Crew member has been given exclusive access to the Last Shuttle sim launch site  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***ACES spacesuit has been provided to the crew member</span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Prepping session for the crew member is currently being scheduled</span>";
			echo "<br />";
			echo "<br />";
			echo "<img src='pilot.gif' border='0'>";		
		}		
		if ($id=="3")
		{
			echo "Mission Specialist: Fritzfranz Fride"; 
			echo "<br />";
			echo "<span style='font-size: 9px;'>***The avatar won the position of Pilot of the Atlantis STS-135 crew on July 7, 2011  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Second Life Birthdate: April 13, 2007  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Crew member has been given exclusive access to the Last Shuttle sim launch site  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***ACES spacesuit has been provided to the crew member</span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Prepping session for the crew member is currently being scheduled</span>";
			echo "<br />";
			echo "<br />";
			echo "<img src='missionspecialist1.gif' border='0'>";		
		}
		if ($id=="4")
		{
			echo "Mission Specialist: Douglas Tragonach";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***The avatar won the position of Pilot of the Atlantis STS-135 crew on July 7, 2011  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Second Life Birthdate: November 8, 2009  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Crew member has been given exclusive access to the Last Shuttle sim launch site  </span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***ACES spacesuit has been provided to the crew member</span>";
			echo "<br />";
			echo "<span style='font-size: 9px;'>***Prepping session for the crew member is currently being scheduled</span>";
			echo "<br />";
			echo "<br />";
			echo "<img src='missionspecialist2.gif' border='0'>";		
		}			
		?>

		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		</p>
		
		<div id="footer">
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
			<a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
		</div>
	</div>
		

	<div id="linkList">
		<?php include "navigation.html"; ?>
	</div>

</div>

<!-- These extra divs/spans may be used as catch-alls to add extra imagery. -->
<!-- Add a background image to each and use width and height to control sizing, place with absolute positioning -->
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div>
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div>

</body></html>
