<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>

<style>
    .chefs {
  /* background: url("images/worship.jpg") center center no-repeat; */
  /* background-size: cover; */
  background-color: grey;
  /* padding: 60px 0; */
  position: relative;
  margin-top: 50px;
  /* height:100vh; */
  font-family: ;
}
.chefs::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.8);
  z-index: 9;
}
.chefs .container {
  position: relative;
  z-index: 10;
}
.chefs .member {
  text-align: center;
  margin-bottom: 80px;
  position: relative;
}
.chefs .member .pic {
  overflow: hidden;
}
.chefs .member .member-info {
  position: absolute;
  bottom: -80px;
  width:100%;
  background: #fff;
  padding: 20px 0;
  color: #433f39;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: max-height 0.5s ease-in-out;
}

.chefs .member h4::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: lightblue;
  bottom: 0;
  left: calc(50% - 25px);
}
.chefs .member span {
  font-style: italic;
  display: block;
  font-size: 13px;
}
.chefs .member .social {
  margin-top: 15px;
}
.chefs .member .social a {
  transition: color 0.3s;
  color: #7a7368;
}
.chefs .member .social a:hover {
  color: #ffb03b;
}
.chefs .member .social i {
  font-size: 16px;
  margin: 0 2px;
}
@media (max-width: 992px) {
  .chefs .member {
    margin-bottom: 110px;
  }
}
@media (min-width: 1024px) {
  .chefs {
    background-attachment: fixed;
  }
}

.line {
  width: 100%;
  max-width: 800px;
  height: 8px;
  margin: 0 0 10px 0;
  position: relative;
  display: inline-block;
  background-color: slategray;
}
.gs_reveal {
  opacity: 0;
  visibility: hidden;
  will-change: transform, opacity;
}

</style>
<body>
<section id="chefs" class="chefs panel">
      <div class="container" style="padding-top:20px">
  <h4 class="h4-title">Who  We <span>Are </span></h4>
        <div class="section-title">
        <span class="line line-1">

        </div>

        <div class="row ">

          <div class="col-lg-4 col-md-6 gs_reveal ">
            <div class="member">
              <div class="pic"><img src="images/bible2.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Our Ministry</h4>
                <!-- <span>Master Chef</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gs_reveal">
            <div class="member">
              <div class="pic"><img src="images/9a787e17d11ea4cf499c463c8040127e.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Youth Ministry</h4>
                <!-- <span>Patissier</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 gs_reveal" >
            <div class="member">
              <div class="pic"><img src="images/family.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Our Ministers</h4>
                <!-- <span>Cook</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

</body>
</html>