<?php
include_once ("config.php");
class infohelper{
	public static function SetInfo($info){
		$id = $info -> id;
		$title = $info -> title;
		$start_date = $info -> start_date;
		$end_date  = $info-> end_date;
		$image= $info -> image;
		$description = $info -> description;
		$website = $info -> website;
		$place = $info-> place;
		$sql = "insert into ex_info(id,title,start_date,end_date,image,description,website,place,place_en) values('$id','$title','$start_date','$end_date','$image','$description','$website','$place','$place_en')";
		$rtn = mysql_query($sql) or die ($sql . mysql_error());
	}
	public static function GetInfoList(){
		$sql = "select * from ex_info  order by start_date asc";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
            return $rtn;
        }
	}
	public static function GetMonth($date_year){
		$sql = "select date_month from ex_info where date_year = '".$date_year."' order by start_date asc Limit 0,1";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
		while($row = mysql_fetch_row($rtn)){
			return $row[0];
		}

	}
	
	public static function GetYear(){
		$sql = "select date_year from ex_info order by start_date asc Limit 0,1";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
		while($row = mysql_fetch_row($rtn)){
			return $row[0];
		}

	}
	
	
	
	public static function GetNumberofYear(){
		$sql = "select count(distinct date_year) from ex_info";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
		        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
		while($row = mysql_fetch_row($rtn)){
			return $row[0];
		}
	}
	
	
	public static function GetNumberofMonth($date_year){
		$sql = "select count(distinct date_month) from ex_info where date_year= ".$date_year;
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
		        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
		while($row = mysql_fetch_row($rtn)){
			return $row[0];
		}
	}
	public static function GetCity(){
				$sql = "select distinct place from ex_info  order by place_en asc";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
			return $rtn;
	}
	public static function GetNumberofCity(){
				$sql = "select count(distinct place_en) from ex_info ";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
		        if ($TotalRecord == 0) {
            return null;
        } else {
        	
        }
		while($row = mysql_fetch_row($rtn)){
			return $row[0];
		}
	}
	
	public static function Getinfobydatemonth($date_month,$date_year){
		$sql = "select * from ex_info where date_month ='".$date_month."' and date_year = '".$date_year."'  order by start_date asc";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
            return $rtn;
        }
	}
	
	public static function Getinfobycity($place){
		$sql = "select * from ex_info where place ='".$place."'  order by start_date asc";
		$rtn = mysql_query($sql) or die($sql . mysql_error());
		$TotalRecord = mysql_num_rows($rtn);
        if ($TotalRecord == 0) {
            return null;
        } else {
            return $rtn;
        }
	}	
}
?>