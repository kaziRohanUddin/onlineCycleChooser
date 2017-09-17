<?php
	
	if(isset($_SESSION['email'])==false){
		header('location:Home.php');
	}
	?>
<?php
	
		$conn=mysqli_connect("localhost","root","","cyclestoredb");
		if($conn){	
			$query="select * from userregistration";		
						if($result = mysqli_query($conn,$query)){
				echo "<center><table border='1' style='border-collapse:collapse' cellpadding='10'>
				<tr>
					<th>Id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Mobile</th>
					<th>Date of Birth</th>
					<th>Address</th>
					<th>Image</th>
				</tr>";					
				 while($row=mysqli_fetch_assoc($result)){	
				echo "<tr>";
					 
					  echo "<td>" .$row['id']. "</td>";
					  echo "<td>" .$row['firstName']. "</td>";
					  echo "<td>" .$row['lastName']. "</td>";
					  echo "<td>" .$row['email']. "</td>";
					  echo "<td>" .$row['password']. "</td>";
					  echo "<td>" .$row['mobile']. "</td>";
					  echo "<td>" .$row['DOB']. "</td>";
					  echo "<td>" .$row['address']. "</td>";
					   echo "<td><img  src='".$row['image']."' height='80' width='80' ></td>";
				echo "</tr>";
				//	  var_dump($row);
				echo "<br/>";				  
				 }
				 echo "<br/>";
			echo "</table></center>";
						}
		}

?>