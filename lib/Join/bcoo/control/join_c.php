<?php
	
	
	 if(!empty($_POST['cp_name']))
	 {
	 	
	 }else
	 {
	 		echo '
	 		<meta charset="utf8">未设置';
	 }
	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
	}
	//SELECT * FROM Join_ ORDER BY time1 DESC
	$cp_name=test_input($_POST['cp_name']);
	$cp_fuwu=test_input($_POST['cp_fuwu']);
	#$cp_City;
	#$cp_Area;	
	#$cp_ctant;
	$cp_ctant=test_input($_POST['cp_ctant']);
	$cp_phone=test_input($_POST['cp_phone']);
	if($cp_ctant==''||$cp_fuwu==''||$cp_name==''||$cp_phone=='')
	{
		echo '<meta charset="utf8"> <script>alert("输入框内容不能为空！");location.href="../join.php"</script>';
	}
	else
	{
		
		
		$r=opean($cp_name, $cp_fuwu, $cp_ctant, $cp_phone);
		if($r)
		{
				echo '<meta charset="utf8"> <script>alert("申请成功!");	location.href="http://www.51tiaobei.com/getUrl.php?path=index";</script>';
		}
		else
		{
			echo '<meta charset="utf8"> <script>alert("申请失败！");	location.href="http://www.51tiaobei.com/getUrl.php?path=join";</script>';
		}
	
	}
// 定义变量并设置为空值	


			
		 function opean($cp_name,$cp_fuwu,$cp_ctant,$cp_phone){
			
			$localhost='localhost';
			$user='root';
			$pass='root';
			$db='join_';
			$con=mysqli_connect($localhost,$user,$pass);
			mysqli_query($con,"set character set 'utf8'");//读库 
			mysqli_query($con,"set names 'utf8'");//写库 
		
			mysqli_select_db($con,$db);
			$sqlstr = "insert into join_(cp_name,cp_fuwu,cp_ctant,cp_phone,state,time1) values('".$cp_name."','".$cp_fuwu."','".$cp_ctant."','".$cp_phone."',1,'".date("Y-m-d H:i:s", time())."')";
			
			$e= 	mysqli_query($con,$sqlstr);
		
			mysqli_close($con);
			return $e;

		}
		
		
		
		
?>