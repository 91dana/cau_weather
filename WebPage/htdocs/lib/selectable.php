<?php


function selbildtable($b_num){
	switch($b_num){
	
		case "building_1":
			echo "��2���а�<br><br>";
			$sql_data_1="select * from second_eng_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from second_eng_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from second_eng_3 ORDER BY calcul_time DESC LIMIT 5";
			
			return array($sql_data_1,$sql_data_2,$sql_data_3);
			
		break;
		
		case "building_2":
			echo "����ƮȦ<br><br>";
			$sql_data_1="select * from first_eng_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from first_eng_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from first_eng_3 ORDER BY calcul_time DESC LIMIT 5";
			return array($sql_data_1,$sql_data_2,$sql_data_3);
		break;
		
		case "building_3":
			echo "�濵������<br><br>";
			$sql_data_1="select * from busi_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from busi_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from busi_3 ORDER BY calcul_time DESC LIMIT 5";
			return array($sql_data_1,$sql_data_2,$sql_data_3);
		break;
		
		case "building_4":
			echo "�����<br><br>";
			$sql_data_1="select * from dorm_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from dorm_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from dorm_3 ORDER BY calcul_time DESC LIMIT 5";
			return array($sql_data_1,$sql_data_2,$sql_data_3);
		break;
		
		
		//library table �����ʿ�
		case "building_5":
			echo "������<br><br>";
			$sql_data_1="select * from busi_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from busi_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from busi_3 ORDER BY calcul_time DESC LIMIT 5";
			return array($sql_data_1,$sql_data_2,$sql_data_3);
		break;

		//library table �����ʿ�		
		case "building_6":
			echo "�л�ȸ��<br><br>";
			$sql_data_1="select * from busi_1 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_2="select * from busi_2 ORDER BY calcul_time DESC LIMIT 5";
			$sql_data_3="select * from busi_3 ORDER BY calcul_time DESC LIMIT 5";
			return array($sql_data_1,$sql_data_2,$sql_data_3);
		break;
		
		
	}
}


?>