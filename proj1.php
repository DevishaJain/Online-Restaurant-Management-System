<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>CONTACT</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            margin-top: 0px;
        }

    </style>
</head>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: rgba(0,0,0,1);height:60px">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <i class="fas fa-home text-light"></i>
                <li class="nav-item active">

                    <a class="nav-link text-light" href="project.php">HOME </a>
                </li>
                
                <i class="fas fa-image text-light"></i>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="proj3.php">GALLERY</a>
                </li>

                <i class="fas fa-pen text-light"></i>
                <li class="nav-item active">
                    <a class="nav-link text-light" href="proj2.php">ABOUT</a>
                </li>
                <i class="fas fa-map-marker-alt text-light"></i>

                <li class="nav-item active bg-danger">
                    <a class="nav-link text-light" href="proj1.php">CONTACT</a>
                </li>
            </ul>
            <h1 class="text-light">DAILY DELIGHT'S</h1>
        </div>
    </nav>
    
    <div style="background-image:linear-gradient(gainsboro,white);height: 618px">
<div class="row">
       <div class="col col-md-6">
        <h1 class="display1" style=" padding-top: 100px;margin-left:100px">SEND US AN EMAIL</h1>
         <script>
                function dolly() {
                    var x =
                        document.forms["regform"]
                        ["name"].value;
                    if (x == "") {
                        alert("Name must be filled out");
                        return false;
                    }
                    var y =
                        document.forms["regform"]
                        ["email"].value;
                    if (y == "") {
                        alert("Email must be filled out");
                        return false;
                    }
                    var z =
                        document.forms["regform"]
                        ["password"].value;
                    var q =
                        document.forms["regform"]
                        ["number"].value;
                    if (z == "" || q == "") {
                        alert("Password must be filled out");
                        return false;
                    }
                    
                }

            </script>
        <form action="project.php" method="post" name="regform" onsubmit="return dolly()">
            <div class="form-group" style="margin-left: 100px;margin-top: 20px">
                <label for="exampleFormControlInput1"><b>Name</b></label>
                <input type="name" class="form-control" id="exampleFormControlInput1" name="name">
            </div>
            <div class="form-group" style="margin-left: 100px">
                <label for="exampleFormControlInput1"><b>Email</b></label>
                <input class="form-control" type="email" id="exampleFormControlInput1" name="email">

            </div>

            <div class="form-group" style="margin-left: 100px">
                <label for="exampleFormControlTextarea1"><b style="color:black" >Message</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
            </div>
            <button type="submit" class="btn bg-danger text-light" style="margin-left: 100px" name="question">Submit Question</button>

        </form>
        </div>
        <div class="col col-md-6">
        <div class="card border-0" style="width: 18rem;float: right;margin-top:65px">
            <img class="card-img-top" src="conn.jpeg" alt="Card image cap">
            <div class="card-body" >
                <h5 class="card-title" style="color: brown">ADDRESS</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" >CScheme,Jaipur</li>
                <li class="list-group-item">Sahakar Marg,Jaipur</li>
                <li class="list-group-item">Mansarovar,Jaipur</li>
            </ul>
            <div class="card-body">
                <i class="fab fa-facebook-f fa-2x px-2" style="color: blue"></i>
                <i class="fab fa-twitter fa-2x" style="color: aqua"></i>
                <i class="fab fa-instagram fa-2x pl-2" style="color: brown"></i>
                <i class="fab fa-whatsapp fa-2x pl-2" style="color: darkgreen"></i>

            </div>
        </div>
    </div>
</div>
  </div> 
    <div style="background-color:gainsboro">

        <h2 style="text-align: center;color:black;padding-top:20px">Stay Abreast-Connect!</h2>
        <p style="text-align: center;color:black">Get updates about releases, as backgrounds and features are actively in the works.</p>
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
