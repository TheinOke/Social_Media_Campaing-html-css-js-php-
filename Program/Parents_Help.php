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
    <title>Parents Help</title>
</head>

<link rel="stylesheet" href="style.css?v=<?php echo time();?>">

<body>
    <?php include("navbar.php") ?>

    <br>
    <br>
    
   
    <div class="row">
        <div class="col-l-6">
            <div class="img_container">
                <img src="./img/ParentHelp/Parent_help_p1.jpg" alt="">
            </div>
        </div>
        <div class="col-l-6">
        <h1>
        Parent's help Lists
        </h1>
        <br>

            <ul class="Parent_ul">
                <li>
                    <h2><a href="#ph-1"> Foster Open Communication and Trust</a></h2>
                </li>
                <br>
                <li>
                    <h2><a href="#ph-2"> Prioritize Safety and Wellbeing</a></h2>
                </li>
                <br>
                <li>
                    <h2><a href="#ph-3">  Nurture Positive Social Interactions</a></h2>
                </li>
               
            </ul>
        </div>
    </div>
<br>
<br>
    <div class="row">
        <div class="col-l-6 col-m-9 col-s-12">
            <div class="parent_help_content">
                <h1 id="ph-1">
                Foster Open Communication and Trust
                </h1>
                <br>
                <p>
                Start Early: Discuss social media even before your teen joins any platforms. Talk about potential benefits, risks, and ground rules together.
                Active Listening: Create a safe space for your teen to share their online experiences, both good and bad. Avoid judgment and focus on understanding their perspective.
                Set Expectations: Work collaboratively to create clear guidelines for responsible social media use. This could include time limits, content restrictions, and privacy settings.
                Positive Role Model: Demonstrate healthy social media habits yourself. Be mindful of your screen time and the content you share.
                </p>
            </div>
            <br>
            <br>
            <div class="parent_help_content">
                <h1 id="ph-2">
                Prioritize Safety and Wellbeing
                </h1>
                <br>
                <p>
                Privacy Settings: Help your teen understand how to control their privacy settings on various platforms. Encourage selective connections and information sharing.
                Cyberbullying Awareness: Discuss the importance of online kindness and respect. Teach your teen to identify and handle cyberbullying situations.
                Digital Citizenship: Educate them about online safety practices: password security, avoiding scams, and critical evaluation of information found online.
                Balance is Key: Promote other activities and hobbies outside of social media. Prioritize sleep, real-life interactions, and staying physically active.
                </p>
            </div>
            <br>
            <br>
            <div class="parent_help_content">
                <h1 id="ph-3">
                Nurture Positive Social Interactions
                </h1>
                <br>
                <p>
                Highlight the Benefits: Help your teen see the positive aspects of social media, such as staying connected with loved ones, exploring interests, and sharing knowledge.
                Encourage Positive Content Creation: Support them in using social media for self-expression. Encourage them to create and share content that reflects their interests and talents.
                Critical Thinking Skills: Discuss the curated nature of social media. Train your teen to analyze information critically and question what they see online.
                Mental Health Awareness: Be aware of the potential impact of social media on your teen's mental health. Discuss the dangers of social comparison and unrealistic beauty standards.                </p>
            </div>
            <br>

        </div>
        
        <div class="col-l-6 col-m-9 col-s-12">
            
            <div class="row">
                <div class="col-l-5"></div>
                <div class="col-l-7 col-m-12 col-s-12">
                <h2>Uploaded Campaigns</h2>
                <br>
                    <div class="side_bar_contents">
                            <!-- --------------- -->
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

                                  
                                    echo " <div class='side_bar_content'>
                                         <a href='CampaignsDetails.php?CampaignID=$CmpID'> <h2>$CmpTitle</h2></a>
                                        <div>
                                        <div class='UploadedBy'><span><b>$CmpUploadedBy</b></span></div>
                                        <div class='Date'><b>$CmpPostedDate</b></div>
                                    </div>
                            </div>";
                                   
                                    }
                             ?>
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
      <li><a href="./Home.php" class="footer_links ">Home</a></li>
      <li><a href="./PopularApps.php" class="footer_links ">Popular Apps</a></li>
      <li><a href="./info.php" class="footer_links">Information</a></li>
      <li><a href="./Parents_Help.php" class="footer_links active">Parents help</a></li>
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