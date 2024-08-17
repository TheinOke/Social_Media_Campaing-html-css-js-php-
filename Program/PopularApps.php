<?php 

session_start(); 

include ("connection.php"); 


if (!isset($_SESSION['AID'])) { 

    // code... 

    echo "<script>window.alert('Please login.') </script>"; 

    echo "<script>window.location= 'UserLogin.php' </script>"; 
} 

else
{
    $id=$_SESSION['AID']; 

    $name=$_SESSION['AName']; 
    
    $Photo = $_SESSION['Aphoto'];  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> <link rel="stylesheet" type="text/css" href="style.css?">
<body>
  
<?php include('navbar.php'); ?>
   <br>
   <br>

   <div class="row">
    <div class="col-l-3 col-m-2 col-s-12">
        
    </div>
    <div class="col-l-6 col-m-7 col-s-12">
   
        <div class="SearchFormContainer">
        <form action="PopularApps.php" method="post">
        <div class="SearchInputs">
        <input type="search" name="txtSearch" id="" placeholder="search...">
        
        <input type="submit" name="btnSearch" value="Search">
        </div>
            
                </form>
        </div>
    
    <hr>

    <div class="Campaigns_container">
        <!---------------------------->
        <br>


        <?php 
        
        if(isset($_POST['btnSearch']))
        {
            $Title = $_POST['txtSearch'];

            $squery =" select * from popularapplication where AppName Like '%$Title%' OR AppDesc LIKE '%$Title%'";

            $sresult=mysqli_query($con,$squery); 

            $srow=mysqli_num_rows($sresult); 


            

            if ($srow==0) 
            { 

            // code... 

            echo "There is no Data"; 
          }  
            
                                        
                for ($i=0; $i <$srow ; $i++) { 

                    // code... 
                    
                    $sarr=mysqli_fetch_array($sresult); 
                    
                    $Title = $sarr['AppName'];
                    $Desc = $sarr['AppDesc'];
                    
                    $Photo = $sarr['AppPhoto'];
                   
                    $AppID = $sarr['AppID'];  
  
                  
                    echo " 
                     <div class='campaign'>
                    <div class='row'>
                        <div class='col-l-3'>
                            <div class='img_container'>
                                <img src='$Photo' alt=''>
                            </div>
                        </div>
                        <div class='col-l-9'>
                            <div class='campaign_txt_content'>
                                <h2><a href=''AppDetails.php?AppID=$AppID'> $Title</a></h2>
                                <br>
                                <br>
                              
                            </div>
                        </div>
                    </div>
                            <br>
                                <br>
                            ";
                    
                         }
                    
            
            



            
        

        }


            else
            {
                $dquery="select * from popularapplication order by AppID desc"; 

                $dresult=mysqli_query($con,$dquery); 

                $drow=mysqli_num_rows($dresult); 


                if ($drow==0) { 

                    // code... 
                    
                    echo "There is no Apps"; 
                    
                } 

                for ($i=0; $i<$drow ; $i++) { 

                    // code... 
                    
                    $darr=mysqli_fetch_array($dresult); 
                    
                    $Title = $darr['AppName'];
                    $Desc = $darr['AppDesc'];
                    
                    $Photo = $darr['AppPhoto'];
                   
                    $AppID = $darr['AppID']; 

                  
                    echo " 
                     <div class='campaign'>
                    <div class='row'>
                        <div class='col-l-3'>
                            <div class='img_container'>
                                <img src='$Photo' alt=''>
                            </div>
                        </div>
                        <div class='col-l-9'>
                            <div class='campaign_txt_content'>
                                <h2><a href='AppDetails.php?AppID=$AppID'>$Title</a></h2>
                                <br>
                                <br>
                                
                            </div>
                        </div>
                    </div>
                          </div>  
                          <br>
                                <br>
                            ";
                }
                    
                         }
                    
            
            



            
        

        

            
        
        
        ?>

        
 <!---------------------------->
        </div>   

       

        

        <!--  -->

      

         <br>
        </div>
    </div>

    </div>
    <div class="col-l-3 col-m-2 col-s-12"></div>
   </div>

   <br>
   <br>

        
   <section id="footer">
  <div class="main-footer">
    <div class="logoinfo" data-aos="fade-up">
      <h2>Oke's</h2>
      <p>By Thein Oke</p>

      <div class="contact-details">
        <h1>Contact Us</h1>
        <li>
          <div class="fa fa-phone"></div><a href="tel:+919326048690">+959 455 554 003</a></li>
        <li>
          <div class="fa fa-envelope"></div><a href="mailto:yourmail@gmail.com">theinokepaingsoe@gmail.com</a></li>
        </li>

        <li>
         
        </li>

    </div>
  </div>
  <div class="com " data-aos="fade-up">
    <h1>Links</h1>
    <ul>
      <li><a href="./Home.php" class="footer_links ">Home</a></li>
      <li><a href="./PopularApps.php" class="footer_links ">Popular Apps</a></li>
      <li><a href="./info.php" class="footer_links active">Information</a></li>
      <li><a href="./Parents_Help.php" class="footer_links">Parents help</a></li>
      <li><a href="./LiveStreaming.php" class="footer_links">LiveStreaming</a></li>
      <li><a href="./Contact.php" class="footer_links">Contact US</a></li>
      <li><a href="./LegalAndGuide.php" class="footer_links">Legislation & Guidance</a></li> 
    </ul>
  </div>
  <div class="info" data-aos="fade-up">
    <h1>Social Media</h1>
    <div class="sociallogos">
      <div class="logobox">
   
        <a href="#" class=""><i class="fa-brands fa-linkedin"></i></a>
        <a href="#" class=""> <i class="fa-brands fa-facebook"></i></a>
        <a href="#" class=""> <i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
  </div>
  <div class="map">
  <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.889874960427!2d103.6794392446663!3d1.3429099283096597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da0f993dffec71%3A0xa784a61db3a67ba5!2sSingapore%20640938!5e0!3m2!1sen!2ssg!4v1720355921246!5m2!1sen!2ssg" width="250" height="200"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
  </div>
  </div>
<footer>© Your Copyright 2024 All Rights Reserved</footer>
</section>

</body>
</html>
<!-- 
 -->
