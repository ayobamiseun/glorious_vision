<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- fonts awesome -->
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
  <!-- animate css -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>
<style>
  .featured-services .icon-box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
    transition: all 0.3s ease-in-out;
    border-radius: 8px;
    z-index: 1;

  }

  .featured-services .icon-box::before {
    content: "";
    position: absolute;
    background: #d9f1f2;
    right: 0;
    left: 0;
    bottom: 0;
    top: 100%;
    transition: all 0.3s;
    z-index: -1;
  }

  .featured-services .icon-box:hover::before {
    background: slategray;
    top: 0;
    border-radius: 0px;
  }

  .featured-services .icon {
    margin-bottom: 15px;
    align-items: center;
  }

  .featured-services .icon i {
    font-size: 48px;
    line-height: 1;
    color: slategray;
    transition: all 0.3s ease-in-out;
    margin-left: 39%;
  }

  .section-bg {
    padding: 120px 0;
    /* color: #fff; */
  }

  .section-bg:before {
    content: "";
    background: #1b1b1b;
    position: absolute;
    bottom: 60px;
    top: 60px;
    left: 0;
    right: 0;
    transform: skewY(-3deg);
  }

  .featured-services .title {
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
    text-align: center;
  }

  .featured-services .title a {
    color: #111;
    text-decoration: none;
  }

  .sec {
    position: relative;
  }

  .featured-services .description {
    font-size: 15px;
    line-height: 28px;
    margin-bottom: 0;
    text-align: center;
  }

  .featured-services .icon-box:hover .title a,
  .featured-services .icon-box:hover .description {
    color: #fff;
  }

  .featured-services .icon-box:hover .icon i {
    color: #fff;
  }
</style>

<body>
  <section id="featured-services" class="featured-services sec section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-book"></i></div>
            <h4 class="title"><a href="">Exortation</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-music-note-beamed"></i></div>
            <h4 class="title"><a href="">Praise worship</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-plus-square-fill"></i></div>
            <h4 class="title"><a href="">Prayer</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">couseling</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section>
</body>

</html>