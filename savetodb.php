<?php
$con = mysqli_connect('localhost','apps','G0m3lXIM','mymedispace');

$table="info";

$query="INSERT INTO `$table` (firstname,lastname,email,`service-type`) VALUES ('$firstname','$lastname','$email_address', '$service_type')"; 

mysqli_query($con,$query); 
mysqli_close($con);


?>