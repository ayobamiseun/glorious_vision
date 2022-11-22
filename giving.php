<?php
include('./includes/header.php');
// require_once './includes/header.php'

?>
<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
 <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<style>
    .breadcrumbs {
        padding: 170px 0 60px 0;
        min-height: 50vh;
        position: relative;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        font-family: math;
      
    }

    body {
        font-family: math;
    }



    .section-title {
        text-align: center;
        padding-top: 20px;
    }

    .section-title h2 {
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        position: relative;
        color: #222222;
        padding-bottom: 40px
    }

    .section-title h2::before,
    .section-title h2::after {
        content: "";
        width: 50px;
        height: 2px;
        background: #3498db;
        display: inline-block;
    }

    .section-title h2::before {
        margin: 0 15px 10px 0;
    }

    .section-title h2::after {
        margin: 0 0 10px 15px;
    }

    .section-title p {
        margin: 15px 0 0 0;
    }

    .call-to-action {
        /* background: linear-gradient(rgba(14, 29, 52, 0.6), rgba(14, 29, 52, 0.8));
   */
        background: lightgray;

        background-size: cover;
        padding: 100px 0;
    }
 .giving-text {
    font-size:18px;
    font-family: 'Aeonik' sans-serif !important ;
    font-weight:400;
    
 }

 @media  only screen and (max-width: 600px) {
    .giving-text {
    font-size:14px;
    font-family: 'Aeonik' sans-serif !important ;
    font-weight:400;
   
    
 }
 }
    .call-to-action {
        /* background: url("images/worship.jpg") center center no-repeat; */
        /* background-size: cover; */
        /* background-color: grey; */
        padding: 60px 0;
        position: relative;
        margin-top: 50px;
        color: #000;
        margin-bottom: 50px;
        /* height:100vh; */
    }

    /* .call-to-action::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  color: #000;
  background: rgba(255, 255, 255, 0.8);
  z-index: 9;
} */

    @media (min-width: 1365px) {
        .call-to-action {
            background-attachment: fixed;
        }
    }

    .call-to-action h3 {
        color: darkslategray;
        font-size: 28px;
        font-weight: 700;
    }

    .call-to-action p {
        color: #000;
    }

    .call-to-action .cta-btn {
        font-family: var(--font-primary);
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 40px;
        border-radius: 5px;
        transition: 0.5s;
        margin: 10px;
        color: #000 !important;
        border: 2px solid lightsteelblue;
        background: whitesmoke;
        text-decoration: none;
    }

    .call-to-action .cta-btn:hover {
        background: var(--color-primary);
        border: 2px solid var(--color-primary);
    }

    /* CSS */
    .button-33 {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
        color: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-33:hover {
        box-shadow: rgba(44, 187, 99, .35) 0 -25px 18px -14px inset, rgba(44, 187, 99, .25) 0 1px 2px, rgba(44, 187, 99, .25) 0 2px 4px, rgba(44, 187, 99, .25) 0 4px 8px, rgba(44, 187, 99, .25) 0 8px 16px, rgba(44, 187, 99, .25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
    }
</style>

<body>
   
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('./assets/img/banner.jpeg') ;">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Giving!</h2>


            <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol> -->

        </div>
    </div>

    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out"  data-aos-duration="3000">

            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h5 style="text-align:justify;" class="giving-text">        In Glorious Vision, we give not out of compulsion or fear but a desire to see the gospel prosper in our day. Partner with us today. Put your money where your faith is.
</h5>
                    <!-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->


                    <div>
                        <!-- <a class="cta-btn" href="contact.php"></a> -->
                        <button class="button-33" role="button" style="margin: 20px;">Bank Transfer</button>
                        <!-- HTML !-->
                        <a href="./client/">
                        <button class="button-33" role="button">
                            Give with Card
                        </button>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>
    

    <?php include('./includes/footer.php') ?>

    <script src="assets/vendor/aos/aos.js"></script>
    <script>
          AOS.init();
    </script>