<?php
include('dbcon.php');
if (isset($_POST['save'])){

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$UserName=$_POST['UserName'];
$Section=$_POST['Section'];
$Year=$_POST['Year'];
$Password=$_POST['Password'];
//$VoterID=$_POST['VoterID'];

//$pc_date = $_POST['pc_date'];
//$pc_time = $_POST['pc_time'];
$user_name=$_POST['user_name'];

$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			

mysql_query("insert into voters (FirstName,LastName,UserName,Password,Status,Year,MiddleName,Photo)
values('$FirstName','$LastName','$UserName','$Password','Unvoted','$Year','$Section','$location')");

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$FirstName $LastName', 'Added Voter', NOW(),'$user_name')")or die(mysql_error());

header("location: new_voter.php");

}
?>
