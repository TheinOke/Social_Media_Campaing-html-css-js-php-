<?php 

include ("connection.php"); 

session_start(); 

 

$UserID=$_GET['UserID']; 

 

$deleteUsers="delete from users where UserID=$UserID "; 


$result=mysqli_query ($con,$deleteUsers); 

 

if ($result) { 

// code... 

echo "<script>window.alert('Successfully Deleted!')</script>"; 

echo "<script>window.location='UsersManagement.php'</script>"; 

} 

else{ 

echo "<script>window.alert('Something went wrong in Users Delete')</script>"; 

echo "<script>window.location='UsersManagement.php'</script>"; 

} 

 

?> 