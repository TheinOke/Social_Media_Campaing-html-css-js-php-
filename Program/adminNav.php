<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>"> 
<body>
    
    <nav>
        <a href="#">
            <h1 class="logo">Oke's</h1>
        </a>

        <ul class="navtab">
            <li class="nav_lists"><a href="./adminDashboard.php" class="nav_links">Dashboard</a></li>
            <li class="nav_lists"><a href="./PopularAppUpload.php" class="nav_links">Popular Apps upload</a></li>
            <li class="nav_lists"><a href="./CampaignsManagement.php" class="nav_links">Campaigns Management</a></li>
            <li class="nav_lists"><a href="./UsersManagement.php" class="nav_links">Users management</a></li>            
            <li class="nav_lists user_btn"><a href="#" class="nav_links">
                <div class="profile"><span><?php echo"$name";?></span> <img src="<?php echo"$Photo"; ?> " alt="..." width="30px" height="30px" class="user_icon">
                </div></a>

            <ul class="dropdown-menu">
                <li class="dropdown-lists"><a href="./adminLogout.php">Log Out</a></li>
               
            </ul>

        </li>
        </ul>

        <button class="menubar"><i class="fa-solid fa-bars menuicon"></i></button>

    </nav>

<script>
    <?php
    include("AdminNav.js");
    ?>
</script>
</body>
</html>