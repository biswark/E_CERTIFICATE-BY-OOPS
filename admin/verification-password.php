<?php
session_start();
ob_start();
include('include/config.php');
include('include/db.php');
include('include/studentfunction.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	



?>




<?php

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	
	$objStudent= new studentfunction();
		$objStudent->set_username($username);

		 //property $name comes from form
		
		$res = $objStudent->view_admin_detail($username);
		$rowss=mysqli_fetch_array($res);
		$point=$rowss['password'];
		
     
	
if($_SESSION['alogin'] === $_POST['username'])
{
$extra="change-password.php";



header("location:http:$extra?password=$point");
exit();
}
else
{
	$_SESSION['message2']="Please check your username ??";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Insert Student Info</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">

	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<style>
.control-label{color:black;}

</style>

</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Email Verification Password </h3> <h3 style="float:right">
								 
							</h3><br>
								<?php
    if(isset($_SESSION['message'])){
      
		echo "<h4 style='color:green;'>".$_SESSION['message']."</h4>";
        unset($_SESSION['message']);
    }
	 if(isset($_SESSION['message2'])){
      
		echo "<h3 style='color:red;float:right;margin-top:-25px'>".$_SESSION['message2']."</h3>";
        unset($_SESSION['message2']);
	 }
?>
			

			
   				
								
								
							</div>
							<div class="module-body">

								




									



<form class="form-horizontal row-fluid" action="verification-password.php" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="username"  placeholder="Enter Email/username" class="span8 tip" 
required>

</div>
</div>


			
            <div class="form-group">
              
                <input type="submit" name="submit" id="submit" value="submit" class="btn btn-success" onClick="return confirm('Are You Sure want to submit??')" >
             
            
            </div>
          </form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	
<?php } ?>