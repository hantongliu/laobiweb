<?php
include_once ("config.php");
$sql = "select * from ex_info  order by start_date ASC";
$rtn = mysql_query($sql) or die($sql . mysql_error());
$TotalRecord = mysql_num_rows($rtn);

?>