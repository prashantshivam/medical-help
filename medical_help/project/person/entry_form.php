<html>
<body>
<?php
	session_start();
	include('C:\wamp64\www\project\connection\connection.php');
	//echo $_SESSION['village'];
?>
	
	<form action="insert_person.php" method="post">
	<center>
	Entry form
	<p> First name<input type="text" name="f_name" required /></p>
	<p> Last name<input type="text" name="l_name" required /></p>
	<p> Village<input type="text" name="village"  required/></p>
	<p> Region<input type="text" name="region"  required/></p>
	<p> District<input type="text" name="destrict"  required/></p>
	<p><select name="disease">
		<option value="">Select Disease</option>
		

		<?php
		$query="select * from disease";
		$result=mysql_query($query) or die(mysql_error());
		
		while($disease=mysql_fetch_array($result)){
		?>

		<option value="<?php echo $disease['d_id']; ?>"><?php echo $disease['d_name']; ?></option>
		<?php
		}
		?>
	</select></p>
	<p><input type="submit" name="submit"></p>
	</center>
	</form> 
</body>
</html>