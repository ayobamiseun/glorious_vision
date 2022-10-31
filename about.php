<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
  <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  

</head>
<style>
  body{overflow-x: hidden}
    .heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.heading_container h2 {
  padding-left: 5px;
  position: relative;
  border-left: 7px solid slategray;
  font-weight: bold;
}
    .about_section {
  position: relative;
  padding-bottom: 10px;
  background-color: #ffffff;
}

.about_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.about_section .img-box img {
  width: 100%;
}

.about_section .detail-box p {
  margin-top: 15px;
  /* font-family: math; */
  font-size: 17px;
  text-align: justify;
}

.about_section .detail-box a {
  display: inline-block;
  padding: 7px 30px;
  background-color: whitesmoke;
  text-decoration: none;
  color: #000;
  font-weight: 500;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid lightsteelblue;
  border-radius: 10px;
  margin-top: 25px;
}

.about_section .detail-box a:hover {
  background-color: lightblue;
  border-color: transparent;
  color: #ffffff;
}

.about_section .square-box {
  position: absolute;
  right: 25px;
  bottom: 0;
  width: 75px;
}

.about_section .square-box img {
  width: 100%;
}
</style>
<body>
<section class="about_section layout_padding-bottom panel green" style="background-color:#fff ;color:#555555;; padding-top:0px;" >

<!-- <div class="square-box">
      <img src="images/square.png" alt="">
    </div> -->
    <div class="container" style="">
    <h4 class="h4-title">About  <span> Us</span></h4>
        <div class="section-title">
        <span class="line line-green"></span>

        </div>
      <div class="row">
        <div class="col-md-6">
          <div class="img-box" data-aos="fade-up"
     data-aos-duration="2000">
            <img src="images/worship.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up"
     data-aos-duration="2000">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Glorious Vision
              </h2>
              
            </div>
            <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum ullam ut explicabo facilis expedita ea eius perferendis assumenda, esse nemo quam vitae odit. Cupiditate, veniam quod qui magni consequuntur quos iusto aliquid, officiis in repudiandae eum optio odio omnis iure molestias ea facilis earum magnam, aliquam voluptas mollitia commodi perferendis.
            </p>
            <a href="abouto.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
</div>
   
  </section>

 
</body>
</html>