<?php
    // �����ͺ��̽� ���� ���ڿ�. (db��ġ, ���� �̸�, ��й�ȣ)
    $connect=mysql_connect( "localhost", "root", "carbon14") or  
        die( "SQL server�� ������ �� �����ϴ�.");
 
    
    mysql_query("SET NAMES UTF8");
   // �����ͺ��̽� ����
   
   mysql_select_db("jung_db",$connect);
 
   // ���� ����
   session_start();
 
   // ������ ����
   $sql = "select * from second_eng_1";
 
   // ���� ���� ����� $result�� ����
   $result = mysql_query($sql, $connect);
   // ��ȯ�� ��ü ���ڵ� �� ����.
   $total_record = mysql_num_rows($result);
 
   // JSONArray �������� ����� ���ؼ�...
   echo "{\"status\":\"OK\",\"num_results\":\"$total_record\",\"results\":[";
 
   // ��ȯ�� �� ���ڵ庰�� JSONArray �������� �����.
   for ($i=0; $i < $total_record; $i++)                    
   {
      // ������ ���ڵ�� ��ġ(������) �̵�  
      mysql_data_seek($result, $i);       
        
      $row = mysql_fetch_array($result);
   echo "{\"imgurl\":$row[imgurl],\"txt1\":\"$row[log_num]\",\"txt2\":\"$row[b_moist]\"}";
 
   // ������ ���ڵ� ������ ,�� ���δ�. �׷��� ������ ������ �Ǵϱ�.  
   if($i<$total_record-1){
      echo ",";
   }
    
   }
   // JSONArray�� ������ �ݱ�
   echo "]}";
?>