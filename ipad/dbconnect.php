<?php
	$p_data = implode('', file('php://input'));
	$p_data = explode('&', $p_data);
	 
	foreach ($p_data as $p_val)
	{
		$d_parts = explode('=', $p_val);
		$_POST[$d_parts[0]] = urldecode($d_parts[1]);
	}

	//IMPORTANT: newly created db by Dennis on 1/31/2014
	$host      = "db513357858.db.1and1.com";
	$username  = "dbo513357858";  
	$password  = "nylonkong";
	$db_name   = "db513357858";
	$tbl_name  = "tbl_sales";

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
?>
