<?php
	if(!empty($_GET['path']))
	{
		$path = $_GET['path'];
		switch($path)
		{
		    case 'index':Header("Location:lib/index/index.php"); break;
			case 'join':Header("Location:lib/Join/bcoo/join.php"); break;
			case 'centrct':Header("Location:lib/about/contact/centact.php"); break;
			case 'question':Header("Location:lib/about/question/question.php"); break;
			case 'recruit':Header("Location:lib/Join/recruit/recruit.php"); break;
			case 'join':Header("Location:lib/Join/bcoo/join.php"); break;
			case 'project1':Header("Location:lib/product/project/project1.php"); break;
			case 'project2':Header("Location:lib/product/project/project2.php"); break;
			case 'project3':Header("Location:lib/product/project/project3.php"); break;
			case 'project4':Header("Location:lib/product/project/project4.php"); break;
			case 'money':Header("Location:lib/Solution/Money/money.php"); break;
			case 'car':Header("Location:lib/Solution/Car/car.php"); break;
            case 'plane':Header("Location:lib/Solution/Airplane/plane.php"); break;
            case 'area':Header("Location:lib/Solution/TradingArea/area.php"); break;
            case 'xmjs':Header("Location:lib/city/project1.php"); break;
            case 'zhms':Header("Location:lib/city/project2.php"); break;
            case 'xysy':Header("Location:lib/city/project3.php"); break;
            case 'alhz':Header("Location:lib/city/project4.php"); break;
            case 'dzlc':Header("Location:lib/dzkf/dzlc.php"); break;
            case 'alhz':Header("Location:lib/city/project4.php"); break;
            case 'dzlc':Header("Location:lib/dzkf/dzlc.php"); break;
            case 'jkkf':Header("Location:lib/dzkf/jk/jkkf.php"); break;
                            
        }
			
	}
	else
	{
	
		echo "<script>location.href='index.html';</script>"	;
	}
		
		
?>