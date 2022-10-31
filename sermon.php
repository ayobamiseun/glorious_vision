<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
</head>
<style>
    .furnitures_section {
    width: 100%;
    float: left;
    padding-bottom: 90px;
}
.furnitures_section2{
    width: 100%;
    float: left;
}
.image {
  display: block;
  width: 100%;
  height: 350px;
}
@media only screen and (max-width: 600px) {
  .image {
    height: 250px;
  } 
  .frame2 {
    padding-top: 20px;
  }
}

.our_text{
    width: 100%;
    float: left;
    font-size: 36px;
    color: #121111;
    /* text-transform: uppercase; */
    text-align: center;
}
.ipsum_text{
    width: 100%;
    float: left;
    font-size: 16px;
    color: #090808;
    text-align: center;
    margin-left: 0px;
    margin-top: 10px;
}



</style>
<body>
    <?php include("includes/header.php") ?>
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('./assets/img/banner.jpeg') ;">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Sermons</h2>
        <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol> -->

      </div>
    </div>
<div style="padding-top: 20px; padding-bottom: 20px;">
<div class="furnitures_section layout_padding" style="padding-top: 20px; padding-bottom: 20px; background:lightgray; " >
         <div class="container">
            <div class="section-title">
            <h2 class="our_text">Our Sermons</h2>
            <!-- <p class="ipsum_text">Check out our sermons</p> -->
            </div>
       
           
            <div class="furnitures_section2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="container_main">
                     <iframe class="image" 
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
                       
                     </div>
                       </div>
                  <div class="col-md-6 frame2" >
                     <div class="container_main">
                     <iframe class="image"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>  
                     </div>
                    </div>
               </div>
            </div>
         </div>
      </div>
</div>

      <?php include("includes/footer.php") ?>
</body>
</html>