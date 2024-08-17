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
    <meta name="viewport" content="width=`device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css?v=<?php echo time();?>">
<body>
    <?php include('navbar.php') ?>
    <br>
    <br>
    <h1 class="Live_stream_Headline">How Live Streaming Works?</h1>
    <br>
    <br>
    <div class="row">

            <div class="col-l-3 col-m-2 col-s-12">
            
            </div>

            <div class="col-l-6 col-m-8 col-s-12">
                    <div class="video_container">
                    <iframe  src="https://www.youtube.com/embed/K5n3IqpbBCE?si=TRzi-1CB8zFNY-_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
            </div>

        <div class="col-l-3 col-m-2 col-s-12">
            
        </div>
    </div>

    <br>

    <br>
    <div class="row">
     <div class="col-l-3 col-m-2 col-s-12">
            
            </div>

            <div class="col-l-6 col-m-8 col-s-12">
                 <div class="Live_Streaming_contents">
                 <p>
                  Forget TV, live streaming lets you broadcast live over the internet! You use an app to capture your video and audio, like your face on a webcam or your gaming screen. This raw data is bulky, so the app shrinks it down for a smoother journey across the web. The shrunken video and audio are then chopped into tiny packets and sent to a streaming service. This service acts like a dispatcher, sending your live stream to viewers who've tuned in on a website, app, or the platform you're using. Viewers see and hear your content in real-time, with a tiny delay. Imagine it like a water hose - you're the source, the app compresses the water flow, the streaming service delivers it, and viewers receive it at their end. Live streaming lets you connect and share in real-time, all thanks to the magic of the internet!



                  </p>
                 </div>
            </div>

        <div class="col-l-3 col-m-2 col-s-12">
            
        </div>
    </div>
    <br>
    <br>
    <h1 class="safe_live_streaming_title">How To Do Safe Live Streaming?</h1>  
    <br>
    <br>
    <div class="row">
     <div class="col-l-3 col-m-2 col-s-12">
            
            </div>

            <div class="col-l-6 col-m-8 col-s-12">
                 <div class="Live_Streaming_contents">
                        <p>
                        Live streaming lets you connect with your audience in real-time, but safety is key. Before hitting "go live," take some precautions.  First, understand the platform you're using. Familiarize yourself with their community guidelines to avoid any rule-breaking that could get you banned.
                        </p>
                 </div>
                        <br>
                 <div class="Live_Streaming_contents">
                       <p>
                       Next, control your privacy settings. Decide who can see your stream and interact with you. This might involve enabling chat moderation, setting age restrictions, or choosing who can join voice chats. Be mindful of your background too. Avoid showing any personal details you wouldn't want public.
                       </p>
                 </div>
                        <br>
                 <div class="Live_Streaming_contents">
                 <p>Once you're live, be cautious about what information you share. Avoid revealing your address, phone number, or other sensitive details. If you have a large audience, consider a chat moderator to help manage comments and keep the environment positive. Watch out for scams – don't click on suspicious links, and be wary of viewers offering unsolicited help or gifts. And if you see someone harassing or bullying others, report them immediately.</p>

                 </div>

                 
            </div>

        <div class="col-l-3 col-m-2 col-s-12">
            
        </div>
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
      <li><a href="./info.php" class="footer_links">Information</a></li>
      <li><a href="./Parents_Help.php" class="footer_links">Parents help</a></li>
      <li><a href="./LiveStreaming.php" class="footer_links Livestreaming active">LiveStreaming</a></li>
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