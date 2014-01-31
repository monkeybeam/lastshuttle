<?php
	include "dbconnect.php";

	$avatar		=	$_POST['c'];
	$question	=	$_POST['a'];
	$answer		=	$_POST['b'];

	//$avatar = "Aloha";
	//$question = "Is it sunny?";
	//$answer = "N";
	
	$sql = "INSERT INTO tbl_survey (id, avatar, question, answer)
			VALUES (NULL, '$avatar', '$question', '$answer')";
			
	$result1 = mysql_query($sql);
	
	$str = "Success";

	$return = $str."";
	
	echo $return;
?>