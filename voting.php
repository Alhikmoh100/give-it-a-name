'<link rel="stylesheet" type="text/css" href="admin/css/style.css" />
<?php include('dbcon.php');
include('header.php');
include('session.php');
 ?>
<script src="jquery.iphone-switch.js" type="text/javascript"></script>
<style type="text/css">
#imagelist{
float:right;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}

#imagelist img{
border-radius:6px;
}

</style>
</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	     
		<a class="brand">
		<img src="admin/images/cam.jpg" width="100" height="60">
 	</a>
	<a class="brand">
	 <h2>Voting System</h2>
	 <div class="chmsc_nav"><font size="4" color="white">Independent National Electoral Commission</font></div>
 	</a>

	<?php include('head.php'); ?>
	
	
	<?php
$result = mysql_query("SELECT * FROM voters where VoterID = '$session_id'");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img height="60" width="80" src="'.$row['Photo'].'"></p>';
echo '</div>';
}
?>
	
 
	</div>
	</div>
	</div>
<div class="wrapper">

<div class="hero-body-voting">
<div class="vote_wise"><font color="white" size="6">"Vote Wisely"-Hover your mouse on the picture to see the party</font></div>
<div class="help">
<a class="btn btn-info" id="help"  href="help.php"><i class="icon-info-sign icon-large"></i>&nbsp;Help</a>
</div>
</div>
<form method ="post" action="vote.php">
<div class="gov-align">
<div class="hero-body-candidate_gov">
<font color="white">Candidate for President</font>
</div>
<div class="governor">
<div class="gov-margin">
<?php 
$governor=mysql_query("select * from candidate where Position='President'")or die(mysql_error());
while($row=mysql_fetch_array($governor)){ $governor_id=$row['CandidateID']; ?>

<img class="gov" src="admin/<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('admin/<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName']." "."Party:".$row['Party'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="select_gov">
<div class="margin-gov">
<select name="governor" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$governor=mysql_query("select * from candidate where Position='President'")or die(mysql_error());
while($row=mysql_fetch_array($governor)){ $governor_id=$row['CandidateID']; ?>
<option value="<?php echo $governor_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>



<div class="vice-align">
<div class="hero-body-candidate1">
<font color="white">Candidate for Governor</font>
</div>

<div class="governor">
<div class="gov-margin">
<?php 
$vice=mysql_query("select * from candidate where Position='Governor'")or die(mysql_error());
while($row=mysql_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>

<img class="gov" src="admin/<?php echo $row['Photo'];?>" width="150" height="150" border="0" onMouseOver="showtrail('admin/<?php echo $row['Photo'];?>','<?php echo $row['FirstName']." ".$row['LastName']." "."Party:".$row['Party'];?> ',200,5)" onMouseOut="hidetrail()">
&nbsp;&nbsp;&nbsp;&nbsp;

<?php
}
?>
</div>
</div>
<div class="select_gov">
<div class="margin-gov">
<select name="vice" class="span222">
<option class="option">--Select Candidate--</option>
<?php
$vice=mysql_query("select * from candidate where Position='Governor'")or die(mysql_error());
while($row=mysql_fetch_array($vice)){ $vice_id=$row['CandidateID']; ?>
<option value="<?php echo $vice_id; ?>" class="option"><?php  echo $row['FirstName']." ".$row['LastName']; ?></option>
<?php } ?>
</select>
</div>
</div>
</div>



<div class="thumbnail_widget">

<div class="submit-vote">

	<button id="save_voter"  id="vote" class="btn btn-success" name="save"><i class="icon-thumbs-up icon-large"></i>&nbsp;Submit Vote</button>
</div>
</div>

<div class="thumbnail_widget1">

<div class="submit-vote">

	<a class="btn" id="index" data-toggle="modal" href="#myModal"><i class="icon-circle-arrow-left icon-large"></i>&nbsp;Vote later</a>
</div>
</div>






</form>
</br>

<div class="foot">
	<?php include('footer1.php')?>
</div>	
</div>

    </body>
	
</html>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">?</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to Vote Later?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout_back.php" class="btn btn-success">Yes</a>
		</div>
		</div>		
											
	