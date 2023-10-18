<?php 
require_once("includes/config.php");
if(!empty($_POST["addharno"])) {
	$addharno= $_POST["addharno"];
	
		$result =mysqli_query($con,"SELECT addharno FROM users WHERE addharno='$addharno'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Addhar no already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Addhar no available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>