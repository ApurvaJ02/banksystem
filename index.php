<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Sparks Indian Bank</title>
  </head>

  <body style="background-color:turquoise;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" style="background-color:turquoise;">
      <!-- Introduction section -->
            <div class="row intro py-1" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SPARKS INDIAN BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div>
            </div>

  <!-- About -->
  
  <!-- <div style="background-color : #82E0AA;" > -->
  <br/>
  <section id="about" class="container" >
    <h2 class="heading" style="color:black" >About Us</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <img class=" mt-3 " style="width:400px;" src="img/bank2.jpg" alt="TSF Bank">
        </div>
        <div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text" style="color:black">Spark Bank</span>
          </div>
          <div class="mt-2">
            <span class="sub-content">It is a Basic Banking System where transactions take place
              between users.You can create a account in the bank.It can transfer Money between multiple accounts,view all Customer's data 
              and view all the past transactions and you can contact us.</span>
          </div>
          <a href="#services" class="btn btn-outline-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- </div> -->
  <!-- End About -->


      <!-- Activity section -->
      <!-- <div style="background-color : #82E0AA;" > -->
      <br/>
      <section class="container" id="services">
      <h2 class="heading" style="color:black">Services</h2>
            <div class="row activity text-center"  >
                  <div class="col-md act">
                    <img src="img/user1.jpg" class="img-fluid">
                      <br/>
                    <a href="viewcustomers.php"><button style="background-color : #2785C4;">View Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer1.jpg" class="img-fluid">
                      <br/>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history1.jpg" class="img-fluid">
                      <br/>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <!-- </div> -->

      <!-- Contact -->
      <!-- <div style="background-color : #82E0AA;" > -->
  <section class="mx-auto" id="contact" >
    <br/>
    <h2 class="heading" >Contact Us</h2>
    <form>
      <div class="row mb-3" >
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Enter your E-Mail">
      </div>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Your City" aria-label="City">
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
          placeholder="Leave your comments here...."></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>
  <!-- </div> -->
  <!-- End Contact -->
  
      <footer class="text-center mt-5 py-2" >
        <p>&copy 2021. Made by <b>APURVA JALGAONKAR</b> 
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>