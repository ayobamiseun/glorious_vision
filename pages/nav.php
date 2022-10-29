<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <title>Responcive Navigation</title> -->
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
    /* background-color: thistle; */
 
}

nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 10vh;
  background: #fff;
  position: fixed;
  width: 100%;
  z-index: 10000000000;
  font-family: math;
 
  
}

h1{
  text-align:center;
  
}
.logo {
  color: white;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-size-adjust: 22px;
  margin-right:100px;
}

.nav-links {
  display: flex;
  justify-content: space-around;
  width: 60%;
  margin:20px;
}
.nav-links li {
  list-style: none;
}

.nav-links a {
  color: #000;
  text-decoration: none;
  letter-spacing: 1px;
  padding: 18px 12px;
  font-weight: bold;
  font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
}

.burger {
  display: none;
}

.burger div {
  width: 25px;
  height: 2px;
  background-color: #000;
  margin: 5px;
  transition: all 0.3s ease;
}

@media screen and (max-width: 988px) {
    body{
        overflow-x: hidden;
    }
  .nav-links {
    position: absolute;
    right: 0px;
    height: 60vh;
    top: 8vh;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    align-items: baseline;
    width: 60%;
    transform: translateX(100%);
    transition: transform 0.5s ease-in;
    z-index: 1000000;
    margin: 0;
  }

  .nav-links li {
      opacity: 0;
  }
  .burger {
      display: block;
      cursor: pointer;
  }
}

.nav-active{
    transform: translateX(0%);
}
@keyframes navLinkFade{
    from{
        opacity: 0;
        transform: translateX(50px);
    }
    to{
        opacity: 1;
        transform: translateX(0px);
    }
}

.toggle .line1{
    transform: rotate(-45deg) translate(-5px,5px);
}
.toggle .line2{
    opacity: 0;
}
.toggle .line3{
    transform: rotate(45deg) translate(-5px,-5px);

}
.logo a img {
    height: 60px !important;
}
</style>
<body>
    <nav>
        <div class="logo">
        <a href="../index.html"> <img src="../images/logo.png" alt="" height="60px"></a> 
        </div>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="pages/abouto.php">About</a></li>
            <li><a href="#">Sermons</a></li>       
            <li><a href="#">Our Community</a></li>  
            <li><a href="#">Our Youth Ministry</a></li>  
            <li><a href="contact.php">Contact Us</a></li>  
            <li><a href="#">Blogs</a></li>  
            <li><a href="../server/index.php">donate</a></li>  
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <script>
        const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li')

    burger.addEventListener('click', ()=>{
        //Toggle the nave
        nav.classList.toggle('nav-active')

        //Animate the nave
        navLinks.forEach((link,index) =>{
            if(link.style.animation){
                link.style.animation = ''
            }
            else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index /  7 + 0.5}s`
            }
        })

        //burger close animation
        burger.classList.toggle('toggle')

    })
}

navSlide();
    </script>
</body>
</html>
</body>
</html>