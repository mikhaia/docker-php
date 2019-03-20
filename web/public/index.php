<?php
// var_dump($_SERVER['DOCUMENT_ROOT']);
echo '<pre>';
$d = dir('./../');

echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false){ 
  echo "filename: " . $file . "<br>"; 
} 
$d->close(); 
echo '</pre>';

$con = mysqli_connect("db","root","root","test", 3306);

$db = new mysqli("db","root","root","test", 3306);
var_dump($db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
  	echo "ok";
  }

phpinfo();
?>