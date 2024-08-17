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


if(isset($_POST['btnSend']))
{

    if(isset($_POST['CboPrivacy']))
    {
        $Email = $_POST['txtEmail'];
        $Desc = $_POST['txtDescription'];
    
        
    $checkEmail="select * from feedbacks where Email='$Email' and Descriptions='$Desc'"; 
    
    $result1=mysqli_query($con,$checkEmail); 
    
    $count=mysqli_num_rows($result1); 
    
        if($count > 0)
        {
            echo "<script>alert('Already Sent the Same Message!')</script>"; 
        }
    
        else
        {
            $query = "Insert into feedbacks(Email,Descriptions) values ('$Email','$Desc')";
            $result= mysqli_query($con,$query); 
            
        
        
        if ($result) { 
        
            // code... 
            
            echo "<script>alert('Message Sent.')</script>"; 
            
            } 
            
            else{ 
            
            echo "<script>alert('Message Send Fail!')</script>"; 
            
            } 
            
        
        }
    
    }else
    {
        echo "<script>alert('Please Accept the term and policy!')</script>"; 
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
    
    <?php include('navbar.php');?>

    <br>
    <br>

    <div class="row">
        <div class="col-l-6">
            <div class="Contact_Us_Page">
                <form action="Contact.php" method="Post">
                    <div>
                        <label for="">Email</label> <br> 
                        <input type="email" name="txtEmail" id="">
                    </div>
                    <br> 
                    <div>
                        <label for="">Description</label> <br>
                        <textarea name="txtDescription" id=""></textarea>
                    </div>
                    <br>

                    <div class="privacy_policy_div">
                        <input type="checkbox" name="CboPrivacy" id="">
                    <p> Accept the <a href="./LegalAndGuide.php" class="privacy_policy_link">Privacy and Policy.</a></p>
                    </div>
                    
                    <br>
                    <input type="submit" value="Send Message" name="btnSend">
                </form>
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
      <li><a href="./Parents_Help.php" class="footer_links">Parents help</a></li>
      <li><a href="./LiveStreaming.php" class="footer_links">LiveStreaming</a></li>
      <li><a href="./Contact.php" class="footer_links active">Contact US</a></li>
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