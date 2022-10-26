<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/webfonts">
  <!-- animate css -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

</head>
<style>
    .call-to-action {
  /* background: linear-gradient(rgba(14, 29, 52, 0.6), rgba(14, 29, 52, 0.8));
   */
  background: lightgray;
    
  background-size: cover;
  padding: 100px 0;
}

.call-to-action {
  /* background: url("images/worship.jpg") center center no-repeat; */
  /* background-size: cover; */
  /* background-color: grey; */
  padding: 60px 0;
  position: relative;
  margin-top: 50px;
  color: #000;
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
  color: #000;
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
</style>
<body>
<section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Join Our Bible Study Group!</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="contact.php">Call To Action</a>
          </div>
        </div>

      </div>
    </section>
</body>
</html>