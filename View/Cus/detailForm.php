<?php require '../../Controller/productControllerDetail.php';
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail</title>
  <link rel="stylesheet" href='index.css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!-- Page Content -->
  <div class="container">

    <!-- Portfolio Item Heading -->
    <h1 class="my-4">Product Detail
      <small><?php echo $product->name; ?></small>
    </h1>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo  $product->getImageAdmin(); ?>" alt="">
      </div>

      <div class="col-md-4">
        <a href="../../index.php"><img src="../../Assets/Image/logo3.jpg" alt="" style="width: 300px"></a>
        <h3 class="my-3">Description</h3>
        <!-- gg -->
        <p>This is a product of Hung Shop. <?php echo $product->description; ?></p>
        <h3 class="my-3">Details</h3>
        <ul>
          <li>Price: <?php echo $product->price; ?></li>
          <li>Old Price: <?php echo $product->oldPrice; ?></li>
          <li>Quantity: <?php echo $product->quantity; ?></li>
          <li><form action=""method="POST"><button class="btn btn-info" name="add-cart-detail">Add to Cart</button></form></li>
        </ul>
      </div>

    </div>
    <!-- /.row -->

    <!-- <h3 class="my-4">Related Products</h3>
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="<?php echo $img[0]->getImageAdmin(); ?>" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="<?php echo $img[1]->getImageAdmin(); ?>" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="<?php echo $img[2]->getImageAdmin(); ?>" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="<?php echo $img[3]->getImageAdmin(); ?>" alt="">
        </a>
      </div>
    </div> -->
  </div>
</body>

</html>