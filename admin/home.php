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
	  <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>Home</a></li>
	  <li><a  href="candidate_list.php"><i class="icon-align-justify icon-large"></i>Candidates List</a></li>  

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
	  <div class="thumbnail_gallery">
                <h2>Our Gallery</h2>
				<p><font color="black">Click the image to view more...</font></p>
				<div id="myGallery" class="spacegallery">
					<img src="images/c10.jpg" alt="" />
					<img src="images/c2.png" alt="" />
					<img src="images/c3.gif" alt="" />
					<img src="images/c4.jpg" alt="" />
					<img src="images/c5.jpg" alt="" />
					<img src="images/c6.jpg" alt="" />
					<img src="images/c7.jpg" alt="" />
					<img src="images/c8.jpg" alt="" />
					<img src="images/c9.jpg" alt="" />
					<img src="images/c1.jpg" alt="" />
            </div>
			</div>
			  <div class="thumbnail_mission">
			  <h2>Mission</h2>
			  <p>Stop multiple or double voting, forgery in any shape or form and smuggling of ballot papers into ballot boxes. 
			  </p>
			   <a class="btn btn-info" data-toggle="modal" href="#mission"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			   	<div class="modal hide fade" id="mission">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	   <h2>INEC Mission</h2>
<p><font color="black">
Generate accurate report of election results using an on-line computer processing system.
</p>	  

	   <h2>INEC Vission</h2>
<p><font color="black">
Eradicate Corruption by conducting free and fair elections.
</p>	 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
	  
		</div>
		</div>
			   
			  </div>
			  
			   <div class="thumbnail_vission">
			   <h2>Objectives</h2><p>Automation</p>
			  <p>1.	Improve the standard of voter registration </p>
<p>2.	Avoid unnecessary delay in voter registration.</p>

			  </p>
			  <a class="btn btn-info" data-toggle="modal" href="#read_objectives"><i class="icon-list-alt icon-large"></i>&nbsp;Read More</a>
			  
			  	<div class="modal hide fade" id="read_objectives">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	  <p><font color="black">3.	Update the voter’s registration roll without bribery and conspiracy. 
	  </font>
	  </p>
	  <p><font color="black">4.	Design a voter registration system which will help to improve the voters system 
	  </font>
	  </p><p><font color="black">5.	Implement an online voter’s registration system
	  </font>
	  </p>
	  <h2>Objectives</h2>
	  <p>Automation</p>
	 <p><font color="black">6. Effectively carryout the task of voting automatically and timely.
	 </p>
	 <p>
	 7. Put to an end the indiscriminate alteration of election results 
	 </p>
	 <p>
	 8. Secure ballot papers and elections results from any accident 
	 </p>
	 <p>9. Promote work experiences which develop and efficient system
	 </p>
	 </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>

		</div>
		</div>
			  </div>
			
	</div>
	<?php include('footer.php')?>	
</div>
</div>
</body>
</html>
