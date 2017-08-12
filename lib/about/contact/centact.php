<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>联系我们-【挑呗支付宝代理 支付宝服务窗代理加盟】</title>
		<!--<link rel="icon" href="http://www.51fubei.com/assets/common/images/favicon.ico" type="http://www.51fubei.com/assets/common/images/x-icon" />
		<link rel="shortcut icon" href="http://www.51fubei.com/assets/common/images/favicon.ico" type="http://www.51fubei.com/assets/common/images/x-icon" />-->
		<meta name="keywords" content="挑呗,支付宝服务窗,支付宝服务窗加盟,支付宝服务窗代理,支付宝代理,支付宝加盟" />
		<meta name="description" content="挑呗(云管家)是国内最大的支付宝服务窗智能服务平台，是支付宝官方首批授权代理的ISV渠道商。集支付宝pos，挑呗wifi，打通口碑折扣，完美对接支付宝服务窗高级接口，帮助实现商圈、机场、餐饮、景区等多个O2O行业解决方案，助力传统行业进行互联网+服务全面升级。" />
		
		<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">



        <style>
            ul{list-style: none; }
            #n{height:800px;}
            #n div{top:200px;}
            .box div{height:56px; border:1px #E5E3DA solid; padding-top: 18px;padding-left: 10px;}
            .box div {color:#7F7F7F; font-size: 0.6em;}
            .box div a{color:#7F7F7F;font-size: 0.6em;}

        </style>

	
	</head>

	<body>
		<!-------------首页改版----JUST PLAY 2016/06/14-------------->
		<!-------------首页改版----assets/home/fubei/css/indextop.css-------------->
	
	<?php
			require('../../../header.php');
		?>



        <div class="container" id="n">
            <div class="row">
                <div  class="box col-sm-5  col-md-3 col-lg-3 col-xs-5">

                    <div onclick="f1()" class="subNav">
                        关于
                        <a >ABOUT US</a>

                    </div>
                    <ul id="navContent1"  class="m3m" style="display:none;">
                        <li>
                            <a href="http://<?php echo $url ?>/getUrl.php?path=recruit">加入我们</a>
                        </li>
                        <li>
                        </li>
                    </ul>
                    <div onclick="f2()"class="subNav ">
                        合作
                        <a > COOPERATION</a>

                    </div>
                    <ul id="navContent2" class="m3m"  style="display:none;">
                        <li>
                            <a href="http://<?php echo $url ?>/getUrl.php?path=join">市场/商业合作</a>
                        </li>

                    </ul>

                    <div onclick="f4()"class="subNav">
                        帮助
                        <a >HELP</a>

                    </div>
                    <ul id="navContent4"  class="m3m" style="display:none;">

                        <li>
                            <a href="http://<?php echo $url ?>/getUrl.php?path=question">产品问答</a>
                        </li>
                    
                    </ul>
                </div>
                <div class="col-md-6 col-lg-8 col-xs-7" style="border:1px #eee solid ;height:300px">


                    <img src="http://www.51fubei.com/assets/common/images/abouts_img.png?v=1123442" style="margin-top:20px;margin-left: 60px;">
                    <br><a style="position:relative;left:20px;top:10px; color:#ff6600;font-size:20px; font-weight:bold;">渠道加盟热线：0431-88007771</a></div>

            </div>
        </div>
        </div>






        <style>
            .m3m{border-bottom:1px #666 solid}
            .m3m li{margin-top: 10px;
                margin-bottom: 10px;}
            .m3m li a{
                color:#666;


            }
        </style>
        <script>
            function f1(){
                $('#navContent2').slideUp();
                $('#navContent3').slideUp();
                $('#navContent4').slideUp();

                $('#navContent1').slideToggle();
            }
            function f2(){
                $('#navContent1').slideUp();
                $('#navContent3').slideUp();
                $('#navContent4').slideUp();

                $('#navContent2').slideToggle();
            }

            function f4(){
                $('#navContent1').slideUp();
                $('#navContent2').slideUp();
                $('#navContent3').slideUp();

                $('#navContent4').slideToggle();
            }

        </script>



        </div>
        </div>
        </body>
        </html>

        <?php
		require('../../../footer.php');
		
		?>
<!-- script resource-->


	</body>

</html>