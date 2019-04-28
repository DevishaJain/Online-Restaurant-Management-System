<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>REGISTER</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">


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
                
                <li class="nav-item active">

                    <a class="nav-link text-light bg-danger" href="mainhome.php">HOME </a>
                </li>
                
            </ul>
            <h1 class="text-light">DAILY DELIGHT'S</h1>
        </div>
    </nav>
    <div>



        <div style="background-image: url(lo.jpeg);height:800px">
            <h5 style="margin-bottom: 60px;margin-left:100px;margin-right: 700px;padding-top: 100px"><b>REGISTER FOR AN ACCOUNT</b></h5>
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

            <form action="proj4.php" method="post" name="regform" onsubmit="return dolly()">
                <div class="form-group col-md-4" style="margin-left: 100px;margin-right: 700px">
                    <label for="exampleInputEmail1"><b>NAME:</b></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name"></div>
                <div class="form-group col-md-4" style="margin-left: 100px;margin-right: 700px"><label for="exampleInputEmail1"><b>EMAIL:</b></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"></div>


                <div class="form-group text-dark col-md-4" style="margin-left: 100px;margin-right: 700px">
                    <label for="exampleInputPassword1"><b>PASSWORD:</b></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
                </div>
                <div class="form-group text-dark col-md-4" style="margin-left: 100px;margin-right: 700px">
                    <label for="exampleInputPassword1"><b>NUMBER:</b></label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="number" name="number">
                </div>
                
                

                <button type="submit" class="btn btn-md text-dark btn-outline-dark" style="margin-left: 100px" name="submit">REGISTER NOW</button>
            </form>


        </div>
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
