<?php 

session_start(); 

include ("connection.php"); 

 

if (isset($_POST['btnlogin'])) { 

// code... 

$email=$_POST['txtEmail']; 

$pass=$_POST['txtPass']; 

 

 

$query="select * from users where UserEmail='$email' and UserPass='$pass'"; 

$result=mysqli_query($con,$query); 

$count=mysqli_num_rows($result); 

 

 

if ($count>0) { 

// code... 



$arr=mysqli_fetch_array($result); 

$ID=$arr['UserID']; 

$Name=$arr['UserFirstName']; 

$Photo= $arr['UserPhoto']; 

$_SESSION['AID']=$ID; 

$_SESSION['AName']=$Name; 

$_SESSION['Aphoto'] = $Photo; 

 

echo "<script>window.alert('login success.')</script>"; 

echo "<script>window.location='Home.php'</script>"; 

 

 

 

} 

else{ 

echo "<script>window.alert('login fail.')</script>"; 

echo "<script>window.location='UserLogin.php'</script>"; 

} 

} 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

<meta charset="utf-8"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge"> 

<title>User login</title> 


 <link rel="stylesheet" href="style.css?v=<?php echo time();?>">

</head> 

<body> 

 

<!-- admin login from --> 

<div class="AdminRegContainer">
    <div class="AdminReg">
        
<form action="UserLogin.php" method="post"> 

<h2>User login</h2> 

<br> 

 <div class="Email"><label>Email</label> 

<input type="text" name="txtEmail" placeholder="enter email" required> 

</div>




 <div class="Password">
  
<label>Password</label> 

<input type="password" name="txtPass" placeholder="enter password" required> 
  
 </div>





<input type="submit" name="btnlogin" value="Login"> 

</form> 
<div>
    Don't Have an Account?
    <a href="./UserRegister.php">Register Here</a>
 </div>
<a href="Home.php" class="btn_quit"><i class="fa-solid fa-arrow-left"></i></a>


    </div>
</div>

 

</body> 

</html> 