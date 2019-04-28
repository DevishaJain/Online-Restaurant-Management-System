<?php 
session_start();   
include('db1.php');

extract($_POST);//the extract() function imports local variables into local symbol table from an array
if(isset($_POST['book']))
{
     
    $sql=mysql_query("select * from booktable where date='$date' and tables='$tables'");
    $r=mysql_num_rows($sql);
        if($r==true)
             {
        echo "SORRY,THE TABLE CANNOT BE BOOKED!!!";
       }
        
      else
        { 
        
           $a=$_POST['name'];
           $b=$_POST['email'];
 
           $c=$_POST['number'];
           $d=$_POST['date'];
           $e=$_POST['tables'];
 



           $insert=mysql_query("insert into booktable(name, email, number, date, tables) values('$a','$b','$c','$d','$e')");
           if(!$insert)
              {echo "fail";}



          else
    { echo "BOOKING CONFIRMED!!!";}

       
        }
}
if(isset($_POST['question']))
{
 $aa=$_POST['name'];
 $bb=$_POST['email'];
 $cc=$_POST['message'];


    

 
 $insert=mysql_query("insert into contact(name, email, message) values('$aa','$bb','$cc')");
if(!$insert)
{echo "fail";}



else
{
    echo "MESSAGE sent!!";
}
}
        
   ?> 


