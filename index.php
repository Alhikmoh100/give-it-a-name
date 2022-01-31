<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
 ?>
</head>
<body>

	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/cam.jpg" width="100" height="80">
 	</a>
	<a class="brand">
	 <h2>Voters Card System</h2>
	 <div class="chmsc_nav"><font size="4" color="white">Independent National Electoral Commission</font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper_admin">
</br>
</br>
</br>


	<div id="element" class="hero-body-index">

	<p><font color="white"><h2>Voter Registration</h2></font></p>
	
	<form method="POST" >
	<table>
    <tr><td><font color="#000000">Username:</font>&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName_hover"></td></tr>
	<tr><td>.<td></tr>
    <tr><td><font color="#000000">Password:</font>&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password_hover"></td></tr>
	<tr><td>.<td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Login"><i class="icon-ok icon-large"></i>&nbsp;Login</button>
	<tr><td></td><td>	<a class="brand" href="new_voter.php">Click Here to Register</a>
	
	
	</td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	<div class="error">
			<?php

if (isset($_POST['Login'])){

$UserName=$_POST['UserName'];
$Password=$_POST['Password'];

$login_query=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted'") or die(mysql_error());
$login_query3=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted'") or die(mysql_error());
$login_query4=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted'") or die(mysql_error());
$login_query5=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Unvoted'") or die(mysql_error());
//
$login_query1=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Voted'");
$login_query2=mysql_query("select * from voters where Username='$UserName' and Password='$Password' and Status='Voted'");
$count=mysql_num_rows($login_query);
$count1=mysql_num_rows($login_query1);
$count3=mysql_num_rows($login_query3);
$count4=mysql_num_rows($login_query4);
$count5=mysql_num_rows($login_query5);
$row=mysql_fetch_array($login_query);
$row3=mysql_fetch_array($login_query3);
$row4=mysql_fetch_array($login_query4);
$row5=mysql_fetch_array($login_query5);
$id=$row['VoterID'];
?>
<?php 
if($count == 1){
session_start();
$_SESSION['id']=$row['VoterID'];
header('location:voting.php');
}
if($count3 == 1){
session_start();
$_SESSION['id']=$row3['VoterID'];
header('location:voting.php');
}
if($count4 == 1){
session_start();
$_SESSION['id']=$row4['VoterID'];
header('location:voting.php');
}
if($count5 == 1){
session_start();
$_SESSION['id']=$row5['VoterID'];
header('location:voting.php');
}
if($count1 == 1){ ?>
	<div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   You Can Only Vote Once
    </div>
<?php
}else{ ?>
<div class="alert alert-error">
    <button class="close" data-dismiss="alert">×</button>
   Please check your username and password
    </div>

	<?php 
	}
?>

<?php
}

?>
</div>
</div>
</br>
</br>
</br>
</br>
</br>

	<?php include('footer.php')?>	
</div>

    </body>
	
</html>
																				
											
	