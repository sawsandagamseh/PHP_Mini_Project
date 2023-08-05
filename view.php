<?php
class item {
    public $name;
    public $price;
    public $description;
    public $date;
    public $image;

    public function __construct($name, $price, $description, $date){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this-> date=$date;
        $this->image = 'picture/dress2.jpg';
    }
}
session_start();





?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-light " style="background-color: #A78295">
  <div>
  <a class="navbar-brand" href="#" style="color:white;">
    <img src="./picture/Captur.PNG" width="40" height="40" class="d-inline-block align-top" alt="">
    <i><b>Fashionista</b></i>
  </a>
</div>
<div>
  <a class="navbar-brand" href="index.php" style="color:white;">
    
    <i>Home</i>
  </a>
  <a class="navbar-brand" href="view.php" style="color:white;">
    
    <i>view</i>
  </a>
</div>
</nav>
  <?php
  
if (isset($_SESSION['array_session_items'])) {
    $stored_array = $_SESSION['array_session_items'];
    //print_r($stored_array);

    echo '<div class= "container" style=" display: flex; 
    justify-content:flex-start;
    align-content: space-between;
    flex-wrap: wrap;
    ">';

    // Loop through each item and display its properties
    foreach ($stored_array as $item) {

    
    
     echo '<div class="card" style="width: 18rem;  margin:10px;">';
      echo " <img class='card-img-top' src='". $item->image ."' alt='Card image cap' tyle='width:100%; height:100px'> ";
    echo ' <div class="card-body">
     <p class="card-text">';
        echo "<h2> " . $item->name . "</h2>";
        echo "<h3> " . $item->price . "</h3>";
        echo "<h5 style='color:gray;'>  " . $item->description . "</h5>";
        echo " <h6 style='color:gray;'>" . $item->date . "</h6>";
      echo "</p>
      </div>
    </div>";
       
    }
}

echo "</div>";
?>
   <!-- <div class= "container" style=" display: flex; 
     justify-content:space-between;
     align-content: space-between;
     flex-wrap: wrap;
     ">
   ?>
  <div class="card" style="width: 18rem; margin-top:10px;">
  <img class="card-img-top" src="picture/dress2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make
         up the bulk of the card's content.</p>
  </div>
</div>
 

<div class="card" style="width: 18rem; margin-top:5px;">
  <img class="card-img-top" src="picture/dress2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card" style="width: 18rem; margin-top:5px;">
  <img class="card-img-top" src="picture/dress2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card" style="width: 18rem; margin-top:5px;">
  <img class="card-img-top" src="picture/dress2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

  <div class="card" style="width: 18rem; margin-top:5px;">
  <img class="card-img-top" src="picture/dress2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</div> -->



<!-- Footer -->
<footer class="text-center text-lg-start   text-white" style="background-color:#A78295; padding-top:10px";>
  <!-- Section: Social media -->
  
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Fashionista Store
          </h6>
          <p>
          We are an online store selling clothes for girls 
          from the best international brands. With us, you will save a lot of time and money, 
          and your look will be unique and dazzle everyone.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Dresses</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Shirts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Skirts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Trousers</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Irbid City, str 60, Jordan</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
           sawsan.dagamsh1@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 962 779754852</p>
          <p><i class="fas fa-print me-3"></i> + 962 779754852</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Fashionista Store</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>