<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    
   
    
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top"  style=" background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,9,45,1) 20%, rgba(0,212,255,1) 50%);  ">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">RECIPROCITY Bookstore</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
              <!-- link to publiser_list.php -->
              <li ><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;<font color="black"> Publisher</font></a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp;<font color="black"> Books</font></a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<font color="black"> Contact</font></a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;<font color="black"> My Cart</font></a></li>
              <li><a href="admin_signout.php"><font color="black">sign out</font></a></li>
              
            </ul>
        </div>
      </div>
    </nav>


    <?php
      if(isset($title) && $title == "Index") {
    ?>
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
   
    <?php } ?>

    <div class="container" id="main">
  