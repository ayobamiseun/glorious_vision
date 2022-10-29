<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
  margin: 2rem auto;
}

.gallery {
  display: grid;
  max-width: 100%;
  margin: 0 auto; 
  grid-gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-auto-rows: minmax(150px, auto);
}

.gallery-item {
  max-width: 100%;
  border-radius: 5px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.5);
  transition: all .3s;}
  .gallery-item:hover {
    box-shadow: 0 10px 20px rgba(0,0,0,0.8);
  }
  .gallery img {
    width: 100%;
    object-fit: cover;
  }
.gallery .gallery-item {
        border-right: 0; 
    border-bottom: 0;
}
</style>
<body>
<div class="container">
 
  <hr>
  <div class="gallery">
    <div class="view overlay hm-black-light gallery-item">
      <img src="assets/gallery/woman.jpeg" alt="Placeholder Image" class="img-fluid">
      <!-- <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div> -->
    </div>
    <div class="view overlay hm-black-light gallery-item">
      <img src="assets/gallery/praisee.jpeg" alt="Placeholder Image" class="img-fluid">
      <!-- <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div> -->
    </div>
    <div class="view overlay hm-black-light gallery-item">
      <img src="assets/gallery/311154615_798340524715920_7760245634733993370_n.jpeg" alt="Placeholder Image" class="img-fluid">
      <!-- <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div> -->
    </div>
    <!-- <div class="view overlay hm-black-light gallery-item">
      <img src="https://placeimg.com/640/480/animals" alt="Placeholder Image" class="img-fluid">
      <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div>
    </div>
    <div class="view overlay hm-black-light gallery-item">
      <img src="https://placeimg.com/640/480/people" alt="Placeholder Image" class="img-fluid">
      <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div>
    </div>
    <div class="view overlay hm-black-light gallery-item">
      <img src="https://placeimg.com/640/480/any" alt="Placeholder Image" class="img-fluid">
      <div class="mask flex-center">
        <p class="white-text">Gallery Item</p>
      </div>
    </div> -->
  </div>
</div>
</body>
</html>