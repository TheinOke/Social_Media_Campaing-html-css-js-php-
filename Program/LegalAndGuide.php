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
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time();?>">
<body>
    <?php include('navbar.php'); ?>
    <br>
    <br>
    <div class="row">
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_left">
            <h1>Standing Up to Cyberbullying on Social Media</h1>
            <br>
            <p>
            Social media can be a fantastic tool for connection and fun, but it can also be a breeding ground for cyberbullying and harassment. These issues can have serious consequences for both the target and the perpetrator.

            The good news is, there are legal and practical steps you can take to navigate the online world safely.            </p>
            
            </div>
        </div>
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p1.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>
    <div class="row">
     
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p2.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_right">
            <h1>What are the Laws?</h1>
            <br>
            <p>
            Social media can be a fantastic tool for connection and fun, but it can also be a breeding ground for cyberbullying and harassment. These issues can have serious consequences for both the target and the perpetrator.

            The good news is, there are legal and practical steps you can take to navigate the online world safely.            </p>
            
            </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>


    <div class="row">
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_left">
            <h1>Finding the Details</h1>
            <br>
        
            <p>
            Don't wait until you need it! Familiarize yourself with the relevant laws in your area.  Start by checking your government's official website for sections on online safety and cybercrime. Look for terms like "Cyberbullying," "Online Harassment," or "Cybersecurity." Resources like legal databases (may require subscriptions) can also help you search for specific legislation by country.            

            </p>

            </div>
        </div>
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p3.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>
    <div class="row">
     
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p4.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_right">
            <h1>Taking Action on Social Media</h1>
            <br>
            <p>
            Every social media platform has its own community guidelines outlining expected user behavior and content restrictions.  Take some time to review these guidelines on the platforms you use most often (e.g., Facebook, Twitter, Instagram).  Knowing what constitutes bullying or harassment will help you avoid unintentionally causing harm to others.
                      </p>
            
            </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>

    <!--  -->

    <div class="row">
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_left">
            <h1>Be a responsible User</h1>
            <br>
        
            <p>
            Think before you post!  Avoid sharing any content that could be considered threatening, abusive, or defamatory towards others.  Respect user privacy and refrain from sharing personal information without someone's consent.            

            </p>

            </div>
        </div>
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p5.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>
    <div class="row">
     
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p6.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_right">
            <h1>If You're Targeted</h1>
            <br>
            <p>
            If you're on the receiving end of cyberbullying or harassment, it's important to document the abuse. Keep screenshots and any other records of the messages or behavior. Most platforms offer reporting tools specifically for cyberbullying – use them!  Blocking the offending accounts is another way to limit their ability to harass you further.                      </p>
            
            </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>
    <!--  -->

    <div class="row">
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_left">
            <h1>Together We Can Make a Difference</h1>
            <br>
        
            <p>
            By understanding the laws and best practices for online behavior, we can all work towards creating a safer and more positive social media experience for everyone.  Report cyberbullying when you see it, hold platforms accountable for enforcing their policies, and spread awareness about responsible online behavior.           

            </p>

            </div>
        </div>
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p7.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>
    <div class="row">
     
        <div class="col-l-6 col-m-6 col-s-12">
           <div class="row">
                <div class="col-l-3 col-m-3 col-s-12"></div>
                <div class="col-l-6 col-m-6 col-s-12">
                    <div class="img_container">
                        <img src="./img/Legislation/p8.jpg" alt="">
                    </div>
                </div>
                <div class="col-l-3 col-m-3 col-s-12"></div>
           </div>
        </div>
        <div class="col-l-5 col-m-6 col-s-12">
            <div class="Legal_txtContents_right">
            <h1>You are Not Alone</h1>
            <br>
            <p>
            Remember, you don't have to go through this alone.  Reach out to trusted friends, family, or mental health professionals for support if you're being targeted online.  There are also many organizations dedicated to helping people deal with cyberbullying.

pen_spark

 </p>
            
            </div>
        </div>
    </div>

    <br>
    <br>
    <!------------------------>

    <!--  -->

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
      <li><a href="./info.php" class="footer_links">Information</a></li>
      <li><a href="./Parents_Help.php" class="footer_links">Parents help</a></li>
      <li><a href="./LiveStreaming.php" class="footer_links">LiveStreaming</a></li>
      <li><a href="./Contact.php" class="footer_links">Contact US</a></li>
      <li><a href="./LegalAndGuide.php" class="footer_links active">Legislation & Guidance</a></li> 
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