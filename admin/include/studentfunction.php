<?php
/************************************************************

Author		 : Subhra S Swain
Purpose		: This file contains all the functions related to the students.
Organization: DishaaPro
Created On	:  
Modified By	:
Modified On	: 

****************************************************************

*/ 
class studentfunction extends db 
{

	var $studentID;
	
	var $username;
	var $password;
	var $stuName;
	var $stuemail;
	var $contactno;
	
	var $code;
	var $course;
	var $address;
	var $gender;

	
 	function set_studentID($x)
 	{
		$this->studentID = $x;
	}

	function get_studentID() 
	{
		return $this->studentID;
	}
	function set_username($u)
	{
	  	$this->username = $u; //ganesh here
	}
	function get_username()
	{
		 return $this->username;
	}
	function set_password($pw)
	{
	  	$this->password = $pw; //ganesh here
	}
	function get_password()
	{
		 return $this->password;
	}
	function set_stuName($n)
	{
	  	$this->stuName = $n; //ganesh here
	}
	function get_stuName()
	{
		 return $this->stuName;
	}
	
	function set_stuemail($m)
	{
	  	$this->stuemail = $m; 
	}
	function get_stuemail()
	{
		 return $this->stuemail;
	}
	function set_contactno($c)
	{
	  	$this->contactno = $c; 
	}
	function get_contactno()
	{
		 return $this->contactno;
	}

	
	function set_code($co)
	{
	  	$this->code = $co; 
	}
	function get_code()
	{
		 return $this->code;
	}	
	function set_course($cou)
	{
	  	$this->course = $cou; 
	}
	function get_course()
	{
		 return $this->course;
	}

	function set_address($add)
	{
	  	$this->address = $add; 
	}
	function get_address()
	{
		 return $this->address;
	}

	function set_gender($g)
	{
	  	$this->gender = $g; 
	}
	function get_gender()
	{
		 return $this->gender;
	}

	
	

	
	function add_student() 
	{
		
		
	$query = sprintf("insert into student(name,email,contact,e_code,course_name,address,gender,c_date,m_date )values('%s','%s','%d','%s','%s','%s','%s',now(),now())", 
	$this->stuName
	, $this->stuemail, $this->contactno, $this->code, $this->course, $this->address, $this->gender);
	
	/* echo $query;
	exit();
	*/
	
			$result = mysqli_query($this->dbh,$query); /* superpowerful line.  mysql_query is an inbuild php function which                                                               needs a database handler and a query */
	      	if(!$result)  
			{
		    	return -1;
			}
			else
			{

				return 1; 
			}
	}
	

	function view_students() // this arguments need not to be same name with view-students.php 
	{
	  
		$query = sprintf("SELECT * FROM student"); 
	
	  	$result = mysqli_query($this->dbh,$query);
		
		return $result;
		
		
	}
		
	function view_student_name($code) // this arguments need not to be same name with view-students.php 
	{
		   
			$query = sprintf("SELECT e_code,id FROM student where e_code='%s'", $code);
		
			$result = mysqli_query($this->dbh,$query);
		
			if(!$result) 
				{

						return -1;
				}
			  else
			  	{
						return $result;
						
						
			 	}
	}
	
	
	function view_admin_detail($na) // this arguments need not to be same name with view-students.php 
	{
		   
			$query = sprintf("SELECT * FROM admin where username='%s'", $na);
		
			$result = mysqli_query($this->dbh,$query);
		
			if(!$result) 
				{

						return -1;
				}
			  else
			  	{
						return $result;
						
						
			 	}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function view_student_details($SID) // this arguments need not to be same name with view-students.php 
	{
		   
			$query = sprintf("SELECT * FROM student where id=%d", $SID); //this is just a sql statement, $query is a string variable
			//echo $query;
			$result = mysqli_query($this->dbh,$query);
			return $result;
		
	}
	
	function update_student($SI) 
	{

		$query = sprintf("update student  set name='%s', email='%s', contactno=%d, e_code='%s', address='%s',gender='%s'  where id =$SI",$this->stuName
	, $this->stuemail, $this->contactno, $this->code, $this->address, $this->gender,$this->studentID);

		$result = mysqli_query($this->dbh,$query);
		if(!$result) 
			{

		    		return -1;
			}
		
	     	return 1;
			
	}
	  //updating the records
   public function update(){
   
     $query = "UPDATE student SET name = '".$this->stuName."',
                                email = '".$this->stuemail."',
                               contact   = '".$this->contactno."',
							   e_code    = '".$this->code."',
							   course_name    = '".$this->course."',
							   address    = '".$this->address."'
							
							 
           WHERE id ='".$this->studentID."'";
		   $result = mysqli_query($this->dbh,$query);
     
	 if(!$result) 
			{

		    		return -1;
			}
		
	     	return 1;
    }
	
	
	 public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id in($id)";
        
        $result = $this->dbh->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
	function loginchk()
	{
			$query = sprintf("SELECT * FROM admin where username='%s' and password='%s'",$this->username,$this->password); 
			$result = mysqli_query($this->dbh,$query);
		  
			if(!$result) 
				{

						return -1;
				}
			  else
			  	{
						return $result;
						
						
			 	}
	}
	

} // class ends here

?>