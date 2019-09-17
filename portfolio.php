<?php 
include_once("common/config.php");
include_once("common/info.php");
include_once("common/infohelper.php");
$current_year=date("Y");

$current_month=date("m");

$info = infohelper::GetInfoList();

$info_year = infohelper::GetYear();

$info_year_number = infohelper::GetNumberofYear();

$citylist = infohelper::GetCity();
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,300italic" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>展会信息|德国工业观察</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="js/woothemes-FlexSlider-06b12f8/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="js/prettyPhoto_3.1.5/prettyPhoto.css" type="text/css" media="screen">
<link rel="stylesheet" href="js/isotope/css/style.css" type="text/css" media="screen">
<link href="style2.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" media="screen">
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">
<link rel="shortcut icon" href="company_logo.png">
<style type="text/css">
 .card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
td{
	padding: 2px;
}
</style>
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<script type="text/javascript">
var xmlHttp;
function createXMLHttpRequest(){
 if(window.ActiveXObject){
  xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
 }
 else if(window.XMLHttpRequest){
  xmlHttp = new XMLHttpRequest();
 }
}
function ordbytime(){
 var a = window.event.srcElement.innerText;
  var b = a.substring(5,a.length-1);
 var c = a.substr(0,4);
 createXMLHttpRequest();
  var url="common/getinfobytime.php?date_month="+b+"&date_year="+c;
 xmlHttp.open("GET",url,true);
 xmlHttp.onreadystatechange = callback;
 xmlHttp.send(null);
// document.getElementById("tag2").removeAttribute("class","active");
// document.getElementById("tag1").setAttribute("class","active");
}
function ordbycity(){
 var a = window.event.srcElement.innerText;
 createXMLHttpRequest();
 var url="common/getinfobycity.php?place="+a;
 xmlHttp.open("GET",url,true);
 xmlHttp.onreadystatechange = callback;
 xmlHttp.send(null);
// document.getElementById("tag1").removeAttribute("class","active");
// document.getElementById("tag2").setAttribute("class","active");
}
function callback(){
 if(xmlHttp.readyState == 4){
  if(xmlHttp.status == 200){
   document.getElementById("info").innerHTML = xmlHttp.responseText;
  }
 }
}
</script>

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="apple-touch-fa-57x57-precomposed.png">
<link rel="shortcut icon" href="favicon.png">
    </head>
<body>
<header>
     <div class="container">
          <div class="navbar navbar-default " role="navigation">
          	<div class="container-fluid">
               <div class="navbar-header">
               	<a class="navbar-brand" href="index.html"> 
               		<img src="images/company_logo.png" alt="Company logo" height="90" width="90"/>
               			<span class="logo_title" style="font-size: x-large" > 德国工业观察</span> 
                    <span class="logo_subtitle" style="font-size: large" >欧洲市场营销解决方案</span>
               	</a>               	</a>
               	<a class="btn btn-navbar btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               		<span class="nb_left pull-left"> 
               		<span class="fa fa-reorder">              			
               		</span>
               		</span> 
               		<span class="nb_right pull-right">menu</span> 
               	</a>
               </div>
               <div class="collapse navbar-collapse">
                    <ul class="nav pull-right navbar-nav">
                         <li><a href="index.html">首页</a></li>
                         <li><a href="about_us.html">关于我们</a></li>
                         <li><a href="services.html">服务</a></li>  
                         <li><a href="blog.html">工业报道</a></li>
                         <li class="active"><a href="portfolio.php">展会信息</a></li>
                         <li><a href="contact.html">联系我们</a></li>
                         <!--<li><input type="text" placeholder="请输入关键字"/>
                            	<button class="btn btn-primary">搜索</button>
                         </li>
                       -->
                         
                         <!--
                         <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="home_alternative.html">Home Alternative</a></li>
                                   <li><a href="page_alternative.html">Page Alternative</a></li>
                                   <li><a href="gallery.html">Portfolio Masonry</a></li>
                                   <li><a href="portfolio_item.html">Portfolio Item</a></li>
                                   <li><a href="portfolio_item_2.html">Portfolio Item II</a></li>
                                   <li><a href="single_post.html">Single Post</a></li>
                                   <li><a href="404.html">ERROR 404</a></li>
                                   <li><a href="register.html">登陆|注册</a></li>
                                   <li><a href="elements.html">Design Elements</a></li>
                                   <li><a href="documentation/index.html">Documentation <span class="label label-danger">new</span></a></li>
                              </ul>
                         </li>
                         -->
                    </ul>
               </div>
          </div>
          <!--<div id="social_media_wrapper"> <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/leonartgr"><i class="fa fa-twitter"></i></a> <a href="#googleplus"><i class="fa fa-google-plus"></i></a> </div>
          <div id="sign"><a href="register.html"><i class="fa fa-user"></i><span>登陆|注册</span></a></div>-->
     </div>
