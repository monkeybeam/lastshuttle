<?php
	include "dbconnect.php";

	function querylist() {
		$sql = "SELECT * FROM tbl_survey";
				
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
			echo "<tr bgcolor='{$targetcolor}'><td>{$row['id']}</td>";
			echo "<td>{$row['avatar']}</td>";
			echo "<td>{$row['question']}</td>";
			echo "<td>{$row['answer']}</td></tr>";
		}
	}
?>
<table>
<tr bgcolor="#CCCCCC">
	<td>id</td>
	<td>avatar</td>
	<td>question</td>
	<td>answer</td>
</tr>
<?php querylist(); ?></table>