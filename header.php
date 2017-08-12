<?php
require ("SetURL.php");
echo '
	    <meta charset="utf-8">
		
		<!-------------CSS------------>
	    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
      
          <link rel="icon" href="http://'.$url.'/assets/img/logo/logo.png" type="image/x-icon">
       
		<link rel="stylesheet" href="http://'. $url.'/assets/css/animate.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/css/dark.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/css/flexslider.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/css/main.css" />

		<link rel="stylesheet" href="http://'. $url.'/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/css/fractionslider.css" />
		<link rel="stylesheet" href="http://'. $url.'/assets/Home/css/footBottom.css?v=1123442" />
		<link rel="stylesheet" href="http://'. $url.'/assets/Home/css/nfb.css?v=1123442" />
		<link rel="stylesheet" href="http://'. $url.'/assets/Home/css/fubei.css?v=1123442">
		<link rel="stylesheet" href="http://'. $url.'/assets/Home/css/index.css?v=1123442" />
		
		<!-------------JS------------>
		
		
		';
	
echo '<header> 
    	<nav id="sticktop" class="navbar navbar-default">
     	 <div class="container">
       	 <ul class="social-fonts">
            <li></li>
            <li ></a></li>
            <li ></a></li>
            <li ></li>
        </ul>
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="#"><div id="logo"></div></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
               
               
               <li class="dropdown active">
               	<a href="http://'. $url.'/getUrl.php?path=index">首页 </a>
               	
               </li>
               <!--<li><a href="#services" class="scrollto">关于挑呗</a></li>
               <li><a href="#profile" class="scrollto">行业解决方案</a></li>-->
               
 <!--=================================
 	
			关于挑呗

=================================-->     

               <li class="dropdown"><a>关于挑呗 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
        
                        <!--  <li><a href="http://'. $url.'/getUrl.php?path=question">公司介绍</a></li>-->
                          <li><a href="http://'. $url.'/getUrl.php?path=question">百问百答</a></li>
                           <li><a href="http://'. $url.'/getUrl.php?path=centrct">联系我们</a></li>
                     <!--  <li><a href="">首展历程</a></li>
                         <li><a href="">百问百答</a></li>
                        
                           <li><a href="">职位招聘</a></li>-->
                  	</ul>
               </li>
                    
               
 <!--=================================
 	
			行业解决方案

=================================-->     
                    
              

               
                
               
               
               
<!--=================================
 	
			产品中心

=================================-->              
         
         
            <!-- 产品中心  -->   
              <li class="dropdown"><a>产品中心 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
                      <li><a class="scrollto" href="http://'. $url.'/getUrl.php?path=project1">挑呗</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=project2">闪电快付</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=project3">挑呗点睛</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=project4">更多产品</a></li>
                  	</ul>
               </li>
               
               
               
               
<!--=================================
 	
			行业解决方案

=================================-->              
         
         
         
               <li class="dropdown"><a>行业解决方案 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
                      <li><a class="scrollto" href="http://'. $url.'/getUrl.php?path=money">收银方案</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=car">智慧停车</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=plane">智慧机场</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=area">智慧商圈</a></li>
                  	</ul>
               </li>
         
         
            
            <li class="dropdown"><a>新型智慧城市 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
                      <li><a href="http://'. $url.'/getUrl.php?path=xmjs">项目背景与介绍</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=zhms">智慧政务与民生</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=xysy">县域商业</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=alhz">案例与合作流程</a></li>
                  	</ul>
            </li>
       
            
            
            
            
            
<!--=================================
 	
			行业解决方案

=================================-->              
               
            
            
            <li class="dropdown"><a>定制开发 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
                      <li><a href="http://'. $url.'/getUrl.php?path=dzlc">定制流程</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=jkkf">支付接口开发</a></li>
                   	</ul>
            </li>
            
            
            
            
            
            
<!--=================================
 	
			合作加盟

=================================-->              
         
            
            <li class="dropdown"><a>合作加盟 <i class="">&crarr;</i></a>
               		<ul class="dropdown-menu">
                      <li><a class="scrollto" href="http://'. $url.'/getUrl.php?path=recruit">伙伴招募</a></li>
                      <li><a href="http://'. $url.'/getUrl.php?path=join">商家合作</a></li>
                   	</ul>
            </li>
            
            
            
            
            
<!--=================================
 	
			资讯

=================================-->              
         
         
         
         
         
             <!-- 
            
             <li class="dropdown"><a>资讯 <i class="icon-caret-down"></i></a>
               		<ul class="dropdown-menu">
                      <li><a class="scrollto" href="#portfolio">行业要文</a></li>
                      <li><a href="portfolio-single.html">挑呗动态</a></li>
                        <li><a href="portfolio-single.html">城市峰会</a></li>
                   	</ul>
            </li>
            
              -->
            
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
';

?>