</header>
<div class="main">
     <section class="hgroup">
          <div class="container">
               <h1>德国展会一览</h1>
               
               <ul class="breadcrumb pull-right">
                    <li><a href="index.html">首页</a> </li>
                    <li class="active">展会信息</li>
               </ul>
          </div>
     </section>

    
</div>
 <div class="container">
    <section>
  
       <!-- Single button -->
<div class="btn-group">
  <button  type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    按照时间排列 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" >
  	<?php 
  	while($info_year_number>0){
  			$info_month = infohelper::GetMonth($info_year);
  			$info_month_number = infohelper::GetNumberofMonth($info_year);
   					while($info_month_number>0){
        	?>
    <li ><a onclick="ordbytime()"><?php echo $info_year?>年<?php echo $info_month?>月</a></li>
	<?php

				$info_month_number--;
			$info_month++;
			}
			$info_year_number--;
			$info_year++;
						}

?>
  </ul>
    </div>
       <div class="btn-group">

    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    按照城市排列<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  	<?php
  	while($cityarray = mysql_fetch_object($citylist)){
  		$placelist = $cityarray->place;
  	?>
    <li><a onclick="ordbycity()"><?php echo $placelist?></a></li>
	<?php
	}
    ?>
  </ul>
</div>
      </section>
       <br>
       	<br
    <section>
    
    <!--<div class="row">
    <ul class="nav nav-pills  nav-justified" >
  <li role="presentation" class="active" id="tag1"><a  onclick="ordbytime()">按时间排列</a></li>
  <li role="presentation" id="tag2"><a  onclick="ordbycity()">按城市排列</a></li>
 </ul>
 	</div>-->
 	<br>
 		<br>
        
        </section>
  </div>
        <div id="info">

    <section>
        <div class="container text-center">
        <ul class="nav nav-tabs allign-center">

  <li role="presentation" class="active" ><a href="#"><?php echo $current_year?>年<?php echo $current_month?>月</a></li>
</ul>
    <br>
