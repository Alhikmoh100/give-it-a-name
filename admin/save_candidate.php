<?php
include('dbcon.php');
if (isset($_POST['save'])){


$rfirstname=$_POST['rfirstname'];
$rlastname=$_POST['rlastname'];
$rgender=$_POST['rgender'];
$ryear=$_POST['ryear'];
$rposition=$_POST['rposition'];
$rmname=$_POST['rmname'];
$party=$_POST['party'];
$user_name=$_POST['user_name'];
$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

			
	if ($rposition=="President"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','a')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}

//


	if ($rposition=="Governor"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','b')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}



	if ($rposition=="1st Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','c')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}

//
	if ($rposition=="2nd Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','d')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}


//


	if ($rposition=="3rd Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','e')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}
//




	if ($rposition=="4th Year Representative"){
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
			$location="upload/" . $_FILES["image"]["name"];
			
			
mysql_query("insert into candidate (FirstName,LastName,Year,Position,Gender,MiddleName,Photo,Party,abc)
			values('$rfirstname','$rlastname','$ryear','$rposition','$rgender','$rmname','$location','$party','f')") or die(mysql_error());		


mysql_query("INSERT INTO history (data,action,date,user)VALUES('$rfirstname $rlastname', 'Added Candidate', NOW(),'$user_name')")or die(mysql_error());

header('location:candidate_list.php');
}



}
?>