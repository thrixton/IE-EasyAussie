<?php 
require 'database.php';

$internet = strval($_GET['internet']);
$query = "SELECT provider,cost,link FROM internetbill WHERE datagb='$internet'";

$is_query_run = mysqli_query($con,$query);
$query_executed = mysqli_fetch_assoc ($is_query_run);
echo nl2br("The Best internet plans based on your preferences are: \n");
while ($query_executed = mysqli_fetch_assoc ($is_query_run)) 
{ 
$string_product = implode(',',$query_executed);
$values = explode (",",$string_product);
	echo "Plan by " ;
echo $values[0] . "\n";
	echo " for $";
echo $values[1] . "\n";
		$linkaddress = $values[2];
echo '<a href="'.$linkaddress.'">Click here for details</a>' . "\n";
		echo nl2br("\n");
}

?> 