<?php
$sql = "select * from ex_info where date_month ='".$current_month."' and date_year = '".$current_year."' order by start_date ASC";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
	while($infoarray = mysql_fetch_object($rtn)){
	$id = $infoarray -> id;

	$title = $infoarray -> title;
	$start_date = $infoarray -> start_date;
	$end_date = $infoarray -> end_date;
	$image = $infoarray -> image;
	$description = $infoarray -> description;
	$website = $infoarray -> website;
	$place = $infoarray -> place;
	?>
<div class="container">	
<div style="border: 1px;"  class="card-1" align="center">
  <table  style="border: none; width: 100%;">
  	<tbody>
  <tr> 
    <td rowspan="5" width="30%" align="center"><img style="width: 140px;height: 80px;" src="<?php echo $image;?>"  alt="<?php echo $place;?>"  /></td>

  </tr>
  	<div class="row">
      <tr>
			<td width="40%" align="left" style="padding-left: 20px;">
				<h3 style="color: #428bca;">
					<span><b><?php echo $title;?></b></span>
				</h3>
			</td>
			<td width="30%" align="left">
				<h4 style="color: #428bca;">
					<span><?php echo $start_date;?>到<?php echo $end_date;?></span>
				</h4>
			</td>

  </tr>
  </div>
  <div class="row">
  	<tr>
  	
    <td align="left">
    	<img class="icon icons8-Label" hspace="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABXUlEQVRIS+2W0VHCQBCG/83xLp2YmyzvUIF2IHSAHViCViBWIB2Az1wmsQPtIL5zs846hAkZhAxc4AHuJXm47Df73e5eCGdadCYuruCTmb9g1YvF4imKIgnhWkQKZn7ZFWut2jkXBFrCiOgxSZLn/+B18LeITI7NmojGAG6IaJQkydZ4G2AR+ej1ev1jwc65ewDvAApjzMBam9djtgJWSJqmQxF5XcGttfarCm8NrBDnnGp+EJG80+lo5sW6BsoXLa5QqquZOeemAO4AzJl50Bo4y7LYez8DMGLmaZZlXe/9HMAtgAkzjxQeXPUKrFmOS/ByuZwRUQzgjZmHrYDr1Vuqrh9j8Ixr5/tXXAA+jTH9kxRXpZ1+jDHxSdqpMkAUqpnuHSC5MUbH3cHLe98lIlWsz2Yj82Dalg8bXxJ6LYYCR1FU7LqZNtopFLRpnAv+9WmqKNS+q+pQJvfG+QXU99kfCm3OSwAAAABJRU5ErkJggg==" width="30" height="30">
    	<?php echo $description;?></td>
    
    </tr>
  </div>
  <div class="row">
  	 <tr>
    
    <td align="left">
    	<img class="icon icons8-Marker" hspace="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAC1ElEQVRIS61X0XHaQBDdneU/poLgCoxGp3+oIKQC00FwBZAKjCsIqSCkApxvnUa4AkgFcQHSbGaZFSPOd9LhRD/MSHf77u2+fXsgXPmUZXnDzHd1Xd/IViJ6RcSXJElerwmFsYvzPJ8g4hcAmOmeF/29098tMz9lWfYcE7MXWBjWdf0IAHMA+E5E6yRJ9u3gZVmO67peAMA9AGyI6KEvA53AAlpV1Q4RkYhmSZIcu9iUZTmq61qY82AwmHaBdwJba7cAMCKiSR+D5kCaIUn3wRjzOXTQIHBRFHNmXhPRKBa0BS7MpRxzY4wc/s0TBLbWHpl5k2XZyt0lKa2q6iSqwWDwy3ewPM9XiHhvjLmNBlaxlEQ0dINqwCUA/NaAHxFxlabpV0dwIso/RHTr04aXcVEUC2aWNI3bwfT9iplnTdtom20VfN1eb63dI+ImTdOL97LGCyysAGCSZdnECSRmsUjTdOMcSPTwaIwZtt/neS4ie/aVKwiMiCNjjPTu6dFWOfjSr0p+k1Zr7YaZj1cBu4xDwbsO9R7GYo/fXEVKzSR1xhhxqfNjrV0z89hXmrYe2nu8qQ6pWt9L3XbSaieRIEo5pmoyZyttZShxLTYoLvkgfaxKvRCS1lpU2ih+T0QLt2XUgFbGmFF0HyuwBBeBNdPItz/4Tu326Jal2dDlXAL4w6fivhP0pbkz1U26Q7bZBa7uNnMNqFdczQKt0zLktz5wZXtAxAfXaKKBlbXXrUKMla3YrVdUvTVusRbfXqrZd96rYtn21rgB7xqRjpGIRY5cI7mqndqLdQLtQiNObVPuXSUzT2MufL2XvRZruUl8MMZMfQxCdhrSQjSw1q9xs4v52giKiMax16RoYFV4Yypn/218PTbF0ap2UyWTCAA+EVEi36SuAPAzZI3/nGpHvTKFDgAgf2OGXQ71X4F1Qp1G4Huuv9F9HLDG01j0zdq+ISLf/wKfX9wu7/OCuQAAAABJRU5ErkJggg==" width="30" height="30">
    	<?php echo $place;?></td>
    	
    	</tr>
  </div>
    
   <div class="row">
   	<tr>
    <td align="left">
    	<img class="icon icons8-Home" hspace="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABdklEQVRIS+3W0U3DMBAG4N9NB+gI3QCs2M+0E8AGdAPYgLIBbAAbwAQtz3bksgEjdIA2hy5qozR1mthBqoTq11z8+RzfxQJnGuJMLqJh59w1L1pKuYpZfBTM6Ha7XTCYJMk0Bg+GK+hol+k6Bg+Ca+j7Dr4HEIx3huuoUmrGsLX2DUAw3gluQveHKgZvhdvQWPwk3BWNwRvhUDQU98KxaAh+BPdFu+IHcA39VErdxbTDCv4B4NZX5yVc70hE9Ky1nveBjTFzIcSTr8OVsLX2BcADgG8AVz7YGLMUQtz4FkNEX1rrSfVZBS7mBPCqlHrkmIOtzrJsluf5jxBi8ZcwEU0Hg8E4TVPucsU4OlzGmEkbzBNprZeVb0mnMq7HX+Bi5y5bXSuPopz+5+ECwNmVJcOZExHfOsa+jAFw/Zd1uovnhjIJKqdTrbIBbnylE+ycG202m+LO3DSGw+FKSrneP+dKCIn3NpA+P4WQd1vvXCGThcSeDf4FYjPqLgmuSY4AAAAASUVORK5CYII=" width="30" height="30">
    	<a href=<?php echo $website;?> target="_blank"><?php echo $website;?></a></td>
		</div>
    </tr>
    </tbody>
</table>
<br>		
	<br>	
		</div>
		</div>
		<br>	
			<br>
				
				<?php		
				
				}
?>

					</div>
       
</section>	

     </div>
</div>        <footer>
          <section class="copyright">
               <div class="container">
                    <div class="row">
                         <div class="col-sm-6 col-md-6"> Copyright ©2016 all rights reserved </div>
                         <div class="text-right col-sm-6 col-md-6"> Designed by GIO </div>
                    </div>
               </div>
          </section>
     </footer>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<script src="js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/snap.svg-min.js"></script>
<script type="text/javascript" src="js/restart_theme.js"></script>
<script type="text/javascript" src="js/collapser.js"></script>
</body>
</html>