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
								<h3>Insert Student Info</h3> <h3 style="float:right">
								<a href="student_view.php" class="btn btn-info" role="button" style="float:right;">Student View</a>
							</h3><br>
								<?php
    if(isset($_SESSION['message'])){
      
		echo "<h4 style='color:green;'>".$_SESSION['message']."</h4>";
        unset($_SESSION['message']);
    }
?>
			

			
   				
								
								
							</div>
							<div class="module-body">

								




									

									  <?php
          if (empty($_REQUEST['edit'])) {
            $edit_record = '';
          } else {
            $ed = $_REQUEST['edit'];
          
		  $fetchdata= new studentfunction();
		 $sql=$fetchdata->view_student_details($ed);
		  
       $row=mysqli_fetch_array($sql);
       $id= $row['id'];   
	 $name1= $row['name'];$name2= $row['email'];$name3= $row['contact'];$name4= $row['e_code'];
	 $name5= $row['course_name'];$name6= $row['address'];
		   }
          ?>


<form class="form-horizontal row-fluid" action="pages/action_student.php" method="get" enctype="multipart/form-data">
<div class="control-group">
<label class="control-label" for="basicinput">Student Name</label>
<div class="controls">
<input type="text"    name="name"  placeholder="Enter Name" class="span8 tip" 
 value="<?php
              if (!empty($name1)) {
                echo $name1;
              }
              ?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Enter Email" class="span8 tip" 
value="<?php
              if (!empty($name2)) {
                echo $name2;
              }
              ?>" required>

</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Mobile NO</label>
<div class="controls">
<input type="text"    name="mno"  placeholder="Enter Mobile No" class="span8 tip" 
value="<?php
              if (!empty($name3)) {
                echo $name3;
              }
              
              ?>" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Enrolment Code</label>
<div class="controls">
<input type="text"    name="e_code"  placeholder="Enter Code" class="span8 tip" 
value="<?php
              if (!empty($name4)) {
                echo $name4;
              }
              
              ?>" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Course Name</label>
<div class="controls">
<input type="text"    name="course"  placeholder="Enter course name" class="span8 tip" 
value="<?php
              if (!empty($name5)) {
                echo $name5;
              }
              
              ?>" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<textarea  name="address"  placeholder="Enter Product Description" rows="6" class="span8 tip">
<?php if (!empty($name6))

{echo $name6;}?>
</textarea>  
</div>
</div>





<div class="control-group">
<label class="control-label">Gender</label>
	 <div class="controls">
	<input type="radio"  name="gender"value="male" <?php if(!empty ($row['gender'])) { if($row['gender']=='male') { echo 'checked';}}?> >MALE
	
	
	
	
    <input type="radio"  name="gender" value="female" <?php if(!empty ($row['gender'])) { if($row['gender']=='female') { echo 'checked';}}?> >FEMALE
</div>
</div>



		   

	
			
            <div class="form-group">
              <?php if (!empty($_REQUEST['edit'])) { ?>
                <input type="submit" name="submit" id="submit" value="update" class="btn btn-success" onClick="return confirm('Are You Sure want to update??')" >
                <input type="hidden" name="fm_id" value="<?php echo $id; ?>">
              <?php } else { ?>
                <input type="submit" name="submitf" id="submit" value="Submit" class="btn btn-success" onClick="return confirm('Are You Sure want to submit??')" >
                <input type="hidden" name="submit" value="addstudent" />
              <?php } ?>
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