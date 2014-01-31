<?php
	include "dbconnect.php";
	include "nowSLT.php";
	$sale_dt = $nowSLT;

	$avatar		=	$_POST['a'];
	$item		=	$_POST['b'];
	$amount		=	$_POST['c'];
	$vendor		=	$_POST['d'];
	$iterations	=	$_POST['e'];

	//$avatar = "Beer";
	//$item	= "Red Horse 8oz";
	//$amount = 13;
	
	if ($avatar!=NULL || $avatar!="") {	
		$sql = "INSERT INTO tbl_sales (ticket_id, avatar, item, amount, vendor, sale_dt)
				VALUES (NULL, '$avatar', '$item', 100, '$vendor','$sale_dt')";

		for ($i=1;$i<=$iterations-1;$i++) {
			$sql .= ", (NULL, '$avatar', '$item', 100, '$vendor','$sale_dt')";
		}

		$result1 = mysql_query($sql);

		$str = "Success";
	}

	$return = $str."";

	echo $return;
?>