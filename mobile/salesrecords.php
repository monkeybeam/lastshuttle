<?php
	if (isset($_GET['sort'])) {
		switch ($_GET['sort']) {
			case 'ticket_id'	:	$sortby = "ticket_id";		break;
			case 'avatar'		:	$sortby = "avatar";			break;
			case 'item'			:	$sortby = "item";			break;
			case 'price'		:	$sortby = "amount";			break;
			case 'vendor'		:	$sortby = "vendor";			break;
			case 'sale_date'	:	$sortby = "sale_dt";		break;
			default				:	$sortby = "ticket_id";		break;
		}
		
		if ($_GET['order'] == "asc") {
			$orderbycondition = $sortby." ASC";
			$togglehref = "desc";
		}
		else {
			$orderbycondition = $sortby." DESC";
			$togglehref = "asc";
		}
	}
	else {
		$orderbycondition = "ticket_id DESC";
	}
	
	function getrecords($orderbycondition) {

		
		if($orderbycondition == "ticketcount")
		{
			$sql = "SELECT avatar, count(avatar) as ticketcount FROM tbl_sales GROUP BY avatar";
		}
		else
		{
			$sql = "SELECT * FROM tbl_sales ORDER BY {$orderbycondition}";
		}
		
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
			echo "<img src='img/ticket.png' border=0> {$row['avatar']}";
			if($orderbycondition == "ticketcount")
			{
				$numoftix = $row['ticketcount'];
				if ($numoftix == "1")
				{
					echo " has 1 ticket<br />";
				}
				else
				{
					echo " has {$numoftix} tickets<br />";
				}
			}
			else
			{
				$dateonly = substr($row['sale_dt'], 0, -9);
				echo " on {$dateonly}<br />";
			}
		}
	}	
?>