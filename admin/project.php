<?php
session_start();
if(isset($_SESSION['login'])):
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        walid
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="#3498db">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
            <img id="LOGO1" src="../img/harzafi.png" alt="avatar" srcset="">
            <!-- <p class="simple-text logo-normal ">
                    DASHBORD
                </p> -->
                <a  class="c-margin">Admin Panel</a>

            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <!-- <li>
                        <a href="project.php">
                            <p>project</p>
                        </a>
                    </li> -->
                    <form action="" method="POST">
                        <input type="submit" name="logout" value="Deconnexion" class="btn btn-warning  pr-5 pl-5 ml-5 ">
                    </form>
                    <?php
           if(isset($_POST['logout'])){
            // unset($_SESSION['pass']);
            session_destroy();
            header('location:../admin.php');
            }

?>
                    <!-- </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header">
                <div class="header text-center">
                    <h2 class="title">PROJET</h2>
                </div>
            </div>
            <!-------------------------------------------ajout projet--------------------------------------------------------- -->
            <!-------------------------------------------ajout projet--------------------------------------------------------- -->
            <!-------------------------------------------ajout projet--------------------------------------------------------- -->
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajouter projet</h4>
                            </div>
                            <div class="card-body">
                                <form class="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nom de projet</label>
                                        <input type="text" name="nomprojet" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Lien de projet</label>
                                        <input type="text" name="lienprojet" class="form-control"
                                            id="exampleInputPassword1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Image de projet</label>
                                        <input type="file" name="file" class="form-control" id="exampleInputPassword1"
                                            placeholder="">
                                    </div>
                                    <input type="submit" name="submiting" class="btn btn-primary" value="Ajouter le projet">
                                </form>
                                
                                <?php
                                if(isset($_POST['submiting'])){
                                    $file = $_FILES["file"];
                                    $nomimg = $file['name'];
                                    $nompro =$_POST['nomprojet'];
                                    $lienpro = $_POST['lienprojet'];
                                    move_uploaded_file($file['tmp_name'],"../img/". $file['name']);
                                    $addt = new PDO("mysql:host=localhost;dbname=portfolio1","root","");
                                    $rept = "INSERT INTO `project` (`id`, `image`, `nomprojet`, `lien`, `source`) VALUES (NULL, '$nomimg', '$nompro', '$lienpro','github')";
                                    $addt->query($rept);
                                    echo "<p style= color:green;> le projet $nompro a ajouter </p>";
                                }
                                ?>  
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------delete projet--------------------------------------------------------- -->
                    <!-------------------------------------------delete projet--------------------------------------------------------- -->
                    <!-------------------------------------------delete projet--------------------------------------------------------- -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Supprimer projet</h4>
                                <form action="" method="POST">
                                   <h6 style="color: red;"> Choisi le projet que vous voulez supprimer ! </h6>
                                    <select class='form-control form-control-lg p-2 rounded-left' name='opt' id="">
                                        <option value=''>Selection projet</option>"
                                        <?php
                                            $add = new PDO("mysql:host=localhost;dbname=portfolio1","root","");
                                            $rep = $add->query('SELECT * FROM project ORDER BY id' );
                                            while($x = $rep->fetch()){
                                            echo"<option  value='$x[0]' >$x[2]</option>";
                                            }
                                            $c=$_POST['opt'];
                                        ?>
                                    </select>
                                    <input type="submit" name='supremer' class="btn btn-primary ml-5 pl-5 pr-5"
                                        value="Supprimer le projet">
                                </form>
                                <?php   
                                  if(isset($_POST['supremer'])){
                                   $del ="DELETE FROM project WHERE id = $c";
                                  $add->query($del);
                                  echo "<p style= color:red;>le projet a supprimer </p>";
                                }
                                ?>

                                <!--  -->
                                <!--  -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!---------------------------------------------------------------------------->
            <!---------------------------------- style css ------------------------------->
            <!---------------------------------------------------------------------------->

            <style>
            .card-title{
                color:black;
            }
            </style>
            <!--   Core JS Files   -->
            <script src="./js/core/jquery.min.js"></script>
            <script src="./js/core/popper.min.js"></script>
            <script src="./js/core/bootstrap.min.js"></script>
            <script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
            <!-- Chart JS -->
            <script src="./js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="./js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="./js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
            <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
            <script src="./demo/demo.js"></script>
</body>

</html>
<?php
else:
    header('location:../admin.php');
endif;
?>