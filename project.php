<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
   </script>
</head>

<style>
  .gallery {
  margin-top: 40px;
}

.gallery .gallery-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.gallery .gallery-item img {
  transition: 0.3s;
}

.gallery .gallery-links {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: all ease-in-out 0.3s;
  background: rgba(0, 0, 0, 0.6);
  z-index: 3;
}

.gallery .gallery-links .preview-link,
.gallery .gallery-links .details-link {
  font-size: 20px;
  color: rgba(255, 255, 255, 0.5);
  transition: 0.3s;
  line-height: 1.2;
  margin: 30px 8px 0 8px;
}

.gallery .gallery-links .preview-link:hover,
.gallery .gallery-links .details-link:hover {
  color: #fff;
}

.gallery .gallery-links .details-link {
  font-size: 30px;
  line-height: 0;
}

.gallery .gallery-item:hover .gallery-links {
  opacity: 1;
}

.gallery .gallery-item:hover .preview-link,
.gallery .gallery-item:hover .details-link {
  margin-top: 0;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}

.glightbox-clean .gslide-description {
  background: #222425;
}

.glightbox-clean .gslide-title {
  color: rgba(255, 255, 255, 0.8);
  margin: 0;
}
</style>
<body>
    <?php include('./includes/header.php') ?>
<section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image0.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image0.jpeg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image5.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image5.jpeg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image3.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image3.jpeg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image4.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image4.jpeg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image5.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image5.jpeg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image6.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image6.jpeg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image7.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image7.jpeg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image8.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image8.jpeg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image9.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image9.jpeg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image10.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="project/image10.jpeg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="project/image11.jpeg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-itm h-100">
              <img src="assets/img/gallery/gallery-15.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
         <!-- End Gallery Item -->

        </div>

      </div>
    </section>
<?php include('./includes/footer.php') ?>
</body>
</html>