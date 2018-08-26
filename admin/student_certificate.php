
<?php
session_start();
include('include/config.php');
include('include/db.php');
include('include/studentfunction.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else {
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Category</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	
	</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>	

									  <?php
          if (empty($_REQUEST['edit'])) {
            $edit_record = '';
          } else {
            $ed = $_REQUEST['edit'];
          
		  $fetchdata= new studentfunction();
		 $sql=$fetchdata->view_student_details($ed);
		  
       $row=mysqli_fetch_array($sql);
	   
         
	 $name1= $row['name'];$name2= $row['email'];$name3= $row['contact'];$name4= $row['e_code'];$name5= $row['course_name'];
	 $name6= $row['address'];
		   }
          ?>










			
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>E Certificate Generate</h3>
							
							</div>
							<div class="module-body">

    <div id="dvContainer">
		
						<div  style="width:780px; height:580px; padding:20px; text-align:center; border: 10px dotted #787878">
<div style="width:735px; height:530px; padding:20px; text-align:center; border: 5px solid #d6a371"><br>
       <span style="font-size:50px; font-weight:bold;color:#f441b8;">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px;"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px;border-bottom:1px solid black;"><b><?php
              if (!empty($name1)) { echo $name1;} ?></b></span><br/><br/>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px;border-bottom:1px solid black;"><b><?php if (!empty($name5)) { echo $name5;} ?></b></span> <br/><br/>
       <span style="font-size:20px;">from our institute of <b>DishaPRO</b></span> <br/><br/>
       <span style="font-size:25px;"><i>dated</i></span><br><br>
      <span style="font-size:30px;border-bottom:1px solid black;">5TH MARCH</b></span> <br/><br/>
     <span style="font-size:30px;color:green;"><i>CERTIFIED INSTRUCTOR</i></span> <br/>
	 <span style="font-size:30px">Certificate Code <b style="border-bottom:1px solid black;"><?php
              if (!empty($name1)) { echo $name4;}?></b></span><br/>
	 <span style="font-size:25px;float:right;"><i></i></span>
	 

</div>			
			
			
			
							</div>
	
	

	
	
	
    </div>
  
  
									
									

							</div>
						</div>
						
					



	<div class="module">
							<div class="module-head">
								<div id="editor"></div>
								<h3>
						  <input type="button" value="Print Div Contents" id="btnPrint" />		
								<a href="#" style="float:right;"data-toggle="modal"class="btn btn-info" data-target="#myModal3">
		<i class="fa fa-pencil-square-o" aria-hidden="true">
		</i> Send Mail</a></h3>			
							
							</div>
							<div class="module-body table">
								
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	
		<!-- PDF CONVERTER SCRIPT-->
			  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=500,width=800');
          
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
				  
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
	
	
	

   <?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	
   </body>
					
		
					
					
					
					
					
					
					<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="shopkinfo_sign">Mail Form</h3>	
																			<div class="login-form">
																				<form method="post" action="mail.php" enctype="multipart/form-data" class="attachment-form">
																				<label style="text-align:left;color:black;">Email</label>
																				   <input type="email" name="email" placeholder="email" required="">
																				   <label style="text-align:left;color:black">Subject</label>
																					<input type="text" name="subject" placeholder="Type something" required=""> 
																					<label style="text-align:left;color:black">Message</label>
																					<input type="text" name="msg" placeholder="Type something" required="">
																				<label style="text-align:left;color:black">Attachment File</label>
																				   <input type="file" name="file"/><br>
                                                                                    <input type="submit" name="submit" value="Send"/>
																				   	
																					<div class="clearfix"></div>
																					
																					
																					
																					 
																					
																				</form>
																			</div> 
																		</div>
																</div>
															</div>
														</div>
													</div>
											

<?php } ?>