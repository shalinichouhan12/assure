<?php
$con=mysqli_connect("localhost","root","","task");
if(!$con)
	die("unable");
else{
	$name=$_POST["name1"];
	$class=$_POST["class1"];
	$email=$_POST["email1"];
	$query="insert into student values('$name','$class','$email')";
	$r=mysqli_query($con,$query);
	if($r)
		echo "done";
	else
		mysqli_error($con);

}
?>