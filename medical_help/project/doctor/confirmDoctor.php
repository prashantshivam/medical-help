<?php
if(isset($_POST['confirm'])){

	$user=$_POST['confirm'];
	include('C:\wamp64\www\project\connection\connection.php');

	$query="update doctor set valid='1' where user_id='$user' ";
	$result=mysql_query($query) or die(mysql_error());

	echo "request confirm successfully<br>
		  <a href=assignDoctor.php>click here to confirm/delete another request";	

}
else{
		$user=$_POST['delete'];
	include('C:\wamp64\www\project\connection\connection.php');

	$query="update doctor set valid='-1' where user_id='$user' ";
	$result=mysql_query($query) or die(mysql_error());

	echo "request delete successfully<br>
		  <a href=assignDoctor.php>click here to confirm/delete another request";	
}
?>