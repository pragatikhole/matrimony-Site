<?php

include "dbConn.php"; // Using database connection file here

$Email = $_GET['Email']; // get Email through query string

$qry = mysqli_query($db,"select * from student where Email='$Email'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
$Password=$_REQUEST['Password'];
$Education=$_REQUEST['Education'];

$phone=$_REQUEST['phone'];

	
    $edit = mysqli_query($db,"update student set Password='$Password', Education='$Education',  phone='$phone'where Email='$Email'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:all_records.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($db);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
    <input type="text" name="Password" value="<?php echo $data['Password'] ?>" placeholder="Enter Password" Required>
  <input type="text" name="Education" value="<?php echo $data['Education'] ?>" placeholder="Enter Education" Required>
  <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter Phone Number" Required>
  
  <input type="submit" name="update" value="Update">
</form>
