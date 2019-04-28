
<?php 
session_start();   
include ('db1.php');
if(isset($_POST['submit']))
{
 $a=$_POST['name'];
 $b=$_POST['email'];
 $c=($_POST['password']);
 $d=$_POST['number'];
 $e=$_POST['gender'];
 $f=$_POST['address'];
    $g=$_POST['salary'];
 



 $insert=mysql_query("insert into chef(name, email, password, number, gender, address,salary) values('$a','$b','$c','$d','$e','$f','$g')");
if(!$insert)
{echo "fail";}


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

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            background-image: url(login.jpeg);

        }

        .db {
            width: 270px;
            height: 650px;
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 20px;
        }

        .acc {
            font-family: sans-serif;
            font-size: 20px;
            margin-top: 10px;
            color: white;
        }
        .bt{
            background-color: rgba(0,0,0,0);
            margin-top: 10px;
            color:white;
        }
        .dbt{
            background-color:black;
            
        }
        .m{
        width: 720px;
            height: 400px;
            background-image: linear-gradient(gainsboro,white);
            margin-top: 100px;
        }
          table,
        td {
           
            padding: 10px 2px;
            background-color: rgba(0,0,0,0.3);
            color: white;
        }
   


    </style>
</head>

    
<body>
<div>
<nav class="navbar navbar-expand-md  fixed-top" style="font-family: sans-serif;background-color:rgba(0,0,0,0);height:60px">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">

                    <h5 class="nav-link text-light"><b> </b></h5>
                </li>
                <li class="nav-item active ml-3">
                    <a class="nav-link text-light" href="#"><b></b></a>
                </li>

                <li class="nav-item active ml-3">
                    <a class="nav-link text-light" href="#"><b></b></a>
                </li>
            </ul>
            <h5 class="text-light"><b>WELCOME DEVISHA</b></h5>


        </div>
    </nav>
    </div>
    <div class="row">
    <div class="col col-md-3">
    <div class="db">
        <div class="d-flex justify-content-center">

            <img src="admin.jpeg" style="width:250px;height:230px;border-radius:60px"></div>
        <div class="d-flex justify-content-center">
            <div>

                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    MANAGER
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="manager.php">LIST</a>
                        <a class="dropdown-item text-light" href="Addmanager.php">ADD</a>
                        <a class="dropdown-item text-light" href="managerd.php">DELETE</a>
                    </div>
                </div>
                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    RECEPTIONIST
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="lrecep.php">LIST</a>
                        <a class="dropdown-item text-light" href="addrecep.php">ADD</a>
                        <a class="dropdown-item text-light" href="drecep.php">DELETE</a>
                    </div>
                </div>
                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    WAITERS
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="waiters.php">LIST</a>
                        <a class="dropdown-item text-light" href="addwaiter.php">ADD</a>
                        <a class="dropdown-item text-light" href="deletewaiters.php">DELETE</a>
                    </div>
                </div>
                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   CHEF
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="chef.php">LIST</a>
                        <a class="dropdown-item text-light" href="addchef.php">ADD</a>
                        <a class="dropdown-item text-light" href="deletechef.php">DELETE</a>
                    </div>
                </div>
                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ONLINE BOOKINGS
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="bookt.php">BOOKINGS</a>
                       
                    </div>
                </div>
                <div class="dropright">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    USERS
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="users.php">LIST</a>
                        
                        
                        <a class="dropdown-item text-light" href="deleteusers.php">DELETE</a>
                          <a class="dropdown-item text-light" href="contactadmin.php">MESSAGE</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn bt dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
ACCOUNT SETTINGS
  </button>
                    <div class="dropdown-menu dbt" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-light" href="showdetails.php">ACCOUNT DETAILS</a>
                        <a class="dropdown-item text-light" href="editdetails.php">EDIT</a>
                        <a class="dropdown-item text-light" href="logoutadmin.php">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="col col-md-8">
    <div class="">
        <table style="width:100%;margin-top:100px">
        <tr>
            
            <td><b>NAME</b></td>
            <td><b>EMAIL</b></td>
            <td><b>NUMBER</b></td>
            <td><b>GENDER</b></td>
            <td><b>ADDRESS</b></td>
            <td><b>SALARY</b></td>
            
        </tr>
        <tbody>
            <?php
           
           $q="select * from chef";
           $qry=mysql_query($q);
           while($r=mysql_fetch_array($qry))
           {
               
          ?>
                <tr>
                    
                    <td>
                        <?php echo $r['name']; ?>
                    </td>
                    <td>
                        <?php echo $r['email']; ?>
                    </td>
                    <td>
                        <?php echo $r['number']; ?>
                    </td>
                    <td>
                        <?php echo $r['gender']; ?>
                    </td>
                    <td>
                        <?php echo $r['address']; ?>
                    </td>
                     <td>
                        <?php echo $r['salary']; ?>
                    </td>

                    

                </tr>
                <?php
           }
            ?>
        </tbody>
    </table>
    </div>
    
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