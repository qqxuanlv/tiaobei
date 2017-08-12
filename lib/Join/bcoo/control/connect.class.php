<?php

	class connect_open{
		
		public function connect_open($localhost,$user,$pass,$db){
		$GLOBALS['localhost']=$localhost;
		$GLOBALS['user']=$user;
		$GLOBALS['pass']=$pass;
		$GLOBALS['db']=$db;
		}
		
		public function tell($table,$str)
		{
			$sqlstr="select * from ".$table ." where ".$str;
			$result=$this->ao($sqlstr); 
			$row=mysql_fetch_array($result);
		
			return empty($row);
		}
		
		private function qd($str)
		{
			$str=substr($str,0,strlen($str)-1);
			return $str;
		}
		
		//select 查询
		public function Load($model,$sqlstr)
		{
			$this->opean();
			$count = 0;
			$count1 = 0;
			$array1 = array();
			$array_model = array();
			
			foreach ( $model as $name => $value){
				
  				$array1[$count] = $name;
				
				$count++;
			}
			
			$result = mysql_query( $sqlstr );
			while( $row = mysql_fetch_array( $result ) )
		    {
					$model = new $model();	 
					   	
		    	for($var=0 ; $var<$count ; $var++)
				{
					$model->$array1[$var] = $row[$array1[$var]];
				}
					$array_model[$count1] = $model;
		
					$count1++;
			 }
			
			
			$this->close();
			return $array_model;
			
		}
		
		//insert1 简单添加 （完整的sql语句）
		public function ao($sqlstr){
			
			return mysql_query($sqlstr) or die(mysql_error());
		}
		
		//insert
		public function insert($table,$model){
			$this->opean();
			$sqlstr="insert into ".$table."(";
			$sqlval="";
			foreach($model as $name=>$value)
			{				
					$sqlstr = $sqlstr.$name.",";
					$sqlval = $sqlval."'".$value."',";
			}
				$sqlstr=$this->qd($sqlstr);
				$sqlval=$this->qd($sqlval);
				$sqlstr = $sqlstr.") values (".$sqlval.");";
				$n=mysql_query($sqlstr);
				$this->close();
				return $n;
		}

		public function insert2($table,$model,$pkey){
			$this->opean();
			$sqlstr1 = "select * from ".$table." where ".$pkey."='".$model->$pkey."'";
			$result=mysql_query($sqlstr1,$GLOBALS['con']);
			if (mysql_num_rows($result) < 1) {
				$this->close();
				echo $this->insert($table, $model);
			} 
			else
			{
				$this->close();
				echo "主键重复";	
			}
			
			
		}
	
		public function update($table,$model,$flag,$key)
		{
			$count_z=0;
			$count_n=0;
			$count_d=0;
			$sqlvar=" where ";
			$sqlstr="UPDATE ".$table." set ";
			foreach($model as $name=>$value)
			{
				$count_z++;
			}
			
				//计数
				$arryc=count($flag);
				$count_d=$count_z-$arryc;
			
					foreach($model as $name=>$value)
					{
							if(empty($model->$name)){
								$count_n++;
							
							}
							if(empty($flag[$name]))
							{
							
								$count_d=$count_d-$count_n;
								if(!empty($model->$name)){
							
								
									if($count_d>1){
									
										$sqlstr=$sqlstr. $name."= '".$value." ' ,";
										$count_d--;
									}
									else
									{
										$sqlstr=$sqlstr. $name."= '".$value."'";
									}
								}
						}
					
						
						else
						{
							if($key==0){
								if($arryc>1)
								{
									$sqlvar = $sqlvar.$name."='" .$flag[$name]."' and ";
									$arryc--;
								}else
								{
									$sqlvar = $sqlvar.$name."='".$flag[$name]."' ;";
								}
							}
							else
							{
								foreach($flag as $name=>$value)
								{
									$sqlvar= $sqlvar.$name." = '".$value."'";
								}
							}
								
						}
					}
					
					if($key==1)
					{
						$sqlstr= $sqlstr.$sqlvar;
					}
					else
						{
							$sqlstr= substr($sqlstr,0,strlen($sqlstr)-1).$sqlvar;; 
						}
					 
					echo $sqlstr."<br>";
				
				    $this->insert1($sqlstr);
				
				
				
				
			}
		
		public function update1($table,$model,$str)
		{
			$this->opean();
			
			if(!$this->tell($table,$str)) {
				$count=0;
				foreach($model as $name=>$value)
				{
					if(empty($value))
					{
						continue;
					}
					else
					{
						$count++;	
					}		
				}
			
				$sqlstr="UPDATE ".$table." set ";
				foreach($model as $name=>$value)
				{
					if(empty($value))
					{
						continue;
					}
					else
					{
					
						$sqlstr=$sqlstr.$name." = '".$value."' ,";
					}		
									
				}
				$sqlstr=$this->qd($sqlstr).$str;
			
				$this->ao($sqlstr);
			}
			else
			{
					echo "update1当前数据库无记录";
			}
			
			$this->close();
		}
		
		public function delete($table,$str)
		{
			$this->open();
			if(!$this->tell($table,$str)) {
				$sqlstr = "DELETE FROM ".$table.$str;
				$this->ao($sqlstr);
			}
			else
			{
				echo "delete当前数据库无记录";
			}
			$this->close();
		}
		
		public function opean(){
			
			$GLOBALS['con']=$GLOBALS['con']=mysql_connect($GLOBALS['localhost'],$GLOBALS['user'],$GLOBALS['pass']);
			mysql_query("set character set 'utf8'");//读库 
			mysql_query("set names 'utf8'");//写库 
			mysql_select_db($GLOBALS['db'],$GLOBALS['con']);
			if (!$GLOBALS['con'])
		 	{
		  		die('Could not connect: ' . mysql_error());
		  	}
		}
		
		public function close(){
			mysql_close($GLOBALS['con']);
		}
		
		
	}
?>