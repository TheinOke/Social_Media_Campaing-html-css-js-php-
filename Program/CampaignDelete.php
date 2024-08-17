<?php 

include ("connection.php"); 

session_start(); 

 

$CampID=$_GET['CmpID']; 

 

$deleteCampaign="delete from campaigns where CampaignID=$CampID "; 


$result=mysqli_query ($con,$deleteCampaign); 

 

if ($result) { 

// code... 

echo "<script>window.alert('Successfully Deleted!')</script>"; 

echo "<script>window.location='CampaignsManagement.php'</script>"; 

} 

else{ 

echo "<script>window.alert('Something went wrong in Campaigns Delete')</script>"; 

echo "<script>window.location='Campaigns.php'</script>"; 

} 

 

?> 