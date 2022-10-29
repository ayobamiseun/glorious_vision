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
 </style>
 <?php include("includes/header.php") ?>
<main id="main" >
    <section id="contact" class="contact mb-5" >
      <div class="container" data-aos="flip-down" >

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
          <form action="contactinc.php" method="post" role="form" class="php-email-form">
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