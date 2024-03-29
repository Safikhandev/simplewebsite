   <?php
      include 'header.php';
   ?>
<!-- ------------   start carousel ---------- -->
         
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/business.webp" class="d-block w-100" height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/business.webp" class="d-block w-100"  height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/business.webp" class="d-block w-100"  height="500px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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

<!-- ------------   end carousel ---------- -->
  <?php
    include 'about.php';
  ?>
<!-- ------------   start services section ---------- -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="images/un1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beautifull Shoe :)</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card"">
  <img src="images/un1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beautifull Shoe :)</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
            <div class="card" >
  <img src="images/un1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beautifull Shoe :)</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
        </div>
    </div>
    
</section>

    
    <!-- ------------   end services section ---------- -->
    <!-- ------------   start Gallery section ---------- -->


    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
            <div class="col-lg-4 col-md-4 col-12">
           <img src="images/un2@2x.jpg" class="img-fluid pb-3" alt="">
</div>
</div>
</div>



    <!-- ------------   end Gallery section ---------- -->
    <!-- ------------   start contact section ---------- -->

     
    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST">
            <div class="form-group mb-3">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group  mb-3">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Comments</label>
                <textarea class="form-control" name="comment" cols="3" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
</div>
    <!-- ------------   end contact section ---------- -->
 
    <?php

    include 'footer.php';
    


?>