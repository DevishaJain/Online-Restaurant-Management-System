<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            background-image: url(booking.jpeg);
        }

        .b {
            background-color: rgba(0, 0, 0, 0.7);
            height: 615px;
            padding-top: 10px;
        }

    </style>
</head>


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
    <div class="b">
        <h3 style="color:aqua;padding-top:80px;text-align:center">ENTER DETAILS FOR BOOKING!!!</h3>
        <div class=" d-flex justify-content-center">
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
                        ["innertable"].value;
                    var q =
                        document.forms["regform"]
                        ["outertable"].value;
                    if (z == "" || q == "") {
                        alert("Password must be filled out");
                        return false;
                    }
                    var p =
                        document.forms["regform"]
                        ["number"].value;
                    if (p == "") {
                        alert("Number must be filled out");
                        return false;
                    }

                }

            </script>

            <form action="project.php" name="regform" method="post" onsubmit="return dolly()">
                <div class="form-row">
                    <div class="form-group col-md-6 text-light my-5">
                        <label for="exampleInputEmail1" style="color: aqua"><b>NAME:</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" style="background-color: rgba(0,0,0,0);color:white"></div>
                    <div class="form-group col-md-6 text-light my-5"><label for="exampleInputEmail1" style="color: aqua"><b>EMAIL:</b></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" style="background-color: rgba(0,0,0,0);color:white"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1" style="color:aqua"><b>NUMBER:</b></label>
                        <input type="number" class="form-control" id="exampleInputPassword1" name="number" style="background-color: rgba(0,0,0,0);color:white">
                    </div>

                    <div class="form-group col-md-6 ">
                        <label for="exampleInputPassword1" style="color:aqua"><b>DATE:</b></label>
                        <input type="date" class="form-control" id="exampleInputDate1" name="date" style="background-color: rgba(0,0,0,0);color:white">
                    </div>


                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1" style="color:aqua"><b>TABLE:</b></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tables" style="background-color: rgba(0,0,0,0);color:aqua">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
<option>7</option>
 <option>8</option>
    </select>
                </div>


                <button type="submit" class="btn btn-md text-dark mt-2 col-md-4" style="background-color:aqua" name="book">CONFIRM</button>
                
 
            </form>
        </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
