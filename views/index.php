
<?php

session_start();

//print_r($_SESSION);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iloom</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css -->
  <link rel="stylesheet" href="../assets/main-styles.css">
  <link rel="stylesheet" href="../assets/footer.css">

  <link rel="stylesheet" href="../assets/footer-test.css">

  <!-- google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
  
  <style>
  .material-symbols-outlined {
  font-variation-settings:
  'FILL' 1,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
  
<body>
  <div class="wrapper">
    <header>
      <?php include "menu.php"; ?>
    </header>


    <!-- <div class="banner" id="banner">
      <div class="banner-text">
        <h2>Welcome <span>iloom</span> Furniture</h2>
        <p>Happy Winter Sale Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae minus quidem impedit, cumque unde suscipit modi et eius quod dignissimos quaerat necessitatibus? Dolorum laborum facilis accusantium, soluta fuga voluptas?</p>
        <a href="sales.php">Shop Now!</a>
      </div>
    </div> -->

    <!--  -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/banner1.png" class="d-block w-100" alt="...">
          <div class="banner-text">
            <h2>Welcome <span>iloom</span> Furniture</h2>
            <p>Happy Winter Sale Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae minus quidem impedit, cumque unde suscipit modi et eius quod dignissimos quaerat necessitatibus? Dolorum laborum facilis accusantium, soluta fuga voluptas?</p>
            <a href="sales.php">Shop Now!</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/banner5.png" class="d-block w-100" alt="...">
          <div class="banner-text">
            <h2>Welcome <span>iloom</span> Furniture</h2>
            <p>Happy Winter Sale Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae minus quidem impedit, cumque unde suscipit modi et eius quod dignissimos quaerat necessitatibus? Dolorum laborum facilis accusantium, soluta fuga voluptas?</p>
            <a href="sales.php">Shop Now!</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/banner4.png" class="d-block w-100" alt="...">
          <div class="banner-text">
            <h2>Welcome <span>iloom</span> Furniture</h2>
            <p>Happy Winter Sale Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae minus quidem impedit, cumque unde suscipit modi et eius quod dignissimos quaerat necessitatibus? Dolorum laborum facilis accusantium, soluta fuga voluptas?</p>
            <a href="sales.php">Shop Now!</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--  -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">

        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <h2>Welcome <span>iloom</span> Furniture</h2>
        <p>Happy Winter Sale Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni recusandae minus quidem impedit, cumque unde suscipit modi et eius quod dignissimos quaerat necessitatibus? Dolorum laborum facilis accusantium, soluta fuga voluptas?</p>
        <a href="sales.php">Shop Now!</a>
        <div class="carousel-item active">
          <img src="../images/banner1.png" class="d-block w-100" alt="..." style="width: 100%; height:1000px;"> 
        </div>
        <div class="carousel-item">
          <img src="../images/banner5.png" class="d-block w-100" alt="..." style="width: 100%; height:1000px;">
        </div>
        <div class="carousel-item">
          <img src="../images/banner4.png" class="d-block w-100" alt="..." style="width: 100%; height:1000px;">
        </div>
        <div class="carousel-item">
          <img src="../images/banner6.png" class="d-block w-100" alt="..." style="width: 100%; height:1000px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> -->

    <!--  -->

    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="../images/banner1.png" alt="First slide" style="width: 100%; height:1000px;">
          <h2>hello</h2>
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="../images/banner2.png" alt="Second slide" style="width: 100%; height: 1000px;">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="../images/banner3.png" alt="Third slide" style="width: 100%; height: 1000px;">
        </div>
      </div>
    </div>
    -->

    

    <!-- item list -->
    <div class="item-list">
      <!-- <div class="item">
        <a href="all-items.php" class="btn btn-circle"><i class="fas fa-star"></i><p class="title">ALL</p></a>
        
      </div> -->
      
      <div class="item">
        <a href="chair.php" class="btn btn-circle"><i class="fas fa-chair"></i><p class="title">CHAIR</p></a>
        
      </div>

      <div class="item">
        <!-- ここのアイコン調整必要かも -->
        <a href="bed.php" class="btn btn-circle"><span class="material-symbols-outlined">bed</span><p class="title">BED</p></a>
       
      </div>

      <div class="item">
        <a href="bath.php" class="btn btn-circle"><i class="fas fa-bath"></i><p class="title">BATH</p></a>
        
      </div>

      <div class="item">
        <a href="lamp.php" class="btn btn-circle"><span class="material-symbols-outlined">floor_lamp</span><p class="title">LAMP</p></a>
        
      </div>

      <div class="item">
        <a href="couch.php" class="btn btn-circle"><i class="fas fa-couch"></i><p class="title">COUCH</p></a>
       
      </div>

      <div class="item">
        <!-- ここのアイコン調整必要かも -->
        <a href="dining.php" class="btn btn-circle"><span class="material-symbols-outlined">restaurant</span><p class="title">DINING</p></a>
        
      </div>

      

    </div>


    

    <!-- products -->
    <div class="product-gallery">

      <div class="product-items">
        <a href="chair.php" class="image"><img src="../images/chair1.png" class="product-image" alt="chair" width="" height="500"><h3 class="centered">CHAIR</h3></a>
      </div>
      <div class="product-items">
        <a href="bed.php" class="image"><img src="../images/bed1.png" class="product-image" alt="bed" height="500"><h3 class="centered">BED</h3></a>
      </div>
      <div class="product-items">
        <a href="bath.php" class="image"><img src="../images/bath1.png" class="product-image" alt="bath" height="500"><h3 class="centered">BATH</h3></a>
      </div>
      <div class="product-items">
        <a href="lamp.php" class="image"><img src="../images/lamp1.png" class="product-image" alt="lamp" height="500"><h3 class="centered">LAMP</h3></a>
      </div>

      <div class="product-items">
        <a href="couch.php" class="image"><img src="../images/couch2.png" class="product-image" alt="couch" height="500"><h3 class="centered">COUCH</h3></a>
      </div>
      <div class="product-items">
        <a href="dining.php" class="image"><img src="../images/dining1.png" class="product-image" alt="dining" height="500"><h3 class="centered">DINING</h3></a>
      </div>
      <div class="product-items">
        <a href="holiday.php" class="image"><img src="../images/holiday1.png" class="product-image" alt="holidy" height="500"><h3 class="centered">HOLIDAY</h3></a>
      </div>
      <div class="product-items">
        <a href="candle.php" class="image"><img src="../images/candle8.png" class="product-image" alt="candle" height="500"><h3 class="centered">CANDLE</h3></a>
      </div>
      
      
    </div>

    
    

    <div class="iloom-top_2" id="iloom-top_2">
      <div class="iloom-top_about-item2 iloom-item1">
        
        <h4 class="iloom-text" style="margin-top: 125px">
        <h2><a href="about-us.php">ABOUT US</a></h2>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum deserunt optio vero possimus ipsum, molestias molestiae nam, laborum, natus facere perspiciatis earum. Culpa ullam quas veritatis earum et, molestiae esse?</h4>
        
      </div>

      <div class="iloom-top_about-item2 iloom-item2">
        <img src="../images/dining6.png"  alt="" class="iloom-item2-image1">
      </div>
      
    </div>

    <!--  -->
    
    <hr>
    <div class="iloom-top_3" id="iloom-top_3">
      <div class="iloom-top_about-item3-header">
          <span>Recommended iloom-item</span>
          <h2>iloom-item</h2>
          <!-- <hr> -->
      </div>
      <div class="iloom-top_about-item3-gallery">
          <div class="iloom-top_about-item3">
            <a href="chair.php" class="image"><img src="../images/chair4.png" alt="" class="iloom-item3-image1"><h6>Caxton</h6></a>
          </div>

          <div class="iloom-top_about-item3">
            <a href="candle.php" class="image"><img src="../images/candle11.png" alt="" class="iloom-item3-image2"><h6>Tacity</h6></a>
          </div>

          <div class="iloom-top_about-item3">
            <a href="dining.php" class="image"><img src="../images/dining7.png" alt="" class="iloom-item3-image3"><h6>Withink</h6></a>
          </div>

          <div class="iloom-top_about-item3">
            <a href="lamp.php" class="image"><img src="../images/lamp5.png" alt="" class="iloom-item3-image4"><h6>Jasper Stoney</h6></a>
          </div>
      </div>
    </div>
    <hr>

    <!-- <section id="news" class="wrapper">
        <h2 class="section-title">
          <span class="en">NEWS</span>
          <span class="ja">ニュース</span>
        </h2>

        <ul class="list">
          <li>
            <div class="date-area">
              <time datetime="2021-01-01">2021.01.01</time>
              <span>NEWS</span>
            </div>
            <p>タイトルタイトルタイトルタイトル</p>
          </li>
          <li>
            <div class="date-area">
              <time datetime="2021-01-01">2021.01.01</time>
              <span>PRESS</span>
            </div>
            <p>タイトルタイトルタイトルタイトル</p>
          </li>
          <li>
            <div class="date-area">
              <time datetime="2021-01-01">2021.01.01</time>
              <span>NEWS</span>
            </div>
            <p>タイトルタイトルタイトルタイトル</p>
          </li>
        </ul>
      </section>  -->


   





    

    <footer>
      <?php include "footer.php"; ?>
    </footer>


  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

</body>
</html>