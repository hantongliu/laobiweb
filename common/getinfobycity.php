<?php
include_once("config.php");
include_once("info.php");
include_once("infohelper.php");
$place = $_GET['place'];
$infolist = infohelper::Getinfobycity($place);
?>
<section>
        <div class="container text-center">
        <ul class="nav nav-tabs allign-center">

  <li role="presentation" class="active" ><a href="#"><?php echo $place?></a></li>
</ul>
    <br>
<?php 
while($infoarray = mysql_fetch_object($infolist)){
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
<div style="border: 1px;"  class="card-1"  align="center">
  <table  style="border: none; width: 100%;">
  <tr> 
    <td rowspan="5" width="30%" align="center"><img style="width: 140px;height: 80px;" src="<?php echo $image;?>"  alt="<?php echo $place;?>"  /></td>

  </tr>
  	<div class="row">
      <tr>
			<td width="40%" align="left" style="padding-left: 20px;">
				<h3 style="color: #428bca;"
					<span><b><?php echo $title;?></b></span>
				</h3>
			</td>
			<td width="40%" align="left">
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

