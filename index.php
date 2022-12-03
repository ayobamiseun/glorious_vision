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
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>

  <?php
  // include('public/nav.php');
  include("./includes/header.php");
  include("./pages/land.php");


  include("./pages/who-we-are.php");
  include("./includes/section3.php");
  include("./includes/img.php");
  include("./includes/aboutt.php");

  include("./includes/join.php");
  include("./includes/footer.php");

  include('./includes/top.php')
  ?>


</body>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js?r=cahcebustin"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
<script src="https://codepen.io/GreenSock/pen/7ba936b34824fefdccfe2c6d9f0b740b.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    
  gsap.registerPlugin(ScrollTrigger);


 

  // --- RED PANEL ---
  gsap.from(".line-1", {
    scrollTrigger: {
      trigger: ".line-1",
      scrub: true,
      start: "top bottom",
      end: "top top"
    },
    scaleX: 0,
    transformOrigin: "left center",
    ease: "none"
  });


  // --- ORANGE PANEL ---
  gsap.from(".line-2", {
    scrollTrigger: {
      trigger: ".orange",
      scrub: true,
      pin: true,
      start: "top top",
      end: "+=100%"
    },
    scaleX: 0,
    transformOrigin: "left center",
    ease: "none"
  });


  // --- PURPLE/GREEN PANEL ---
  var tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".purple",
      scrub: true,
      pin: true,
      start: "top top",
      end: "+=100%"
    }
  });

  // tl.from(".purple p", {
  //     scale: 0.3,
  //     rotation: 45,
  //     autoAlpha: 0,
  //     ease: "power2"
  //   })
  //   .from(".line-3", {
  //     scaleX: 0,
  //     transformOrigin: "left center",
  //     ease: "none"
  //   }, 0)
  //   .to(".purple", {
  //     backgroundColor: "rgb(34, 35, 38)",
  //     color: "#fff"
  //   }, 0);




  gsap.from(".line-green", {
    scrollTrigger: {
      trigger: ".line-green",
      start: "top center",
      end: "top 100px",
      toggleActions: "play complete reverse reset"
    },
    scaleX: 0,
    duration: 5,
    repeat: -1,
    transformOrigin: "left center",
    ease: "none"
  });






  // possible solution for old iOS bugs that don't display things inside an iframe correctly. Create a --full-height CSS variable and use it instead of height: 100%
  // function readHeight() {
  // 		if (ScrollTrigger.isScrolling()) {
  // 			console.log("wait until end...");
  // 			ScrollTrigger.addEventListener("scrollEnd", readHeight);
  // 		} else {
  // 			ScrollTrigger.removeEventListener("scrollEnd", readHeight);
  // 			window.removeEventListener("resize", readHeight);
  // 			let scrollFunc = ScrollTrigger.getScrollFunc(window),
  // 				scrollProgress = scrollFunc() / ScrollTrigger.maxScroll(window),
  // 				docStyle = document.documentElement.style,
  // 				bodyStyle = document.body.style;
  // 			bodyStyle.overflow = "auto";
  // 			docStyle.setProperty("--full-height", "100%");
  // 			docStyle.setProperty("--full-height", window.innerHeight + "px");
  // 			bodyStyle.overflow = "unset";
  // 			setTimeout(function() {
  // 				window.addEventListener("resize", readHeight);
  // 			}, 500);
  // 			ScrollTrigger.refresh(true);
  // 			scrollFunc(scrollProgress * ScrollTrigger.maxScroll(window));
  // 		}
  // 	}
  function animateFrom(elem, direction) {
    direction = direction || 1;
    var x = 0,
      y = direction * 100;
    if (elem.classList.contains("gs_reveal_fromLeft")) {
      x = -100;
      y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
      x = 100;
      y = 0;
    }
    elem.style.transform = "translate(" + x + "px, " + y + "px)";
    elem.style.opacity = "0";
    gsap.fromTo(elem, {
      x: x,
      y: y,
      autoAlpha: 0
    }, {
      duration: 4.25,
      x: 0,
      y: 0,
      autoAlpha: 1,
      ease: "expo",
      overwrite: "auto"
    });
  }

  function hide(elem) {
    gsap.set(elem, {
      autoAlpha: 0
    }); 
  }

  document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
      hide(elem); // assure that the element is hidden when scrolled into view

      ScrollTrigger.create({
        trigger: elem,
        onEnter: function() {
          animateFrom(elem)
        },
        onEnterBack: function() {
          animateFrom(elem, -1)
        },
        onLeave: function() {
          hide(elem)
        } // assure that the element is hidden when scrolled into view
      });
    });
  });

 
</script>

</html>