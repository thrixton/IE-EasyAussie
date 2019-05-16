
<?php 
require 'database.php';
 
$data = strval($_GET['data']);
$intercal = strval($_GET['intercal']);
$plan = strval($_GET['plan']);
$contract = strval($_GET['contract']);

if ($data == 2) {
$cost1sql = "SELECT cost1 FROM `data2gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost2sql = "SELECT cost2 FROM `data2gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost3sql = "SELECT cost3 FROM `data2gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
}
elseif ($data == 10) {
$cost1sql = "SELECT cost1 FROM `data10gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost2sql = "SELECT cost2 FROM `data10gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost3sql = "SELECT cost3 FROM `data10gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
}
elseif ($data == 30) {
$cost1sql = "SELECT cost1 FROM `data30gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost2sql = "SELECT cost2 FROM `data30gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
$cost3sql = "SELECT cost3 FROM `data30gb` Where (intcalls='$intercal' and plan='$plan' and contract='$contract')";
}
else {
echo "erroring out";
}
if ($plan ==1){
$contract =0;
}
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