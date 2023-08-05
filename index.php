<?php
class item {
    public $name;
    public $price;
    public $description;
    public $date;
    public $image;

    public function __construct($name, $price, $description, $date,$image){
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this-> date=$date;
        $this->image = $image;
    }
}

session_start();


 $array_of_items = array();
if (!isset($_SESSION['array_session_items'])) {
    $_SESSION['array_session_items'] = $array_of_items;
}

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['date']) && isset($_POST['image'])) {
    $item_name = $_POST['name'];
    $item_desc = $_POST['description'];
    $item_price = $_POST['price'];
    $item_date = $_POST['date'];
    $item_image = $_POST['image'];
   

    $new_item = new item($item_name, $item_price, $item_desc, $item_date,$item_image);

    $array_of_items_add = $_SESSION['array_session_items'];
    array_push($array_of_items_add, $new_item);
    $_SESSION['array_session_items'] = $array_of_items_add;

    //print_r($array_of_items_add);
}

// if (isset($_SESSION['array_session_items'])) {
//     $stored_array = $_SESSION['array_session_items'];
//     // Do something with the stored array
//     echo "<br>" . count($_SESSION['array_session_items']);
//   //print_r($_SESSION['array_session_items'][2]);
// // for($i=0; $i<count($_SESSION['array_session_items']) ; $i++){
// //     echo count($_SESSION['array_session_items']);
// // foreach($_SESSION['array_session_items'][1] as $value){
// //     echo $value . '<br>';
// // }
// // }
// }
?><!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="home_page.css">
     
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
  <a class="navbar-brand" href="#" style="color:white;">
    
    <i>Home</i>
  </a>
  <a class="navbar-brand" href="view.php" style="color:white;">
    
    <i>view</i>
  </a>
</div>
</nav>
<div  class="welcome_div"  style="    background-image:url('./picture/stor2.png');
     height: 300px;
      background-repeat: no-repeat;
     background-size: 100% 400px ; 
     display: flex; 
     justify-content: center;
     align-items: center;
     opacity: 0.5;
     " 
      >

  <h2 style=" font-size: 350%;   color:black;
    


            text-shadow: 
                -1px -1px 0 #000,  
                1px -1px 0 #000,
                -1px 1px 0 #000,
                1px 1px 0 #000;  "><i> Welcome To<br>  <b>Fashionista</b> store</h1><</i>


</div>
<div style="display: flex; 
     justify-content: center;
     align-items: center;
     margin-top:30px;
     margin-bottom:30px;
    "
      >
<form action="home_page_design.php" method="POST" enctype="multipart/form-data"
 style="width:50%; background-color:#A78295; padding:20px;" >

  <div class="form-group row text-white"  style="padding-top:20px">
    <label for="name" class="col-sm-2 col-form-label">Item Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Name" Item Name="name" required placeholder="Item Name">
    </div>
  </div>
  <div class="form-group row text-white">
    <label for="price" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="price" placeholder="price" name="price" required>
    </div>
  </div>
  <div class="form-group row text-white">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="description" placeholder="description" required name="description">
    </div>
    
  </div>

  <div class="form-group row text-white">
    <label for="image" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="image" placeholder="plese enter the image URL" required name="image" value="picture/dress2.jpg">
    </div>
    
  </div>
  <div class="form-group row text-white">
    <label for="date" class="col-sm-2 col-form-label">Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date"  name="date" required>
    </div>
  </div>
  
  <fieldset class="form-group text-white">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check text-white">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  <div class="form-group row text-white">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-light">submit</button>
    </div>
  </div>
</form>
</div>


<div>
<?php
echo '<table class="table table-hover">
       <thead style="background-color:#A78295; ">
        <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Description</th>
      <th scope="col">price</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>';

  if (isset($_SESSION['array_session_items'])) {
    $stored_array = $_SESSION['array_session_items'];

    // Loop through each item and display its properties
    foreach ($stored_array as $item) {
        echo "<tr>";
         
        echo "<td>" . $item->name . "</td>";
        echo "<td>" . $item->price . "</td>";
        echo "<td> " . $item->description . "</td>";
        echo "<td>" . $item->date . "</td>";
        echo "<td><img src='" . $item->image . "' style='width:50px;'></td>";
        echo "</tr>";
        
    }
}

echo  "</tbody></table>";

?>  
</div>
<div style="  display: flex; 
     justify-content: center;">
      <form action="view.php" method="post">
        <!-- Add any form inputs here, if needed -->
        <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-dark">View</button>
    </div>
  </div>    </form> 
    </div>
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