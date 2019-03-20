<?php
$con = mysqli_connect("db","root","root","database", 3306);

// Check connection
if (mysqli_connect_errno())
{
	echo '<h3 style="color:red;text-align:center">Failed to connect to MySQL: ' . mysqli_connect_error().'</h3>';
}
else
{
	echo '<h3 style="color:green;text-align:center">The connection to the database was successful.</h3>';
}

phpinfo();
?>