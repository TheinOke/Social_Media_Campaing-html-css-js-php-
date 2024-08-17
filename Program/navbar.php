
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="style.css?">  -->
<body>
    
    <nav>
        <a href="#">
<h1 class="logo">Oke's</h1>
        </a>

        <ul class="navtab">
            <li class="nav_lists"><a href="./Home.php" class="nav_links">Home</a></li>
            <li class="nav_lists"><a href="./PopularApps.php" class="nav_links">Popular Apps</a></li>
            <li class="nav_lists"><a href="./info.php" class="nav_links">Information</a></li>
            <li class="nav_lists"><a href="./Parents_Help.php" class="nav_links">Parents' help</a></li>
            <li class="nav_lists"><a href="./LiveStreaming.php" class="nav_links">Livestreaming</a></li>
            <li class="nav_lists"><a href="./Contact.php" class="nav_links">Contact</a></li>
            <li class="nav_lists"><a href="./LegalAndGuide.php" class="nav_links">Legislation & Guidance</a></li>
            <li class="nav_lists"> <div id="google_translate_element"></div></li>
            <li class="nav_lists dropdown_btn search_btn"><a href="#" class="nav_links"><i class="fa-solid fa-magnifying-glass"></i>
            <ul class="dropdown-menu1">
                <li class="dropdown-lists"><a href="./Info.php">Search Campaigns</a></li>
                <li class="dropdown-lists"><a href="#">Search Popular Social Apps</a></li>
          
               
            </ul>
        </a>
              
            </li>
            <li class="nav_lists dropdown_btn user_btn"><a href="#" class="nav_links"><div class="profile"><span><?php echo $name;?></span> 
            <?php

if (!isset($_SESSION['AID'])) { 

    // code... 

   echo "<i class='fa-solid fa-user'></i>";

} else

    echo "<img src='$Photo' alt='' width='30px' height='30px' class='user_icon'>";

            ?>
            </div></a>

            <ul class="dropdown-menu">
                <li class="dropdown-lists"><a href="./UserLogin.php">Customer Login</a></li>
                <li class="dropdown-lists"><a href="adminLogin.php">Admin Log in</a></li>
                <li class="dropdown-lists"><a href="./UserLogOut.php">Log Out</a></li>
               
            </ul>

        </li>
        </ul>

        <button class="menubar"><i class="fa-solid fa-bars menuicon"></i></button>

    </nav>

    <script>
               function googleTranslateElementInit() {
                 new google.translate.TranslateElement({
                   pageLanguage: 'en'
                 }, 'google_translate_element');
               }
             </script>
             <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    <?php
    include("UserNav.js");
    ?>
</script>
</body>
</html>