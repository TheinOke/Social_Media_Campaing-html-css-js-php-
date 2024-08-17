<?php 
session_start();
include ("connection.php"); 


if (!isset($_SESSION['AID'])) { 

    // code... 

    echo "<script>window.alert('Please login.') </script>"; 

    echo "<script>window.location= 'adminLogin.php' </script>"; 

} 



$id=$_SESSION['AID']; 

$name=$_SESSION['AName']; 

$Photo = $_SESSION['Aphoto'];  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time();?>">
<body>
    <?php include('adminNav.php'); ?>
<br>
<br>
<h1>
    Users Management
</h1>
<br>
<br>


<table cellspacing="1px"  class="campaignTable" > 

<tr class="table_titles"> 

<th>Photo</th> 
<th>First name</th> 
<th>Sur Name</th>

<th>Email</th>
<th>Phone</th>
<th>address</th>

<th></th>



</tr> 

<?php 

$showquery="select * from users"; 

$result1=mysqli_query($con,$showquery); 

$count=mysqli_num_rows($result1); 

for ($i=0; $i <$count ; $i++) {  

// code... 

$arr=mysqli_fetch_array($result1); 

$UserID = $arr['UserID'];

$FName=$arr['UserFirstName']; 

$SName = $arr['UserSurName'];



$Email=$arr['UserEmail']; 

$Phone=$arr['UserPhone']; 

$address=$arr['UserAddress']; 

$Photo = $arr['UserPhoto'];

echo "<tr>"; 

echo "

<td><img src='$Photo' width='50px' height='50px'></td> 
<td>$FName</td> 
<td>$SName</td>

<td>$Email</td>
<td>$Phone</td>
<td>$address</td>






<td> 
<div class='edit-btns'>

<a href='USerDelete.php?UserID=$UserID' class='Delete-btn'> Delete </a> 

</div>
</td> 

"; 

echo "</tr>";					 

} 

?> 

 </table> 

 




<br>
<br>
<br>

<hr>




</body>
</html>