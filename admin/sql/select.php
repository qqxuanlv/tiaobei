<?php
	

	
			$localhost='localhost';
			$user='root';
			$pass='8954036abc!@#..';
			$db='join_';
			$con=mysqli_connect($localhost,$user,$pass);
			mysqli_query($con,"set character set 'utf8'");//读库 
			mysqli_query($con,"set names 'utf8'");//写库 
		
			mysqli_select_db($con,$db);
			$sqlstr='select * from join_ GROUP BY time1 DESC';
			$result=mysqli_query($con, $sqlstr);
			$jarr = array();
			while($rows=mysqli_fetch_array($result, MYSQL_ASSOC))
			{
				
				array_push($jarr,$rows);
			}
			
		echo	$json= json_encode($jarr);
	
?>