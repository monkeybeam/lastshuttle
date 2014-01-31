<?php
include "countdown.php";
include "dbconnect.php";
include "salesrecords.php";

?>

<html>
    <head>
        <title>Last Shuttle</title>

		<meta name="viewport"
			  content="width=device-width,minimum-scale=1.0,maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link type="text/css" rel="stylesheet" media="screen" href="jqtouch/jqtouch.css">
        <link type="text/css" rel="stylesheet" media="screen" href="shuttle.css">
        <script type="text/javascript" src="jqtouch/jquery.js"></script>
        <script type="text/javascript" src="jqtouch/jqtouch.js"></script>
        <script type="text/javascript">
            var jQT = $.jQTouch({
                icon: 'lastshuttle.png',
                statusBar: 'black'
            });
        </script>
    </head>
    <body>
        <div id="home">
            <div class="toolbar">
                <h1>Last Shuttle</h1>
                <a class="button flip" href="#credits">Credits</a>
            </div>
			<div id="pagetext">
				<p class="ralign">
					<br />
					Countdown To Launch
					<br />
					<?php /*echo $countdown_days; ?> Days, <?php echo $countdown_hours; ?> Hours, <?php echo $countdown_minutes; ?> Minutes */ ?> The Last Shuttle has been Launched!
					<br />
					<br />
					<br />
					<br />
				</p>
				<p>
				<br />
				<br />
				<br />
				<br /><div style="background-image: url('1x1-transparent.png'); background-repeat: repeat;">The search for the last 4 space shuttle astronauts have begun.  Visit the <a href="http://slurl.com/secondlife/Avatrian%20Central/214/21/26/?img=http%3A//www.avatrian.com/lastshuttle/lastshuttlethumb.jpg&title=Last%20Space%20Shuttle&msg=Celebrate%20a%20historic%20event%21%20%20The%20search%20for%20the%20last%206%20space%20shuttle%20astronauts%20have%20begun.%20Take%20part%20in%20the%20final%20journey%20by%20visiting%20the%20space%20shuttle%20launch%20site%20in%20SL%20.%20" title="Last Space Shuttle in SL" target="_blank">space shuttle launch site in SL </a> and celebrate a historic event.</div>  
				<br />
				</p>
			</div>
            <ul class="edgetoedge">
                <li class="arrow"><a href="#about">What is this About?</a></li>
                <li class="arrow"><a href="#fourastronauts">The Four Astronauts</a></li>
                <li class="arrow"><a href="#ticketholders">The Ticket Holders</a></li>
            </ul>
			<br />
			<div id="fb-root"><script src="http://connect.facebook.net/en_US/all.js#appId=198495206863866&amp;xfbml=1"></script><fb:like href="http://lastshuttle.avatrian.com/index.php" send="true" layout="button_count" width="100%" show_faces="true" font=""></fb:like>
			</div>
        </div>
        <div id="about">
            <div class="toolbar">
                <h1>About</h1>
                <a class="button back" href="#">Back</a>
            </div>
            <div>
				<p>Space Shuttle Atlantis on mission STS-135 is scheduled to be the final launch of a Space Shuttle from NASA’s fleet. The actual launch is currently scheduled for Friday, July 8, 2011 at 11:26 a.m. EST. This event will be mirrored via a virtual launch inside Second Life. This is scheduled for Friday, July 8, 2011 at 8:26 a.m. SLT.<br /><br /></p>
                <p>Avatars can now get as close as they can to the final Space Shuttle launch without having to travel to Florida in real life. The recreation in Second Life is a celebration of this historic event. All ticket proceeds will be donated to the Youth Science Center, a non-profit organization established in 1962 dedicated to improving math and science education for students grades K through 8.</p>
            </div>
        </div>
        <div id="fourastronauts">
            <div class="toolbar">
                <h1>The Four Astronauts</h1>
                <a class="button back" href="#">Back</a>
            </div>
			<ul>
					<li class="arrow"><a id="1" href="#commander">Commander</a></li>
					<li class="arrow"><a id="2" href="#pilot">Pilot</a></li>
					<li class="arrow"><a id="3" href="#astronauts1">Mission Specialist</a></li>
					<li class="arrow"><a id="4" href="#astronauts2">Mission Specialist 2</a></li>
			</ul>
        </div>
        <div id="ticketholders">
            <div class="toolbar">
                <h1>Ticket Holders</h1>
                <a class="button back" href="#">Back</a>
            </div>
            <ul class="edgetoedge">
                <li class="arrow"><a id="0" href="#byavatar">By Avatar Names</a></li>
                <li class="arrow"><a id="1" href="#bypurchasedate">By Purchase Date</a></li>
                <li class="arrow"><a id="2" href="#byticketcount">By Ticket Count</a></li>
            </ul>
        </div>
        <div id="commander">
            <div class="toolbar">
                <h1>Commander</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<br />
			Phelpsa Resident<br />
			- won the position of Commander of the Atlantis STS-135 on July 5, 2011<br />
			- Second Life Birthdate: May 16, 2011<br />
			<br />
			<br />
			<br />
			<br />
			<img src="img/commander.gif" border="0" width="200">			
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Name</span>
                    <span class="calories">Position</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>
		
        <div id="pilot">
            <div class="toolbar">
                <h1>Pilot</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<br />
			Walt Faulds<br />
			- won the position of Pilot of the Atlantis STS-135 on July 5, 2011<br />
			- Second Life Birthdate: May 12, 2007<br />
			<br />
			<br />
			<br />
			<br />
			<img src="img/pilot.gif" border="0" width="200">			
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Name</span>
                    <span class="calories">Position</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>		
		<div id="astronauts1">
            <div class="toolbar">
                <h1>Mission Specialist</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<br />
			Fritzfranz Fride<br />
			- The avatar won the position of Pilot of the Atlantis STS-135 crew on July 7, 2011 <br />
			- Second Life Birthdate: April 13, 2007 <br />
			- Crew member has been given exclusive access to the Last Shuttle sim launch site <br />
			- ACES spacesuit has been provided to the crew member <br />
			- Prepping session for the crew member is currently being scheduled <br />
			<br />
			<br />
			<br />
			<br />
			<img src="img/missionspecialist1.gif" border="0" width="200">			
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Name</span>
                    <span class="calories">Position</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>	
        <div id="astronauts2">
            <div class="toolbar">
                <h1>Mission Specialist 2</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<br />
			Douglas Tragonach<br />
			- The avatar won the position of Pilot of the Atlantis STS-135 crew on July 7, 2011 <br />
			- Second Life Birthdate: November 8, 2009 <br />
			- Crew member has been given exclusive access to the Last Shuttle sim launch site <br />
			- ACES spacesuit has been provided to the crew member <br />
			- Prepping session for the crew member is currently being scheduled <br />
			<br />
			<br />
			<br />
			<br />
			<img src="img/missionspecialist2.gif" border="0" width="200">			
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Name</span>
                    <span class="calories">Position</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>	
        <div id="byavatar">
            <div class="toolbar">
                <h1>By Avatar Name</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<div id="ticketlist">
				<br />
				<?php
				$orderbycondition = "avatar ASC";
				getrecords($orderbycondition);
				?>
			
			</div>
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Label</span>
                    <span class="calories">000</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>
        <div id="bypurchasedate">
            <div class="toolbar">
                <h1>By Purchase Date</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<div id="ticketlist">
				<br />
				<?php
				$orderbycondition = "ticket_id DESC";
				getrecords($orderbycondition);
				?>
			
			</div>
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Label</span>
                    <span class="calories">000</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>
        <div id="byticketcount">
            <div class="toolbar">
                <h1>By Ticket Count</h1>
                <a class="button back" href="#">Back</a>
                <a class="button slideup" href="#createEntry">+</a>
            </div>
			<div id="ticketlist">
				<br />
				<?php
				$orderbycondition = "ticketcount";
				getrecords($orderbycondition);
				?>
			
			</div>
            <ul class="edgetoedge">
                <li id="entryTemplate" class="entry" style="display:none">
                    <span class="label">Label</span>
                    <span class="calories">000</span>
                    <span class="delete">Delete</span>
                </li>
            </ul>
        </div>
        <div id="createEntry">
            <div class="toolbar">
                <h1>New Entry</h1>
                <a class="button cancel" href="#">Cancel</a>
            </div>
            <form method="post">
                <ul class="rounded">
                    <li><input type="text" placeholder="Food" name="food" id="food" autocapitalize="off" autocorrect="off" autocomplete="off" /></li>
                    <li><input type="text" placeholder="Calories" name="calories" id="calories" autocapitalize="off" autocorrect="off" autocomplete="off" /></li>
                    <li><input type="submit" class="submit" name="action" value="Save Entry" /></li>
                </ul>
            </form>
        </div>
        <div id="credits">
            <div class="toolbar">
                <h1>Credits</h1>
                <a class="button cancel" href="#">Cancel</a>
            </div>
                <ul class="rounded">
                    <li>Author: Dennis Bacsafra</li>
                    <li>Company: Avatrian, LLC</li>
                    <li>Website: www.avatrian.com</li>
                    <li>Email: info@avatrian.com</li>
                    <li>Phone: 1-415-994-9541</li>
                </ul>
       </div>
    </body>
</html>
