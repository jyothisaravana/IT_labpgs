<?php
include('config.php');

$name = $_POST['name'];
$message = $_POST['message'];
echo "Name:".$name. "<br/>Message:".$message;
 
// Get the value of ID (Count of tables + 1) 
$result = mysqli_query($link,"SELECT count(*) as cnt FROM Message");

while($row=mysqli_fetch_array($result))
{
	$cnt = $row['cnt'];
    echo "<br/>Count value".$cnt;
// attempt insert query execution
$sql = "insert into Message(Name,Message) values('$name','$message')";

if(mysqli_query($link,$sql))
{
	echo "<br/>Record inserted successfully";
}	
} 
mysqli_close($link);
?>
