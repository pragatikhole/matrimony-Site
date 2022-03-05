<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<? php
	$con=mysqli_connect("localhost","root",""); 
	if(!$con)
	{
		print("error=".mysqli_error());
	}
	mysqli_select_db("pragati",$con);
	$un=$_REQUEST['uname'];
	$pwd=$_REQUEST['pass'];

	$rs=mysqli_query("select * from login where username=".$un." and password=".$pwd);
	if(mysqli_num_rows($rs)>=1)
	{
		print("Login successful".$rs); give me a min ok
	}
	
	mysqli_close($con);
?>

</body>
</html>