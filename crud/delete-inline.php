<?php
$s_id = $_GET('id');
include 'config.php';
$sql = "DELETE FROM vote WHERE id = {$s_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful");
header("Location:http://localhost/votingsystem/crud/index.php");
mysqli_close($con);
?>