<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>DAILY DELIGHT'S</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        .logo {
            transition: 1s;
        }

        .logo:hover {
            transform: rotateY(360deg);
        }

        .hvr-grow {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(4px) translateZ(0);
            transform: perspective(4px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: transform;
            transition-property: transform;
        }

        .hvr-grow:hover,
        .hvr-grow:focus,
        .hvr-grow:active {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .crsl {
            height: 800px;
        }

    </style>
</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(0,0,0,0.3)">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <i class="fas fa-home text-light logo"></i>
                <li class="nav-item active">

                    <a class="nav-link text-light bg-danger" href="project.php">HOME </a>
                </li>

                <i class="fas fa-image text-light logo"></i>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="proj3.php">GALLERY</a>
                </li>

                <i class="fas fa-pen text-light logo"></i>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="proj2.php">ABOUT</a>
                </li>
                <i class="fas fa-map-marker-alt text-light"></i>

                <li class="nav-item active">
                    <a class="nav-link text-light" href="proj1.php">CONTACT</a>
                </li>
            </ul>
            <h1 class="text-light">DAILY DELIGHT'S</h1>
        </div>
    </nav>



    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 crsl" src="bgg1.crdownload" alt="First slide">
                <div class="carousel-caption">
                    <h1 class="display1 text-center text-light" style="margin-top: -500px;font-size: 100px"><b>Daily Delight's</b></h1>
                    <blockquote class="text-center">
                        <p class="text-light">THE BEST IN TASTE</p>
                    </blockquote>

                    <div class="text-center">
                        <button type="button" class="btn bg-danger btn-lg"><a href="booking.php" style="text-decoration:none;color:white">Book</a></button>
                        <button class="btn btn-lg" type="submit">  <a href="proj4.php" style="text-decoration: none;color: black">  Login</a></button>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 crsl" src="bgg2.jpeg" alt="Second slide">
                <div class="carousel-caption">
                    <h1 class="display1 text-center text-light" style="margin-top: -700px;font-size: 100px"><b>Daily Delight's</b></h1>
                    <blockquote class="text-center">
                        <p class="text-light">THE BEST IN TASTE</p>
                    </blockquote>

                    <div class="text-center">

                        <button type="button" class="btn btn-lg" style="margin-top: 60px"><a href="booking.php" style="text-decoration:none;color:black">Book now</a></button>

                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 crsl" src="bgg3.jpeg" alt="Third slide">
                <div class="carousel-caption">
                    <h1 class="display1 text-center text-light" style="margin-top: -700px;font-size: 100px"><b>Daily Delight's</b></h1>
                    <blockquote class="text-center">
                        <p class="text-light">THE BEST IN TASTE</p>
                    </blockquote>

                    <div class="text-center">
                        <button type="button" class="btn btn-outline-dark btn-lg" style="margin-top: 60px"><a href="booking.php" style="text-decoration:none;color:black">Book now</a></button>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


    <div class="row" style="margin-top: 200px">
        <div class="card ml-5 border-0 shadow rounded hvr-grow" style="width:20%">
            <img class="card-img-top" src="snacks.jpg" style="height:190px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Snacks and Starters</h5>
                <hr>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
        </div>
        <div class="card ml-5 border-0 shadow rounded hvr-grow" style="width:20%">
            <img class="card-img-top" src="mc.jpeg" style="height:190px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Main Course</h5>
                <hr>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
        </div>
        <div class="card ml-5 border-0 shadow rounded hvr-grow" style="width:20%">
            <img class="card-img-top" src="drinks.jpeg" style="height: 190px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"> Soft Drinks</h5>
                <hr>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
        </div>
        <div class="card ml-5 border-0 shadow rounded hvr-grow" style="width:20%">
            <img class="card-img-top" src="cp.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Cakes and Pasties</h5>
                <hr>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
        </div>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" style="margin-top: 200px" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="bg1.jpeg" style="height: 400px" alt="First slide">
                <div class="carousel-caption">
                    <i class="fas fa-utensils fa-5x"></i>
                    <h1 class="display1" style="font-size: 60px"><b>Peaceful Ambiance</b></h1>
                    <p>Calm and peacful place with a delighful meal</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bg2.jpg" style="height: 400px" alt="Second slide">
                <div class="carousel-caption">
                    <i class="fas fa-utensils fa-5x"></i>
                    <h1 class="display1" style="font-size: 60px"><b>Delicious Food </b></h1>
                    <p>Great ideas comes with a great mind,have our meals to stay healthy</p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    </div>
    <div class="row" style="padding-left:50px;margin-top:200px">

        <div class=" col text-center" style="color:black">
            <i class="fas fa-cocktail fa-8x"></i>
            <div class="text-dark" style="font-size: 22px;margin-top: 10px"><b>REJUVENATING</b></div>
            <hr>
            <p class="text-center text-dark">Lorem ipsum dollor sit amet consectetur adipicising elit.Quasi,possimus beatae.Architecto vel,amet excpturinisi quidem aliquid facilis in.</p>


        </div>
        <div class=" col text-center" style="color:brown">
            <i class="fas fa-utensils fa-8x"></i>
            <div class="text-dark" style="font-size: 22px;margin-top: 10px"><b>DELICIOUS</b></div>
            <hr>
            <p class="text-center text-dark">Lorem ipsum dollor sit amet consectetur adipicising elit.Quasi,possimus beatae.Architecto vel,amet excpturinisi quidem aliquid facilis in.</p>

        </div>
        <div class=" col text-center" style="color:black">
            <i class="fas fa-cogs fa-8x"></i>
            <div class="text-dark" style="font-size: 22px;margin-top: 12px"><b>SATISFYING</b></div>
            <hr>
            <p class="text-center text-dark">Lorem ipsum dollor sit amet consectetur adipicising elit.Quasi,possimus beatae.Architecto vel,amet excpturinisi quidem aliquid facilis in.</p>

        </div>
        <div class=" col text-center" style="color:brown">
            <i class="fas fa-beer fa-8x"></i>
            <div class="text-dark" style="font-size: 22px;margin-top: 12px"><b>GREAT</b></div>
            <hr>
            <p class="text-center text-dark">Lorem ipsum dollor sit amet consectetur adipicising elit.Quasi,possimus beatae.Architecto vel,amet excpturinisi quidem aliquid facilis in.</p>


        </div>
    </div>

    <div class="row" style="margin-top: 200px">
        <div class="col" style="margin-right:-25px"> <img src="img2.jpeg" style="height: 400px;width:100%">

        </div>

        <div class="col">
            <div class="card border-0" style="width:500px;margin-left:60px;margin-top: 0px">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 40px">Traditional Touch</h5>
                    <h6 class="card-subtitle my-2 text-muted">RESTAURANT FOR KIDS AND FAMILY</h6>
                    <hr>
                    <p class="card-text">Not only what is made,but also how it is made matters,there is a traditional touch on whatever we make,to make you feel home</p>
                    <button class="btn btn-lg" type="submit">  <a href="proj4.php" style="text-decoration: none;color: black">  Login</a></button>




                    <button class="btn btn-danger btn-lg" type="submit"><a href="proj5.php" style="text-decoration: none;color:white">  Register</a></button>




                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="card border-0" style="width:500px;margin-left:60px;margin-top:80px"></div>
            <div class="card-body">
                <h5 class="card-title" style="font-size: 40px">Traditional Touch</h5>
                <h6 class="card-subtitle my-2 text-muted">RESTAURANT FOR KIDS AND FAMILY</h6>
                <hr>
                <p class="card-text">Not only what is made,but also how it is made matters,there is a traditional touch on whatever we make,to make you feel home</p>
                <button type="button" class="btn btn-outline-dark btn-lg" style="margin-top: 95px"><a href="booking.php" style="text-decoration:none;color:black">Book now</a></button>

            </div>
        </div>
        <div class="col" style="margin-left: -25px"><img src="img1.jpeg" style="height: 410px;width:100%"></div>


    </div>

    <div>

        <h2 style="text-align: center;color: black;padding-top:20px">Stay Abreast-Connect!</h2>
        <p style="text-align: center;color: black">Get updates about releases, as backgrounds and features are actively in the works.</p>
        <div class="col-md-6 offset-md-3" style="text-align:center">
            <i class="fab fa-facebook-f fa-2x px-2" style="color: blue"></i>
            <i class="fab fa-twitter fa-2x" style="color: aqua"></i>
            <i class="fab fa-instagram fa-2x pl-2" style="color: brown"></i>
            <i class="fab fa-whatsapp fa-2x pl-2" style="color:darkgreen"></i>
            <i class="fab fa-youtube fa-2x pl-2" style="color: red"></i>
            <i class="fab fa-linkedin-in fa-2x pl-2" style="color: darkturquoise"></i></div>

        <form class="form-inline d-flex justify-content-center" style="padding-top: 30px;text-align: center">

            <div class="form-group mb-2" style="text-align: center">
                <label for="staticEmail2" class="sr-only">Email</label>
                <input type="text" class="form-control" id="inputtext" placeholder="email@example.com">
                <button type="submit" class="btn btn-danger btn-lg mb-2 mx-1">Sign Up</button>


            </div>


        </form>
        <hr>
        <p style="color:black;text-align: center">Designed at https://www.learncodeonline.in offline bootcamp <i class="fas fa-heart text-danger fa-1x"></i></p>

    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
