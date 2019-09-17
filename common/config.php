<?php
	
		 $dbhost = "localhost";
		$dbuser = "giobserv_fang";
		$dbpw = "Shaq198946!";
		$dbname = "giobserv_fang";
	
	mysql_connect($dbhost, $dbuser,$dbpw) or die ('数据库连接错误'.mysql_error());
	mysql_select_db($dbname) or die ('数据库不存在');
	//mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
	mysql_query("set names 'utf8'");
?>