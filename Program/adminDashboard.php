<?php 

 session_start(); 

include('connection.php'); 

 if (!isset($_SESSION['AID'])) { 

 	// code... 

 	echo "<script>window.alert('Please login.') </script>"; 

 	echo "<script>window.location= 'adminLogin.php' </script>"; 

 } 

 

 $id=$_SESSION['AID']; 

 $name=$_SESSION['AName']; 

 $Photo = $_SESSION['Aphoto'];  


 
$showquery="select * from campaigns"; 

$result=mysqli_query($con,$showquery); 

$countCmp=mysqli_num_rows($result); 


$showquery1="select * from popularapplication"; 

$result1=mysqli_query($con,$showquery1); 

$countApp=mysqli_num_rows($result1); 


$showquery2="select * from users"; 

$result2=mysqli_query($con,$showquery2); 

$countUsers=mysqli_num_rows($result2); 

?> 

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<body>
<?php include("adminNav.php") ?>   

<div class="row">
    <div class="col-l-6 col-m-9 col-s-12">
        <div class="row">
            <div class="col-l-3 col-m-6 col-s-12"> <div class="admin_boxes">
            Apps Uploaded : <br> <span> <h1> <?php echo $countApp; ?> </h1> </span>
                </div> </div>
            <div class="col-l-3 col-m-6 col-s-12"> <div class="admin_boxes">
            Campaigns Uploaded : <br> <span> <h1> <?php echo $countCmp; ?> </h1> </span>
                </div>  </div>
            <div class="col-l-3 col-m-6 col-s-12"> <div class="admin_boxes">
            Total Users : <br> <span> <h1> <?php echo $countUsers; ?> </h1> </span>
                </div> </div>
        </div>
    </div>
</div>

<br>
<h1>FeedBacks</h1>
   
<br>

<table cellspacing="1px"  class="campaignTable" > 

<tr class="table_titles"> 

<th>Feedbacks ID</th> 
<th>Email</th> 
<th>Description</th>







</tr> 

<?php 

$showquery3="select * from feedbacks"; 

$result3=mysqli_query($con,$showquery3); 

$count3=mysqli_num_rows($result3); 

for ($i=0; $i <$count3 ; $i++) {  

// code... 

$arr=mysqli_fetch_array($result3); 

$Email = $arr['Email'];
$Description = $arr['Descriptions'];
$FbID = $arr['FbID'];

echo "<tr>"; 

echo "


<td>$FbID</td>
<td>$Email</td> 
<td>$Description</td>

"; 

echo "</tr>";					 

} 

?> 

 </table> 

 




<br>
<br>
<br>


</body>
</html>