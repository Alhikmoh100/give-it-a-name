<?php
include('header.php');
include('dbcon.php');
include('session.php');
?>
</head>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li class="active"><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

	  <li class=""><a  href="voter_list.php"><i class="icon-align-justify icon-large"></i>Voters List</a></li>  
		 <li><a  href="canvassing_report.php"><i class="icon-book icon-large"></i>Canvassing Report</a></li>
		    <li><a  href="History.php"><i class="icon-table icon-large"></i>History Log</a>
		   <li><a data-toggle="modal" href="#about"><i class="icon-exclamation-sign icon-large"></i>About</a></li>
		   <div class="modal hide fade" id="about">
	<div class="modal-header"> 
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <?php include('about.php') ?>
	  <div class="modal-footer_about">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
		<?php $result=mysql_query("select * from users where User_id='$id_session'");
	$row=mysql_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	
	
	<div id="element" class="hero-body">
	
	<form method="POST" action="save_candidate.php" class="form-horizontal" enctype="multipart/form-data">
	<input type="hidden" name="user_name" class="user_name" value="<?php echo $_SESSION['User_Type']; ?>"/>
    <fieldset>
   	       <div class="pagination">
    <ul>

    <li><a href="candidate_list.php"><font color="white">All</font></a></li>
    <li><a href="candidate_for_governor.php"><font color="white">President</font></a></li>
    <li><a href="candidate_for_vice-governor.php"><font color="white">Governor</font></a></li>
    
 
  
    </ul>
	

    </div>

	<div class="pagination">
		  <ul>

    
    <li  class="active"><a href="new_candidate.php"><font color="white"><i class="icon-plus icon-large"></i>Add Candidates</font></a></li>
  
    </ul>
	</div>
	<div class="candidate_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
   
	<div class="control-group">
    <label class="control-label" for="input01">Firstname:</label>
    <div class="controls">
    <input type="text" name="rfirstname" class="rfirstname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Lastname:</label>
    <div class="controls">
    <input type="text" name="rlastname" class="rlastname">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Gender:</label>
    <div class="controls">
   <select name="rgender" class="rgender" id="span2">
	<option>Male</option>
	<option>Female</option>
	
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">State:</label>
    <div class="controls">
   <select name="ryear" class="ryear" id="span2">

 <option>Abuja</option>
<option>Abia</option>
<option>Adamawa</option>
<option>Akwa Ibom</option>
<option>Anambra</option>
<option>Bauchi</option>
<option>Bayelsa</option>
<option>Benue</option>
<option>Borno</option>
<option>Cross River</option>
<option>Delta</option>
<option>Ebonyi</option>
<option>Edo</option>
<option>Ekiti</option>
<option>Enugu</option>
<option>Gombe</option>
<option>Imo</option>
<option>Jigawa</option>
<option>Kaduna</option>
<option>Kano</option>
<option>Kastina</option>
<option>Kebbi</option>
<option>Kogi</option>
<option>Kwara</option>
<option>Lagos</option>
<option>Nasarawa</option>
<option>Niger</option>
<option>Ogun</option>
<option>Ondo</option>
<option>Osun</option>
<option>Oyo</option>
<option>Plateau</option>
<option>Rivers</option>
<option>Sokoto</option>
<option>Taraba</option>
<option>Yobe</option>
<option>Zamfara</option>

	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">MiddleName:</label>
    <div class="controls">
    <input type="text" name="rmname" class="rmnane">
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Position:</label>
    <div class="controls">
   <select name="rposition" class="rposition" id="span22">
	<option>President</option>
	<option>Governor</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Party:</label>
    <div class="controls">
    <input type="text" name="party" class="party">
    </div>
    </div>
	
	
	<div class="control-group">
	<label class="control-label" for="input01">Image:</label>
    <div class="controls">
	<input type="file" name="image" class="font"> 
    </div>
    </div>

	
	
	<div class="control-group">
    <div class="controls">
		<button class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</div>
</body>
</html>
	  