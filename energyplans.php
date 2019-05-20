
<?php 
require 'database.php';
 
$resi = strval($_GET['resi']);
$ac = strval($_GET['ac']);
$uh = strval($_GET['uh']);
$eh = strval($_GET['eh']);
  

$cost1sql = "SELECT cost1 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$cost2sql = "SELECT cost2 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$cost3sql = "SELECT cost3 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";

$provider1sql = "SELECT provider1 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$provider2sql = "SELECT provider2 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$provider3sql = "SELECT provider3 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";

$link1sql = "SELECT link1 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$link2sql = "SELECT link2 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";
$link3sql = "SELECT link3 FROM `energydb` Where residents='$resi' and airconditioner='$ac' and electricheater='$eh' and underfloorheating='$uh'";


					$cost1sqll = mysqli_query($con, $cost1sql);
					$cost1sqlll = mysqli_fetch_assoc($cost1sqll);
					$cost1sql4 = implode(',',$cost1sqlll);
					
				    $provider1sqll = mysqli_query($con, $provider1sql);
					$provider1sqlll = mysqli_fetch_assoc($provider1sqll);
					$provider1sql4 = implode(',',$provider1sqlll);
					
					$link1sqll = mysqli_query($con, $link1sql);
					$link1sqlll = mysqli_fetch_assoc($link1sqll);
					$link1sql4 = implode(',',$link1sqlll);
					
					$cost2sqll = mysqli_query($con, $cost2sql);
					$cost2sqlll = mysqli_fetch_assoc($cost2sqll);
					$cost2sql4 = implode(',',$cost2sqlll);
					
					$provider2sqll = mysqli_query($con, $provider2sql);
					$provider2sqlll = mysqli_fetch_assoc($provider2sqll);
					$provider2sql4 = implode(',',$provider2sqlll);
					
					$link2sqll = mysqli_query($con, $link2sql);
					$link2sqlll = mysqli_fetch_assoc($link2sqll);
					$link2sql4 = implode(',',$link2sqlll);
					
					$cost3sqll = mysqli_query($con, $cost3sql);
					$cost3sqlll = mysqli_fetch_assoc($cost3sqll);
					$cost3sql4 = implode(',',$cost3sqlll);
					
					$provider3sqll = mysqli_query($con, $provider3sql);
					$provider3sqlll = mysqli_fetch_assoc($provider3sqll);
					$provider3sql4 = implode(',',$provider3sqlll);
					
					$link3sqll = mysqli_query($con, $link3sql);
					$link3sqlll = mysqli_fetch_assoc($link3sqll);
					$link3sql4 = implode(',',$link3sqlll);
					
	echo nl2br("The Best energy plans based on your preferences are:\n");
	echo "Plan by " ;
	echo($provider1sql4);
	echo " for $";
	echo ($cost1sql4);
		echo nl2br("\n");
	echo '<a href="'.$link1sql4.'">Click here</a>' . "\n";
		echo nl2br("\n");
	echo "Plan by ";
	echo($provider2sql4);
	echo " for $";
	echo($cost2sql4);
		echo nl2br("\n");
	echo '<a href="'.$link2sql4.'">Click here</a>' . "\n";
		echo nl2br("\n");
	echo "Plan by ";
	echo($provider3sql4);
	echo " for $";
	echo($cost3sql4);
	echo nl2br("\n");
	echo '<a href="'.$link3sql4.'">Click here</a>' . "\n";
		echo nl2br("\n");
?> 