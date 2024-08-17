<?php 

 session_start();

include ("connection.php"); 

 

// Register code 

if (isset($_POST['btnReg'])) { 

// code... 

$FName=$_POST['txtFirstName']; 

$SName = $_POST['txtSurName'];

$Pass=$_POST['txtPassword']; 

$Email=$_POST['txtEmail']; 

$Phone=$_POST['txtPhone']; 

$address=$_POST['txtAddress']; 



$filePhoto=$_FILES['txtPhoto']['name']; 

$folder="img/Users/"; 

$fileName=$folder.'_'.$filePhoto; 

$copy=copy($_FILES['txtPhoto']['tmp_name'], $fileName); 

 

if (!$copy) { 

// code... 

echo "<p>User photo cannot upload"; 

exit(); 

} 



// check password number,upper,lower, special 

$num=preg_match('@[0-9]@',$Pass); 

$upppercase=preg_match('@[A-Z]@',$Pass); 

$lowercase=preg_match('@[a-z]@',$Pass); 

$special=preg_match('@[^\w]@',$Pass); 

 

// check email 

$checkEmail="select * from users where UserEmail='$Email'"; 

$result=mysqli_query($con,$checkEmail); 

$count=mysqli_num_rows($result); 

 

// check phone 

$checkPhone="select * from users where UserPhone='$Phone'"; 

$result1=mysqli_query($con,$checkPhone); 

$count1=mysqli_num_rows($result1); 

 

if (strlen($Pass)<8 || !$num || !$upppercase || !$lowercase || !$special ) { 

// code... 

echo "<script>window.alert('Password must be at leaset 8 characters in length and at least one upper, one lower, and one special character.') </script>"; 

echo "<script>window.location='UserRegister.php'</script>"; 

} 

elseif ($count>0) { 

// code... 

echo "<script>window.alert('Email already exist!')</script>"; 

echo "<script>window.location='UserRegister.php'</script>"; 

} 

elseif ($count1>0) { 

// code... 

echo "<script>window.alert('Phone number already exist!')</script>"; 

echo "<script>window.location='UserRegister.php'</script>"; 

} 

else{ 

$query="insert into users  

(UserFirstName,UserSurName,UserEmail,UserPhone,UserAddress,UserPass,UserPhoto) 

values  

('$FName','$SName','$Email','$Phone','$address','$Pass','$fileName')"; 

 $result= mysqli_query($con,$query); 

if ($result) { 

// code... 

echo "<script>alert('Register successful.')</script>"; 
echo "<script>window.location='Home.php'</script>";
} 

else{ 

echo "<script>alert('Register fail!')</script>"; 

} 

} 

} 

?> 

<!DOCTYPE html> 

<html> 

<head> 

<meta charset="utf-8"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

<title>Admin register</title> 
 

</head> 

 <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
<body> 

 

<!-- Register from --> 

<div class="AdminRegContainer">

<div class="AdminReg">
<form action="UserRegister.php"  method="post" enctype="multipart/form-data"> 

 

<h2>Register</h2> 

  
<div class="Name">

<label>First Name</label> 

<input type="text" name="txtFirstName" placeholder="Enter First name" required> 
</div>

<div class="Name">

<label>Sur Name</label> 

<input type="text" name="txtSurName" placeholder="Enter Sur name" required> 
</div>

<div class="Email">

<label>Email</label> 
<input type="text" name="txtEmail" placeholder="Enter Email" required> 

</div>


<div class="Password">

<label>Password</label> 
<input type="password" name="txtPassword" id="myInput" placeholder="Enter password" required> 

</div>

   
  <div class="Phone">

  <label>Phone Number</label>
<input type="text" name="txtPhone" placeholder="Enter phone number" required> 

  </div>

<div class="Address">

<label>Address</label>
<textarea name='txtAddress'></textarea> 

</div>   

<div class="Photo">

<label>Photo</label>
<input type="file" name="txtPhoto" required> 

</div>



<div class="submit">
<input type="submit" name="btnReg" value="Register"> 
</div>
   



 

</form> 

    
    <a href="UserLogin.php" class="btn_quit"><i class="fa-solid fa-arrow-left"></i></a>
 
</div>

</div>



<!-- show hide --> 

<script> 

 <?php

include('script.js');

 ?>

</script> 

 

</body> 

</html> 