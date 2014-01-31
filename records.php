<?php
include "countdown.php";

	if (isset($_GET['sort'])) {
		switch ($_GET['sort']) {
			case 'ticket_id'		:	$sortby = "ticket_id";
										$sorttext = "Ticket ID";
										break;
			//Leaderboards - avatar sort. Line 6-7 are distinct
			case 'lboards_avatar'	:
			case 'avatar'			:	$sortby = "avatar";
										$sorttext = "Avatar Name";
										break;
			case 'item'				:	$sortby = "item";
										$sorttext = "Item";
										break;
			case 'price'			:	$sortby = "amount";
										$sorttext = "Price";
										break;
			case 'vendor'			:	$sortby = "vendor";
										$sorttext = "Vendor";
										break;
			case 'sale_date'		:	$sortby = "sale_dt";
										$sorttext = "Sale Date";
										break;
			//Leaderboards - number of tickets sort.
			case 'lboards_tickets'	:	$sortby = "number_of_tickets";
										$sorttext = "number of tickets";
										break;
			default					:	$sortby = "ticket_id";
										$sorttext = "Ticket ID";
										break;
		}

		if ($_GET['order'] == "asc") {
			$orderbycondition = $sortby." ASC";
			$togglehref = "desc";
			$ordertext = "an ascending";
		}
		else {
			$orderbycondition = $sortby." DESC";
			$togglehref = "asc";
			$ordertext = "a descending";
		}
	}
	elseif (isset($_POST['search_field'])) {
		$searchfield = $_POST['search_field'];
		$searchcondition = "WHERE avatar LIKE '%{$searchfield}%' ORDER BY avatar DESC ";
		$sorttext = "Avatar Name";
		$ordertext = "a descending";
	}
	else {
		$orderbycondition = "ticket_id DESC";
		$togglehref = "asc";
		$searchfield = "";
	}
	
	function getrecords($orderbycondition) {
		include "dbconnect.php";
		
		$sql = "SELECT * FROM tbl_sales ORDER BY {$orderbycondition}";
		$result = mysql_query($sql);
		
		$colorcount = 0;
		
		while($row = mysql_fetch_array($result)) {
			if ($colorcount==0) {
				$targetcolor = "#9B7C7C";
				$colorcount++;
			}
			else {
				$targetcolor = "#FFD7AC";
				$colorcount--;
			}
			echo "<tr bgcolor='{$targetcolor}'><td><img src='ticket.png' border='0'>{$row['ticket_id']}</td>";
			echo "<td>{$row['avatar']}</td>";
			echo "<td>{$row['item']}</td>";
			echo "<td>{$row['amount']}</td>";
			echo "<td>{$row['vendor']}</td>";
			echo "<td>{$row['sale_dt']}</td></tr>";
		}
	}
	
	function getleaderboards($orderbycondition) {
		include "dbconnect.php";
		
		$sql = "SELECT avatar, count(avatar) AS 'number_of_tickets' FROM tbl_sales GROUP BY avatar ORDER BY {$orderbycondition}";
		
		$result = mysql_query($sql);
		
		$colorcount = 0;
		
		while($row = mysql_fetch_array($result)) {
			if ($colorcount==0) {
				$targetcolor = "#9B7C7C";
				$colorcount++;
			}
			else {
				$targetcolor = "#FFD7AC";
				$colorcount--;
			}
			echo "<tr bgcolor='{$targetcolor}'><td>{$row['avatar']}</td>";
			echo "<td>{$row['number_of_tickets']}</td></tr>";
		}
	}
	
	function searchthisguy($searchcondition) {
		include "dbconnect.php";
		
		$sql = "SELECT * FROM tbl_sales {$searchcondition}";
		
		$result = mysql_query($sql);
		
		$colorcount = 0;
		
		while($row = mysql_fetch_array($result)) {
			if ($colorcount==0) {
				$targetcolor = "#9B7C7C";
				$colorcount++;
			}
			else {
				$targetcolor = "#FFD7AC";
				$colorcount--;
			}
			echo "<tr bgcolor='{$targetcolor}'><td><img src='ticket.png' border='0'>{$row['ticket_id']}</td>";
			echo "<td>{$row['avatar']}</td>";
			echo "<td>{$row['item']}</td>";
			echo "<td>{$row['amount']}</td>";
			echo "<td>{$row['vendor']}</td>";
			echo "<td>{$row['sale_dt']}</td></tr>";
		}
	}
	
	function searchthisguybynumberoftickets($searchcondition) {
		include "dbconnect.php";
		
		$sql = "SELECT avatar, count(avatar) AS 'number_of_tickets' FROM tbl_sales {$searchcondition} GROUP BY avatar ORDER BY avatar DESC";
		$result = mysql_query($sql);

		$colorcount = 0;
		
		while($row = mysql_fetch_array($result)) {
			if ($colorcount==0) {
				$targetcolor = "#9B7C7C";
				$colorcount++;
			}
			else {
				$targetcolor = "#FFD7AC";
				$colorcount--;
			}
			echo "<tr bgcolor='{$targetcolor}'><td>{$row['avatar']}</td>";
			echo "<td>{$row['number_of_tickets']}</td></tr>";
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
			<h1><span>Ticket Holders</span></h1>
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
		<br />
		<br />
		<div style="font-size: 15px;">Results are shown by <a style="font-size: 16px; font-weight: bold;"><?php echo $sorttext; ?></a> in <a style="font-size: 16px; font-weight: bold;"><?php echo $ordertext; ?></a> order</div>
		<?php
			if ($_GET['sort']=="lboards_tickets" || $_GET['sort']=="lboards_avatar") {
				$appendgetvar = "?sort=lboards_tickets";
			}
			else {
				$appendgetvar;
			}
		?>
		<form method="POST" action="records.php<?php echo $appendgetvar; ?>">
			<div>Search by name: <input name="search_field" type="textbox" size="20" value="<?php echo $searchfield; ?>"> <input type="submit" text="Submit"></div>
		</form>
		<table>
			<?php
				if ($_GET['sort']!="lboards_tickets" && $_GET['sort']!="lboards_avatar") {
					if (isset($_POST['search_field'])) {
						echo "	<tr bgcolor='#C1C1C1'>
									<td width='90'><div>Ticket ID</div></td>
									<td width='210'><div>Avatar Name</div></td>
									<td width='250'><div>Item</div></td>
									<td width='50'><div>Price</div></td>
									<td width='150'><div>Vendor</div></td>
									<td width='170'><div>Date</div></td>
								</tr>
						";
						searchthisguy($searchcondition);
					}
					else {
						echo "	<tr bgcolor='#C1C1C1'>
									<td width='90'><a href='records.php?sort=ticket_id&order={$togglehref}'><div>Ticket ID</div></a></td>
									<td width='210'><a href='records.php?sort=avatar&order={$togglehref}'><div>Avatar Name</div></a></td>
									<td width='250'><a href='records.php?sort=item&order={$togglehref}'><div>Item</div></a></td>
									<td width='50'><a href='records.php?sort=price&order={$togglehref}'><div>Price</div></a></td>
									<td width='150'><a href='records.php?sort=vendor&order={$togglehref}'><div>Vendor</div></a></td>
									<td width='170'><a href='records.php?sort=date&order={$togglehref}'><div>Date</div></a></td>
								</tr>
						";
						getrecords($orderbycondition);
					}
				}
				else {
					echo "	<tr bgcolor='#C1C1C1'>
								<td width='200'><a href='records.php?sort=lboards_avatar&order={$togglehref}'><div>Avatar Name</div></a></td>
								<td width='150'><a href='records.php?sort=lboards_tickets&order={$togglehref}'><div>Number of Tickets</div></a></td>
							</tr>
						";
					if (isset($_POST['search_field'])) {
						$searchfield = $_POST['search_field'];
						$searchcondition = "WHERE avatar LIKE '%{$searchfield}%'";
						$sorttext = "Avatar Name";
						$ordertext = "a descending";

						searchthisguybynumberoftickets($searchcondition);
					}
					else {
						getleaderboards($orderbycondition);
					}
				}
			?>
		</table>
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
