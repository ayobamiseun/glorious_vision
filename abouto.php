
<?php 
// include('./includes/header.php');
require_once './includes/header.php'
?>
<style>
.breadcrumbs {
  padding: 170px 0 60px 0;
  min-height: 30vh;
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  font-family: math;
}

body {
    font-family: math;
}

/* .breadcrumbs:before {
  content: "";
  background-color: rgba(0, 0, 0, 0.6);
  position: absolute;
  inset: 0;
}

.breadcrumbs h2 {
  font-size: 56px;
  font-weight: 500;
  color: #fff;
  font-family: var(--font-secondary);
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--color-primary);
}

.breadcrumbs ol a {
  color: rgba(255, 255, 255, 0.8);
  transition: 0.3s;
}

.breadcrumbs ol a:hover {
  text-decoration: underline;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #fff;
  content: "/";
} */
.rounded-circle {
    width: 300px;
  height: 200px;
  /* border-radius: 80%; */
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
</style>

<body>
   
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('./images/whoship1.jpg') ;">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About</h2>
        <!-- <ol>
          <li><a href="index.html">Home</a></li>
          <li>About</li>
        </ol> -->

      </div>
    </div>

    <div class="intro">
		<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 section-title  ftco-animate mb-1">
            <h2 class="subheading">Welcome To Glorious Vision</h2>
            <!--<h2 class="mb-2">The smartest way to buy a home</h2>-->

          </div>
        </div>
        <div class="row no-gutters">
          <!--<div class="col-md-6 p-md-5 img img-21 d-flex justify-content-center align-items-center" style="background: url(images/superfmlogo.png) center center; background-size: cover;: ">
          </div>-->
          <div class="col-md-12 wrap-about py-md-2 ftco-animate">
            <div class="heading-section p-md-1">
              <h2 class="mb-1"></h2>

              <p  style="color: #333 !important; font-size: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus assumenda nisi quia eaque. Unde incidunt optio velit obcaecati dolore aperiam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quas quasi quod ipsum, quisquam illo labore? Aliquam sapiente molestias omnis itaque, est sit libero distinctio tempora iste dolorem, unde repellendus?.</p>
              <p style="color: #333 !important; font-size: 17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam in ut rem pariatur aliquid fugiat Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti illo vero porro dolores beatae, quam quae officiis quibusdam a necessitatibus...</p>
            </div>
          </div>
        </div>

        <br />

         <div class="row">

           <div class="col-md-6">
              <h3>Mission</h3>
              <p>
                To Provide in an increasingly profitable manner, Radio broadcast service that will inform, inspire and Influencia all individuals in its coverage area and the world at large to live successful, meaningful and impactful lives.
              </p>
           </div>

           <div class="col-md-6">
              <h3>Vision</h3>
              <p>
                To be the most valued, vital and vibrant media platforms driving and promoting positive family values and creating successful individuals and success in it's coverage area and the world at large.
              </p>
           </div>

         </div>
      </div>
	</div>
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <h2 class="display-4">Our Ministers</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sint sed, fugit distinctio ad eius itaque deserunt doloribus harum excepturi laudantium sit officiis et eaque blanditiis. Dolore natus excepturi recusandae.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/pssss.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Pastor Oludare Adegunloye</h4>
            <span class="d-block mb-3 text-uppercase">Senior Pastor</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/adegunloye.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Pastor Mrs ruth Adegunloye</h4>
            <span class="d-block mb-3 text-uppercase">Pastor</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/chr.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Evangelist Christiana Ifedayo</h4>
            <span class="d-block mb-3 text-uppercase">Pastor</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/mathe.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Deaconess Vulyewa Mathe</h4>
            <span class="d-block mb-3 text-uppercase">Deaconess</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/samuel.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Deacon Samuel Ifedayo</h4>
            <span class="d-block mb-3 text-uppercase">Deacon</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div>
          <!-- <div class="col-lg-4 text-center mb-5">
            <img src="assets/img/person-5.jpg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">P</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, perspiciatis repellat maxime, adipisci non ipsam at itaque rerum vitae, necessitatibus nulla animi expedita cumque provident inventore? Voluptatum in tempora earum deleniti, culpa odit veniam, ea reiciendis sunt ullam temporibus aut!</p>
          </div> -->
          <!-- <div class="col-lg-4 text-center mb-5">
            <img src="assets/gallery/306971223_774662310417075_6606555459401130760_n.jpeg" alt="" class="img-fluid rounded-circle w-50 mb-4">
            <h4>Cameron Williamson</h4>
            <span class="d-block mb-3 text-uppercase">Pastor</span>
           </div> -->
          
        </div>
      </div>
    </section>
    <?php include('footer.php') ?>
</body>
</html>