<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
</head>
<style>
    @import url('https://rsms.me/inter/inter.css');

html,
body {
  /* background: #000; */
 
}

body {
  /* font-family: 'Inter', sans-serif; */
  
  
  height: 100vh;
  
  margin: 0;
}





 h1{
  font-size: 56px;
  color:#fff;
}
.hero h3{
  font-size: 36px;
  color: #fff;
}
.down {
  text-align: center;
  position: absolute;
  opacity: 0.6;
  height: 40px;
  width: 100%;
  bottom: 0;
}

.content {
  box-shadow: 0 0 100px rgba(0,0,0,0.4);
  justify-content: center;
  align-items: flex-end;
  padding-bottom: 40px;
  position: relative;
  background: #fff;
  height: 800px;
  display: flex;
  top: 100vh;
}
#hero .btn-menu, #hero .btn-book {
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 1px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 5px;
  transition: 0.5s;
  line-height: 1;
  margin: 0 10px;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  color: #000 !important;
  border: 2px solid lightsteelblue;
  background: whitesmoke;;
text-decoration: none;
width: 185px;
}
#hero {
  padding-top: 40px;
}
#hero .btn-menu:hover, #hero .btn-book:hover {
  background: #d7ba8f;
  color: #fff;
}

@media screen and (max-width:900px) {
  .hero{
    height: 80vh
  }
  .hero h1{
  font-size: 46px;
}
.hero h3{
  font-size: 26px;
}
}
@media screen and (max-width:500px) {
  .hero{
    height: 80vh
  }
  .hero h1{
  font-size: 36px;
}
.hero h3{
  font-size: 22px;
}
#hero .btn-menu, #hero .btn-book {
  width: auto;
  margin-bottom: 20px;
}
}
</style>
<body>


<section class="panel">
<div class="hero">
  <h1>Welcome  <span style="color: saddlebrown;">To Glorious</span> Vision Ministry</h1>
  <h3 style="margin-bottom: 16px;">Sawari Ogo Mi</h3>
  <div id="hero" class="animate__animated animate__backInUp animate__delay-2s">
        <a href="abouto.php" class="btn-menu"><i class="fa-solid fa-circle-info" style="margin-right: 9px;"></i> About Us</a>
        <a href="" class="btn-book">Our Ministry</a>

     </div>
  <div class="down">
    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="7 13 12 18 17 13"></polyline><polyline points="7 6 12 11 17 6"></polyline></svg>
  </div>
</div>
</section>



</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script>
  // Built by @traf
// https://tr.af

// $(window).scroll(function() {
//   var scroll = $(window).scrollTop();
//   $(".hero").css({
//     transform: 'translate3d(0, +'+(scroll/100)+'%, 0) scale('+(100 - scroll/100)/100+')'
//   });
// });  
</script>
</html>