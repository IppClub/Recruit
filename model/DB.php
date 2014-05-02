<?php
class DB
{
	public  $con;
	function connect()
	{
		$this->con=mysql_connect("localhost","root","root");
		if (!$this->con)
		{		
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_query("set names utf8",$this->con); 
		mysql_select_db("ippclub", $this->con);
	}
	function select_sentence($tablename,$columnname,$var)
	{
		$query="select * from $tablename where $columnname=$var";
		$this->connect();
		$result=mysql_query($query,$this->con);
		$row =mysql_num_rows($result);
		if($row==0)
			return 0;
		else
			return $result; 
		
	}
	function save($studentID,$name,$phone,$pwd)
	{
		$this->connect();
		$query="insert into student_info values('$studentID','$name','$phone','$pwd')";
		$result=mysql_query($query,$this->con);
		
	}
	function updateInfo($studentID,$name,$phone){
		$this->connect();
		$query="update student_info set studentID='$studentID', name='$name', phone='$phone' where studentID='$studentID'";
		$result=mysql_query($query);
	}
	function savegroup($studentID,$name,$studentID1,$name1,$studentID2,$name2,$studentID3,$name3)
	{
		$this->connect(); 
		$query="insert into group_info values('$studentID','$name','$studentID1','$name1','$studentID2','$name2','$studentID3','$name3')";
		$result=mysql_query($query,$this->con);
		
	}
	function updategroup($studentID,$name,$studentID1,$name1,$studentID2,$name2,$studentID3,$name3)
	{
		$this->connect();
		$query="update group_info set studentID1='$studentID1' , name1='$name1' , studentID2='$studentID2' , name2='$name2' , studentID3='$studentID3' , name3='$name3' where studentID='$studentID'";
		$result=mysql_query($query,$this->con);
		
	}
}

?>