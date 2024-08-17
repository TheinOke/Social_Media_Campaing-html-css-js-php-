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

    $Title = $_POST['txtTitle'];
    // $PostedDate =  $_POST['txtPostedDate'];
   
    $Description = $_POST['txtDescription'];
    // $UpdatedBy = $_POST['txtAuthor'];
    
    // photo1 upload 

    $filePhoto=$_FILES['txtPhoto']['name']; 

    $folder="img/Campaigns/"; 

    $fileName=$folder.'_'.$filePhoto; 

    $copy=copy($_FILES['txtPhoto']['tmp_name'], $fileName); 

 

    if (!$copy) 
    { 

        // code... 

        echo "<p>Campaigns photo cannot upload"; 

        exit(); 

    } 


    //data insert 

    $query = "insert into campaigns(Title,PostedDate,Description,Photo,UploadedBy) 
                values 
                ('$Title','$today','$Description','$fileName','$name');
            ";

            $result = mysqli_query($con,$query);

            if ($result) { 

                // code... 
                
                echo "<script>window.alert(' Data insert successful!')</script>"; 
                
                echo "<script>window.location='CampaignsManagement.php'</script>"; 
                
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
    
    <form action="CampaignsManagement.php" method="POST"  enctype="multipart/form-data" class="CampaignMngForm">
        <h2>Campaigns Uploaded</h2>
    <div class="row">
    <div class="col-12">
        <label for="txtTitle">Title</label><br>
        <input type="text" name="txtTitle" id="">
    </div>
    <div class="col-12">
        
        <label for="CampaignDate">Date (Y/M/D) <br><?php echo"$today"; ?></label><br>
        
    </div>
</div>

    <div class="row">
        <div class="col-12">
        <div class="campaignDescription">
        <label for="txtDescription">Campaign Details</label><br>
        <textarea name="txtDescription" id=""></textarea>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <label for="txtCampaignPhoto">Campaign Photo</label><br>

            <input type="file" name="txtPhoto" required> 
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <label for="">Updated by <b><?php echo"$name"; ?></b> </label> 
        </div>
    </div>

    
   <div class="row">
    <div class="col-6"><input type="submit" name="btnUpload" class="Upload" value="Upload"></div>
    <div class="col-6"><input type="reset" value="Clear" class="Clear"></div>
   </div>

    </form>

<hr>

<!-- 
Data Showing  -->



<h1>Campaigns listing</h1> 
<div class="table_container">


<fieldset> 

<form action="CampaignsManagement.php" method="post"> 



<table cellspacing="1px"  class="Table"> 

<tr class="table_titles"> 

<th>ID</th> 

<th>Photo</th>

<th>Title</th> 

<th>Description</th> 



<th>Date</th> 

<th>Uploaded By</th> 
<th></th>


</tr> 

<?php 

$showquery="select * from campaigns"; 

$result1=mysqli_query($con,$showquery); 

$count=mysqli_num_rows($result1); 

for ($i=0; $i <$count ; $i++) {  

// code... 

$arr=mysqli_fetch_array($result1); 

$CmpID = $arr['CampaignID'];
$CmpTitle = $arr['Title'];
$CmpPostedDate = $arr['PostedDate'];
$CmpDescription = $arr['Description'];
$CmpPhoto = $arr['Photo'];
$CmpUploadedBy = $arr['UploadedBy'];

echo "<tr>"; 

echo "

<td>$CmpID</td> 

<td><img src='$CmpPhoto' width='50px' height='50px'></td> 

<td>$CmpTitle</td> 

<td>$CmpDescription</td> 

<td>$CmpPostedDate</td> 

<td>$CmpUploadedBy</td> 


<td> 
<div class='edit-btns'>

<a href='CampaignDelete.php?CmpID=$CmpID' class='Delete-btn'> Delete <i class='fa-solid fa-trash-can'></i> </a> 

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
    const table = document.querySelector('.Table');
    const rows = table.querySelectorAll('tr');

    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
      if (i % 2 === 0) {
        rows[i].style.backgroundColor = '#eeedeb'; // Set background color for even rows
      }
    }
  </script>

</body>
</html>