<?php 

$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != "") {

  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'adamssmithsamuel@gmail.com';
    $body = "";
    
    $body = "FROM :  ".$userName." /r/n/";
    $body =  "EMAIL :  ".$userEmail." /r/n/";
    $body =  "MESSAGE :  ".$message." /r/n/";
     
    // mail($to, $subject, $body); 
  
  }
  $message_sent = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="a ssets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/variable.css">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>
<body>
    
 <style>
    .contact .info-item {
  text-align: center;
}
.contact a {
    color:#000;
    text-decoration: none;
}

.contact .info-item i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: var(--color-primary);
}

.contact .info-item address,
.contact .info-item p {
  margin-bottom: 0;
}

.contact .info-item h3 {
  font-size: 16px;
  margin-bottom: 15px;
  font-weight: bold;
  letter-spacing: 0.1rem;
  text-transform: uppercase;
  color: var(--color-primary);
}

.contact .info-item a:hover {
  color: var(--color-primary);
}

@media (min-width: 768px) {
  .contact .info-item-borders {
    border-left: 1px solid rgba(var(--color-secondary-rgb), 0.2);
    border-right: 1px solid rgba(var(--color-secondary-rgb), 0.2);
  }
}

.contact .php-email-form {
  box-shadow: 0 0 30px rgba(var(--color-black-rgb), 0.1);
  padding: 30px;
  background: var(--color-white);
}

@media (max-width: 640px) {
  .contact .php-email-form {
    padding: 20px;
  }
}

.contact .php-email-form .error-message {
  display: none;
  color: var(--color-white);
  background: var(--color-red);
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: var(--color-white);
  background: var(--color-green);
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: var(--color-white);
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--color-green);
  border-top-color: var(--color-white);
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
  margin-bottom: 20px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  padding: 10px 14px;
  border-radius: 0;
  box-shadow: none;
  font-size: 15px;
}

.contact .php-email-form input::focus,
.contact .php-email-form textarea::focus {
  background-color: var(--color-primary);
}

.contact .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;
}

.contact .php-email-form button[type=submit]:hover {
  background: rgba(var(--color-primary-rgb), 0.8);
}

@media (max-width: 702px) {
  .cont{
    margin-top: 110px !important;
  }
}
/* Button */
.button-30 {
  align-items: center;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: #36395A;
  cursor: pointer;
  display: inline-flex;
  font-family: "JetBrains Mono",monospace;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
}
 </style>
 <?php include("includes/header.php") ?>


<main id="main" >
    <section id="contact" class="contact mb-5" >
      < class="container" data-aos="flip-down" >
<?php 
  if ($message_sent):
?>
<h1 style="padding-top:200px ;">Thanks  for the message we will get in touch </h1>

<!-- HTML !-->
      <div style="display: flex;">
      <div style="margin: auto;">
      <a href="index.php" style="text-decoration: none; color:#36395A;">
      <button class="button-30" role="button">Home Page</button>
      </a>
     
      </div>
    
      </div>




<?php
 else:
 ?> 
       <div class="row">
          <div class="col-lg-12 text-center mb-5 cont" style="margin-top: 80px;">
            <h1 class="page-title">Contact us</h1>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item info-item-borders">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-4">
            <div class="info-item">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="form mt-5">
          <form action="contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->
<?php 
endif;
 ?>
      </div>
    </section>

  </main>
  
  <?php include("./footer.php")?>

  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <!-- <script src="assets/vendor/aos/aos.js"></script> -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });
});
  </script>
</body>
</html>