<?php
$hear = [];
$err_hear = "";

$hasError = false;
   function exist($h)
{
	global $hear;
	foreach ($hear as $hr)
	{
		if($h == $hr)
			return true;
	}
	
	return false;
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!isset($_POST["hear"]))
	{
		$hasError = true;
		$err_hear = "<b>This part is required to book</b>";
	}
	else
	{
		$hear = $_POST["hear"];
	}
	
	if(!$hasError)
	{
		echo "<h2>Your Gym schedule has been booked to: </h2>";
		$arr = $_POST["hear"];

    foreach($arr as $e)
    {
	echo "<h1>$e</h1><br>";
    }
	}
}

?>


<html>
    <body>
	<h1 > Booking can be done on the previous day before or on the current day </h1>
	<form action="" method="post">
	<table>
	
	
	<tr> <td><h1> Schedules for Gym : </td> 
	<td><h1><input type="checkbox" value= "7am-10am" <?php if (exist("7am-10am")) echo "checked"; ?> name="hear[]"> 7:00am - 10:00am <br>
	
	<h1><input type="checkbox" value= "11am-2pm" <?php if (exist("11am-2pm")) echo "checked"; ?> name="hear[]"> 11:00am - 2:00pm <br>
	
	<h1><input type="checkbox" value= "4pm-7pm" <?php if (exist("4pm-7pm")) echo "checked"; ?> name="hear[]"> 4:00pm - 7:00pm  <br>
	
	<h1><input type="checkbox" value= "7pm-10pm" <?php if (exist("7pm-10pm")) echo "checked"; ?> name="hear[]"> 7:00pm - 10:00pm  </td></tr>
	<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<?php echo $err_hear;?></td>
	</tr>
	
	
	<td align = "right"> <h1><input align = "Right" type="submit" value="Book" > </td> </tr>
	
	<tr><td></td><td><img width="500px" height="500px" src="Gym.jpg"></td></tr>
	
	</table>
	</form>
	
	</body>
</html>