<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
 
    <!-- <link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet"> -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  /* box-sizing: border-box; */
}
body{
    /* background-color: thistle; */
 
}




</style>
<body>
    <nav>
        <div class="logo">
        <a href="./index.php"> <img src="assets/img/logo.png" alt="" height="60px"></a> 
        </div>
        <ul class="nav-links">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./abouto.php">About</a></li>

            <li><a href="./sermon.php">Sermons</a></li>      
            <li><a href="./sermon.php">Pastor's Message</a></li>    
            <li><a href="#">Our Community</a></li>  
            <li><a href="#">Our Youth Ministry</a></li>  
            <li><a href="./contact.php">Contact</a></li>  
            <!-- <li><a href="#">Blogs</a></li>   -->
            <li><a href="./giving.php" class="button-51">
            Giving
            </a></li>  
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