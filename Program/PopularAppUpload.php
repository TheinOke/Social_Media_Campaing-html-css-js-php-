<?php

include ("connection.php"); 

session_start(); 


if (!isset($_SESSION['AID']))
     { 

        // code... 

     echo "<script>window.alert('Please login.') </script>"; 

        echo "<script>window.location= 'adminLogin.php' </script>"; 

    } 



    $id=$_SESSION['AID']; 

    $name=$_SESSION['AName']; 

    $Photo = $_SESSION['Aphoto'];  
   
    $today = date('y-m-d');

if(isset($_POST['btnUpload']))
{

    $Name = $_POST['txtAppName'];
    // $PostedDate =  $_POST['txtPostedDate'];
   
    $Description = $_POST['txtDescription'];
    // $UpdatedBy = $_POST['txtAuthor'];
    
    // photo1 upload 

    $filePhoto=$_FILES['txtPhoto']['name']; 

    $folder="img/Applications"; 

    $fileName=$folder.'_'.$filePhoto; 

    $copy=copy($_FILES['txtPhoto']['tmp_name'], $fileName); 

 

    if (!$copy) 
    { 

        // code... 

        echo "<p>Applications photo cannot upload"; 

        exit(); 

    } 


    //data insert 

    $query = "insert into popularapplication(AppName,AppPhoto,AppDesc) 
                values 
                ('$Name','$fileName','$Description');
            ";

            $result = mysqli_query($con,$query);

            if ($result) { 

                // code... 
                
                echo "<script>window.alert(' Data insert successful!')</script>"; 
                
                echo "<script>window.location='PopularAppUpload.php'</script>"; 
                
                } 
                
                else{ 
                
                echo "<script>window.alert(' Data insert unsuccessful!')</script>"; 
                
                } 

 

}


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

    <?php include('adminNav.php') ?>
    
    <form action="PopularAppUpload.php" method="POST"  enctype="multipart/form-data" class="CampaignMngForm">
        <h2>Popular Apps Uploaded</h2>
    <div class="row">
    <div class="col--6">
        <label for="txtAppName">Name</label><br>
        <input type="text" name="txtAppName" id="">
    </div>
 
</div>

    <div class="row">
        <div class="col-12">
        <div class="campaignDescription">
        <label for="txtDescription">About</label><br>
        <textarea name="txtDescription" id=""></textarea>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <label for="txtCampaignPhoto">Application Photo</label><br>

            <input type="file" name="txtPhoto" required> 
        </div>
    </div>

 
    
   <div class="row">
    <div class="col-6"><input type="submit" name="btnUpload" value="Upload"></div>
    <div class="col-6"><input type="reset" value="Clear"></div>
   </div>

    </form>

<hr>

<!-- 
Data Showing  -->



<h1>Application listing</h1> 
<div class="table_container">


<fieldset> 

<form action="PopularAppUpload.php" method="post"> 



<table cellspacing="1px"  class="campaignTable" > 

<tr class="table_titles"> 

<th>ID</th> 

<th>Photo</th>

<th>Name</th> 

<th>Description</th> 

<th></th>



</tr> 

<?php 

$showquery="select * from popularapplication"; 

$result1=mysqli_query($con,$showquery); 

$count=mysqli_num_rows($result1); 

for ($i=0; $i <$count ; $i++) {  

// code... 

$arr=mysqli_fetch_array($result1); 

$AppID = $arr['AppID'];
$AppName = $arr['AppName'];
$AppPhoto = $arr['AppPhoto'];
$AppDesc = $arr['AppDesc'];


echo "<tr>"; 

echo "

<td>$AppID</td> 

<td><img src='$AppPhoto' width='50px' height='50px'></td> 

<td>$AppName</td> 

<td>$AppDesc</td> 




<td> 
<div class='edit-btns'>

<a href='AppDelete.php?AppID=$AppID' class='Delete-btn'> Delete </a> 

</div>
</td> 

"; 

echo "</tr>";					 

} 

?> 

 

 

</table> 



</form> 

</fieldset> 

</div>

<script>
    const table = document.querySelector('.campaignTable');
    const rows = table.querySelectorAll('tr');

    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
      if (i % 2 === 0) {
        rows[i].style.backgroundColor = '#eeedeb'; // Set background color for even rows
      }
    }
  </script>

</body>
</html>