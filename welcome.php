<?php
// ------------------------------------------- 5 entering to welcome page after login ---------------------

session_start();

//checking you are in session or not   ------------- logic is session variables loggedin is only set when you 
                                                //   visit login page , if you directly come to welcome page
                                                //  it means loggedin variable is not set true and you are 
                                                // forwarded to login page , if values set than you can see 
                                                // content of the the welcome page .

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      //if means your are not logged in then forward to login page

      header("location:login.php");
      exit; 
}

?>

                 <!-- ----------------------   6 welcome page content ----------------------- -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_navbar.php'?>    

    <div class="container my-3" >
      <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
        <p>Hey, how are you doing? Welcome to digiSecure. You are logged in as
        - <?php echo $_SESSION['username']?>. You are reading this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use this link to <a href="/loginsystem/logout.php">logout </a>.</p>
      </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>