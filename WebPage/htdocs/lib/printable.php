	
	<?
	function printable($connect_data, $sql_query){
	
			mysql_select_db("jung_db",$connect_data);
			$result = mysql_query($sql_query,$connect_data);
			$total_record = mysql_num_rows($result);
			
			echo "<div id='datasheet'>";
			echo "<table>";
			echo "<tr>";
			echo "<td>��ȣ</td>";
			echo "<td>����</td>";
			echo "<td>�µ�</td>";
			echo "<td>��ġ</td>";
			echo "<td>�ð�</td></tr>";
		
			for ($i=0; $i<$total_record ; $i++){
				mysql_data_seek($result, $i);       
				$row = mysql_fetch_array($result);       
				$id      = $row[log_num];
				$humid     = $row[b_moist];
				$temper    = $row[b_temper];
				$location    = $row[b_location];
				$calcul_time    = $row[calcul_time];
				echo "<tr><td>",$id , "</td>";
				echo "<td>", $temper ,"</td>";
				echo "<td>", $humid ,"</td>";
				echo "<td>", $location, "</td>";
				echo "<td>", $calcul_time, "</td>";
				echo "</tr></table>";
			}	
				//space for next table;
				echo "&nbsp&nbsp";
		
	}
			?>