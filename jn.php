<!DOCTYPE html>
<html lang="en">

<?php

include "./includes/header.php"

?>
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
  <!-- animate css -->
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
<style>
    :root {
  --color-default: #364d59;
  --color-primary: #6DCFF6;
  --color-secondary: #52565e;
}
    .get-started .join-now {
  padding: 30px 0;
}

.get-started .join-now h3 {
  font-size: 36px;
  color: var(--color-secondary);
  font-weight: 600;
  margin-bottom: 25px;
  padding-bottom: 25px;
  position: relative;
}

.get-started .join-now h3:after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 4px;
  background: var(--color-primary);
  left: 0;
  bottom: 0;
}

.get-started .join-now p {
  font-size: 16px;
  font-family:'Aeonik' sans-serif;
  font-weight:500
}

.get-started .php-email-form {
  background: #fff;
  padding: 30px;
  height: 100%;
}

@media (max-width: 575px) {
  .get-started .php-email-form {
    padding: 20px;
  }
}

.get-started .php-email-form h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  
}

.get-started .php-email-form p {
  font-size: 14px;
  margin-bottom: 20px;
  font-family:'Aeonik' sans-serif;
  font-weight:500
}

.get-started .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.get-started .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.get-started .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.get-started .php-email-form input,
.get-started .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}

.get-started .php-email-form input:focus,
.get-started .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.get-started .php-email-form input {
  padding: 12px 15px;
}

.get-started .php-email-form textarea {
  padding: 12px 15px;
}

.get-started .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 10px 30px;
  color: #000;
  transition: 0.4s;
  border-radius: 4px;
}
.section-bg {
    background-color: #f5f6f7
}
.get-started .php-email-form button[type=submit]:hover {
  background: grey;
}
#get-started {
        margin-top: 100px;
     }

@media screen and  (max-width:800px) {
     #get-started {
        margin-top: 50px;
     }
}
</style>

<main id="main" >

<section id="get-started" class="get-started section-bg" >
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="join-now">
              <h3>Join Us at Glorious Vision Church today .</h3>
              <p>Join a friendship circle of true christians always ready to study and discuss the word of God, causing you to grow spiritually. 
               
              <p> Joining a Bible Study Group is a representation of oneself into mini family inside the big family, the church. Your bible study group is responsible for joint prayers, one on one counselling with God-minded Christians and growth..</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
            <form action="#" method="post" class="php-email-form">
              <h3>Fill Your Information</h3>
              <!-- <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p> -->
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                  <button id="showB" class="button-30" type="submit" value="Send"  name='submit'>Submit</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section>

</main>
<?php 
include "includes/footer.php";
?>
</html>