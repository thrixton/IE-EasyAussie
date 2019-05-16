
<?php 
require 'database.php';
 
$resi = strval($_GET['resi']);
$ac = strval($_GET['ac']);
$uh = strval($_GET['uh']);
$eh = strval($_GET['eh']);

$cost1sql = "SELECT cost1 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$cost2sql = "SELECT cost2 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$cost3sql = "SELECT cost3 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";


					$cost1sqll = mysqli_query($con, $cost1sql);
					$cost1sqlll = mysqli_fetch_assoc($cost1sqll);
					$cost1sql4 = implode(',',$cost1sqlll);
					
					
					$cost2sqll = mysqli_query($con, $cost2sql);
					$cost2sqlll = mysqli_fetch_assoc($cost2sqll);
					$cost2sql4 = implode(',',$cost2sqlll);
					
					
					$cost3sqll = mysqli_query($con, $cost3sql);
					$cost3sqlll = mysqli_fetch_assoc($cost3sqll);
					$cost3sql4 = implode(',',$cost3sqlll);
					
$totalcost = (floatval($cost1sql4) + floatval($cost2sql4) + floatval($cost3sql4))/3;
	echo round ($totalcost, 2);
    
?> 