<?php 

include ("connection.php"); 

session_start(); 

 

$AppID=$_GET['AppID']; 

 

$deleteAPP="delete from popularapplication where AppID=$AppID "; 


$result=mysqli_query ($con,$deleteAPP); 

 

if ($result) { 

// code... 

echo "<script>window.alert('Successfully Deleted!')</script>"; 

echo "<script>window.location='PopularAppUpload.php'</script>"; 

} 

else{ 

echo "<script>window.alert('Something went wrong in App Delete')</script>"; 

echo "<script>window.location='PopularAppUpload.php'</script>"; 

} 

 

?> 