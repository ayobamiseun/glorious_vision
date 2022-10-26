<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
</head>
<style>
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
}

.about_section .detail-box a {
  display: inline-block;
  padding: 7px 30px;
  background-color: whitesmoke;
  text-decoration: none;
  color: #000;
  font-weight: 600;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid lightsteelblue;
  border-radius: 25px;
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
<section class="about_section layout_padding-bottom panel green" style="background-color:#fff ;color:#000;" >

    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container" style="">
    <h4>Who we are</h4>
        <div class="section-title">
        <span class="line line-green"></span>

        </div>
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/worship.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Glorious Vision
              </h2>
              
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in
              some form, by injected humour, or randomised words
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

 
</body>
</html>