<?php
include('header.php');
include('dbcon.php');
?>

</head>
<script type="text/javascript">
function formSuccess()
{
   var x = document.forms["save_voter"]["Age"].value;
    if (x < 18) {
        alert("Voter must be 18 years and above");
        return false;
    }
else
  {
  alert("Voter Successfully Added");
  }
}
</script>


<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
<div class="navbar">
	<div class="navbar-inner">
	<div class="container">	
	<ul class="nav nav-pills">
	  <li>....</li>
	  <li><a href="index.php"><i class="icon-home icon-large"></i>Home</a></li>
	
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
	
	</div>
	</div>
	</div>
	
	<div id="element" class="hero-body">
                 <p><font color="white"><h2>Register Here</h2></font></p>

	<form method="POST" id="save_voter" class="form-horizontal" action="save_voter.php" enctype="multipart/form-data" onSubmit="return formSuccess()">
	<input type="hidden" class="pc_date" name="pc_date"/>
	<input type="hidden" class="pc_time" name="pc_time" />
	<input type="hidden" name="user_name" class="user_name" value="regularuser"/>
	
    <fieldset>
 	  
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
	<div class="control-group">
    <label class="control-label" for="input01">Firstname:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Lastname:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Middlename:</label>
    <div class="controls">
   <input type="text" name="Section" class="Section">
    </div>
    </div>
	
<div class="control-group">
    <label class="control-label" for="input01">Age:</label>
    <div class="controls">
   <input type="text" name="Age" class="Section">
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01" >State of Origin:</label>
    <div class="controls">
   <select name="Year" class="Year" id="span2">
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
    <label class="control-label" for="input01">Username:</label>
    <div class="controls">
  <input type="text" name="UserName" class="UserName">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
  <input type="Password" name="Password" class="Password">
    </div>
    </div>

<div class="control-group">
    <label class="control-label" for="input01">Photo:</label>
    <div class="controls">
 <input type="file" name="image" class="font"> 
    </div>
    </div>



<div class="control-group">
    <label class="control-label" for="input01"></label>
    <div class="controls">
 <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><a href='javascript: refreshCaptcha();'></a>
						<br /><small>If you are a Human Enter the code above here :</small><input id="6_letters_code" name="6_letters_code" type="text" class="form-control input-sm" width="20"></p>
    </div>
    </div>



<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
    </fieldset>
    </form>
	
	
    </div>
    </li>
    </ul>
	
	<?php include('footer.php'); ?>	
	</div>
	</div>
	</div>
		
	
	
</div>

</body>
</html>

