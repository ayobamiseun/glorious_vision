<!DOCTYPE html>
<html lang="en">
<head>
  
</head>
<style>
    #myBtn {
  display: none;
  position: fixed; 
  bottom: 20px; 
  right: 30px; 
  z-index: 99; 
  border: none; 
  outline: none; 
  background-color: #6DCFF6; 
  color: #fff; 
  cursor: pointer; 
  padding: 15px;
  border-radius: 10px; 
  font-size: 18px; 
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>
<script>
    // Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
</html>