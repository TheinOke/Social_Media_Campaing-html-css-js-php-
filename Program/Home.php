<?php
session_start();
include ("connection.php"); 


if (!isset($_SESSION['AID'])) { 

    // code... 

    // $id=$_SESSION['AID']; 

    $name="User"; 
    
    $Photo = " ";  

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
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time();?>">
<body>
<?php include("navbar.php")?>
    <br>
    
    <div class="container">
    <div class="row">
        <div class="col-l-5 col-m-5 col-s-12">
            <div class="Herosection">
            <h1>Social Media Campaign</h1>
            <br>
            <p>
            Social media campaigns are strategic efforts to promote products, services, or causes on platforms like Facebook and Instagram. They use creative content and targeted ads to engage audiences, build brand awareness, and drive sales. These campaigns are vital for connecting with digital-savvy consumers in today's marketing landscape.
            </p>
            <a href="./info.php" class="btn_information">More Information</a>
            </div>
        </div>
        <div class="col-l-7 col-m-7 col-s-12">
            <?php include('Carousel.php') ?>
        </div>
    </div>
    <br>
        <br>

        <div class="PopularAppsContent">
            <h1 class="Section_Title">
                Popular Applications
            </h1>
            <br>
            <br>
            <div class="row Apps">
            
                <div class="col-l-3 col-m-6 col-s-11">
                    <div class="App_container">
                        <div class="img_container Home_App_img_container">
                            <img src="../Program/img/Applications/facebook.png" alt="...">
                        </div>
                        <h2>Facebook</h2>

                        <a href="./PopularApps.php" class="btn_information">See More</a>

                    </div>
                </div>
                <div class="col-l-1"></div>
                <div class="col-l-3 col-m-6 col-s-11">
                <div class="App_container">
                        <div class="img_container Home_App_img_container">
                            <img src="../Program/img/Applications/Youtube.png" alt="...">
                        </div>
                        <h2>Youtube</h2>
                        <a href="./PopularApps.php" class="btn_information">See More</a>
                    </div>
                </div>
                <div class="col-l-1"></div>
                <div class="col-l-3 col-m-6 col-s-11">
                <div class="App_container">
                        <div class="img_container Home_App_img_container">
                            <img src="../Program/img/Applications/tiktok.png" alt="...">
                        </div>
                        <h2>
                            Tik Tok
                        </h2>
                        <a href="./PopularApps.php" class="btn_information">See More</a>
                    </div>
                </div>
                
            </div>
          
        </div>
<br>
<br>
<br>
<br>
        <div class="StaySafeContent">
            <h1 class="Section_Title">
                How to Stay Safe 
            </h1>
            <br>
            
            <div class="row">
                <div class="col-l-4 col-m-5 col-s-12">
                    <div class="StaySafeContentPara">
                        <h1>
                            Surf Smart: Essential Tips for Online Safety
                        </h1>
                        <br>
                        <p>
                        The web's a treasure trove, but dangers hide! Shield yourself: Guard info, craft strong passwords, avoid email scams, secure your tech, and be social media savvy. With these quick tips, you can explore the online world confidently!
                                      
                        </p>
                        
                        <a href="./LegalAndGuide.php" class="btn_information">See more</a>
                    </div>
                </div>
                <div class="col-l-8 col-m-7 col-s-12">
                    <div class="row">
                    <div class="col-l-4 col-m-5 col-s-12"> </div>

                    <div class="col-l-5 col-m-7 col-s-12">
                    <div class="img_container">
                        <img src="./img/3D(1).jpg" alt="">
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
       
        <br>
        <br>
        <div class="Social_Media_Campaign">
            
            <br>
            <br>
           
            
            <div class="row">
                <div class="col-l-5 col-m-5 col-s-12">
                    
                   <div class="video_container">
                   <iframe  src="https://www.youtube.com/embed/SbB4Mo3MnVo?si=-50RlQpOQsDA6GFN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                   </div>
                </div>
                <div class="col-l-7 col-m-7 col-s-12">
                    <div class="row">
                        <div class="col-l-7 col-m-5 col-s-12"> </div>

                            <div class="col-l-5 col-m-7 col-s-12">
                                    <div class="side_section">
                                        <h1>The teens Brains & Social Media</h1>
                                        <br>
                                        <p>Social media plays a significant role in the lives of teenagers, impacting their developing brains in various ways. While it offers opportunities for social connection and identity exploration, it also poses risks like anxiety, depression, and sleep disruption due to its addictive nature and constant comparison to idealized images. The teen brain, still maturing and highly sensitive to social rewards, is particularly vulnerable to these influences. Balancing social media use with offline activities and setting boundaries can help mitigate negative effects, promoting healthier development and well-being.

                                        </p>
                                    </div>
                            </div>
                         </div>
                </div>
            </div>
        </div>

    </div>
    
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
      <li><a href="./Home.php" class="footer_links active">Home</a></li>
      <li><a href="./PopularApps.php" class="footer_links">Popular Apps</a></li>
      <li><a href="./info.php" class="footer_links">Information</a></li>
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

</div>
</body>
</html>