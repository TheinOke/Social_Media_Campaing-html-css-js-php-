<?php
include('connection.php'); 



$createAdmin = "
Create table admin
(
adminID int Not Null Auto_Increment Primary Key,
adminName varchar(50),
adminEmail varchar(50),
adminPhone varchar(30),
adminAddress varchar(50),
adminPass varchar(50),
adminPhoto varchar(255)
)";

$runningquery = mysqli_query($con,$createAdmin);
if($runningquery)
{
    echo "<script>window.alert('Create Admin query is successfully executed.')</script>";
}


$createUsers = 
"
Create table users
(
UserID int not null auto_increment primary key,
UserFirstName varchar(50),
UserSurName varchar(50),
UserEmail varchar(50),
UserPhone varchar(30),
UserAddress varchar(50),
UserPass varchar(30),
UserPhoto varchar(255)
)
";

$runningquery = mysqli_query($con,$createUsers);
if($runningquery)
{
    echo "<script>window.alert('Create User query is successfully executed.')</script>";
}

$createCampaigns = 
"
Create Table campaigns
(
CampaignID int Auto_increment Primary Key,
Title varchar(50),
PostedDate date,
Description text, 
Photo varchar(255),
UploadedBy varchar(50)
)
";

$runningquery = mysqli_query($con,$createCampaigns);
if($runningquery)
{
    echo "<script>window.alert('Create campaigns query is successfully executed.')</script>";
}

$createApps = 
"
Create table popularapplication
(
AppID int Auto_increment Primary Key,
AppName varchar(50),
AppPhoto varchar(255),
AppDesc text
)
";

$runningquery = mysqli_query($con,$createApps);
if($runningquery)
{
    echo "<script>window.alert('Create Apps query is successfully executed.')</script>";
}

$createFeedBacks = "
Create table feedbacks
(
FbID int auto_increment not null primary key,
Email varchar(50),
Description text
)
";

$runningquery = mysqli_query($con,$createFeedBacks);
if($runningquery)
{
    echo "<script>window.alert('Create feedbacks query is successfully executed.')</script>";
}

?>