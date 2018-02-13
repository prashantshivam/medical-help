<?php
//include('formValidation.php');
session_start();


$village=$_SESSION['village'];
include('C:\wamp64\www\project\connection\connection.php');

	$query= "select * from person where village = '$village' ";
	$result=mysql_query($query);

	if(mysql_num_rows($result)==0)
		echo "<h1><center>No patient in your village</center></h1>";


	else{
			echo "<center><h1>patient</h1>";
			echo "<table border='1' cellpadding = '10'>
			<tr><th>first name</th>
			<th>last name</th>
			<th>village</th>
			<th>region</th>
			<th>destrict</th>
			</tr>";

				while($row=mysql_fetch_array($result)){
					echo "<tr><td>".$row['f_name']."</td>
				  <td>".$row['l_name']."</td>
				  <td>".$row['village']."</td>
				  <td>".$row['region']."</td>
				  <td>".$row['destrict']."</td>
				  </tr>"
;}
}
?>
