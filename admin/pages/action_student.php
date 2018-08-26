<?php 
session_start();
include_once '../include/db.php';
include_once '../include/studentfunction.php';

$action = $_REQUEST['submit'];
switch ($action) {
  case 'addstudent':
  $name = $_GET["name"]; 
  $email = $_GET["email"];
  $contactno = $_GET["mno"];
 
  $code = $_GET["e_code"];
  $course = $_GET["course"];
  $address = $_GET["address"];
  $gender = $_GET["gender"];


        $objStudent = new studentfunction(); //object is created here
		$objStudent->set_stuName($name);
		$objStudent->set_stuemail($email);
		 $objStudent->set_contactno($contactno);
		
		$objStudent->set_code($code);
		$objStudent->set_course($course);
		$objStudent->set_address($address);
		$objStudent->set_gender($gender); //property $name comes from form
		
       
	
		$res = $objStudent->add_student();
		/*echo $res;
		exit(); */
		if ($res == 1)
		{
			
			$_SESSION['message'] = "successfully Inserted";
        header("Location: ../insert-student.php");	
		}
    break;
  case 'update':
  $s_id = $_REQUEST['fm_id'];
    $name = $_GET["name"]; 
  $email = $_GET["email"];
  $contactno = $_GET["mno"];
 
  $code = $_GET["e_code"];
  $course = $_GET["course"];
  $address = $_GET["address"];
  $gender = $_GET["gender"];
   $objStudent = new studentfunction(); //object is created here
		$objStudent->set_studentID($s_id);
		$objStudent->set_stuName($name);
		$objStudent->set_stuemail($email);
		 $objStudent->set_contactno($contactno);
		
		$objStudent->set_code($code);
		$objStudent->set_course($course);
		$objStudent->set_address($address);
		$objStudent->set_gender($gender);
		$res = $objStudent->update();
           if ($res == 1)
		  {
			
			$_SESSION['message'] = "successfully updated";
           header("Location: ../insert-student.php");	
		   }
  
    break;
  case 'deleteCategory':
    $c_id = $_REQUEST['c_id'];
   
    $db->query("DELETE from category WHERE `c_id`='$c_id'");
    $_SESSION['msg'] = md5('7');
    header("Location: ../category?msg=" . md5('7') . "");
    break;
  default:
    $_SESSION['msg'] = md5('11');
    header("Location: ./include/header.php?msg=" . md5('11') . "");
}

?>