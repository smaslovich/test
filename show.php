<?php

$con = mysqli_connect('localhost','apps','G0m3lXIM','mymedispace');

$table="info";

$query="select * from `$table`";

$result = mysqli_query($con,$query);

echo "<link rel='stylesheet' href='/styles/show.css' type='text/css'>

<table  class='table_blur'><tr><th>ID</th><th>Firstname</th><th>Lastname</th><th>email</th><th>Service_type</th></tr>";

	while($rowTab=mysqli_fetch_array($result)){
		echo " <tr>
			<td>".$rowTab['id']."</td>
 			<td>".$rowTab['firstname']."</td>
	 		<td>".$rowTab['lastname']."</td>
	 		<td>".$rowTab['email']."</td>
	 		<td>".$rowTab['service_type']."</td>
		       <tr>";
}
echo "</table>";
mysqli_close($con);
?>
