'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
include('session.php');
 ?>
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/cam.jpg" width="60" height="60">
 	</a>
	<a class="brand">
	 <h2>Online Voting System</h2>
	 <div class="chmsc_nav"><font size="4" color="white">Independent National Electoral Commission</font></div>
 	</a>

	<?php include('head.php'); ?>
 
	</div>
	</div>
	</div>
<div class="wrapper">

<div class="hero-body-voting">
<div class="vote_wise1"><font color="white" size="6">"Official Ballot"</font></div>
<div class="back">
<a class="btn btn-info" id="bak"  href="voting.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
</div>
</div>

<div class="hero-body-456">
</div>

<form method="POST">

<?php 

if (isset($_POST['save'])){
$governor=$_POST['governor'];
$vice1=$_POST['vice'];


}

//governor
$result=mysql_query("select * from candidate where CandidateID='$governor'")or die(mysql_query());
$row=mysql_fetch_array($result);
$name=$row['FirstName']."  ".$row['LastName'];
//
//vice-governor
$vice=mysql_query("select * from candidate where CandidateID='$vice1'")or die(mysql_query());
$row_vice=mysql_fetch_array($vice);

$name1=$row_vice['FirstName']."  ".$row_vice['LastName'];
//

 ?>

<div class="ballot">

<div class="cent">
<p>President:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php  echo $name; 
if ($governor == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}
?>



 <input type="hidden" name="gov" value="<?php echo $governor; ?>"/>
 
</div>
</br>
</br>
<div class="cent">
<p>Governor:&nbsp;&nbsp;</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php  echo $name1;
if ($vice1 == "--Select Candidate--"){
echo 'NO Candidate Selected'; 
}

 ?>
 <input type="hidden" name="vice" value="<?php echo $vice1; ?>"/>
</div>
</br>
</br>


</div>


<?php
if (isset($_POST['vote'])){
$gov=$_POST['gov'];
mysql_query("insert into votes (CandidateID)values('$gov')")or die(mysql_error());

$vice=$_POST['vice'];
mysql_query("insert into votes (CandidateID)values('$vice')")or die(mysql_error());



mysql_query("update voters set Status='Voted' where VoterID='$session_id'") or die(mysql_error());

?>

<?php

header('location:thankyou.php');
}
?>

<div class="hero-body-456">
<div class="ok_vote">

		<a class="btn btn-success" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Submit Final Votes</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Submit Final Votes?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
		<button id="save_voter" class="btn btn-success" name="vote"><i class="icon-save icon-large"></i>&nbsp;Yes</button>
		</div>
		</div>
	</div>
</div>



</form>
	<?php include('footer1.php')?>	
</div>

    </body>
	
</html>