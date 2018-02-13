<?php

	

	if(isset($_POST['username']) && isset($_POST['pass'])){
		include('C:\wamp64\www\project\connection\connection.php');
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		
		$query="select * from volunteer where user_id='$username' and password1=$pass ";
		$result=mysql_query($query)  or die (mysql_error());;
		
		$row = mysql_fetch_array($result);

		session_start();
		$_SESSION['village']=$row['village'];

			

				if($row['volunteer1']=='1')

					echo "<br> <a href=entry_form.php >click here to insert a patient 
								<br> <a href=view_person.php> click here to view patient<br>";
			    else
					echo "wrong username or password<br>
							<a href=index.php>click here to login";
		
		
		
	}
	else{
		echo "Nothing to disaplay";
	}


?>