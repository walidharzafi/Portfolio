<?php include("connection/db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Walid Harzafi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/Skills.css">
    <link href="css/resume.css" rel="stylesheet">
    <style>
        #card:hover {
            box-shadow: 0 0 12px 0 rgba(0, 0, 0, .25);
        }
    </style>
</head>

<body id="page-top">
<?php
if(isset($_GET['mailsend'])):
if($_GET['mailsend']=="ok"):
?>
<div class="bg bg-success text-white p-2">Message Envoyée</div>
<?php
endif;
endif;
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top px-0" id="sideNav">
        <img id="LOGO1" src="img/harzafi.png" alt="avatar" srcset="" style="width: 120px;
    height: 50px;">

        <a class="navbar-brand js-scroll-trigger" >
            <!-- <span class="d-block d-lg-none"><img src="img/Groupe 2.png" style="width:50%; padding-bottom: 10px;"
                    alt="Walid Harzafi"></span> -->
            <span class="d-none d-lg-block">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/walidwalid.jpg" alt="">
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li id="ho" class="nav-item active" onclick="home()">
                    <a class="nav-link" href="#home">Accueil</a>
                </li>

                <li id="sk" class="nav-item" onclick="skills()">
                    <a class="nav-link" href="#skills">Compétences</a>
                </li>
                <li id="se" class="nav-item" onclick="services()">
                    <a class="nav-link " href="#services">Services</a>
                </li>
                <li id="pro" class="nav-item" onclick="project()">
                    <a class="nav-link " href="#project">Projets</a>
                </li>
                <li id="con" class="nav-item" onclick="contact()">
                    <a class="nav-link " href="#contact">Contactez moi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center " id="about">
            <div class="w-100 " id="hassan">
                <h1 class="mb-0 anih1">WALID
                    <span class="text-primary">HARZAFI</span>
                </h1>
                <div class="subheading mb-5 anih2"> (212) 613041159 ·
                    <a href="mailto:harzafi55@gmail.com ">harzafi55@gmail.com</a>
                </div>
                <p class="lead mb-5">Je suis développeur et concepteur expérimenté UI / UX et solutionneur de problèmes.</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/walidharzafi/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/walidharzafi">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com/WHarzafi">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.facebook.com/harzafi/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </section>

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center d-none" id="skills">
            <div class="w-100">
                <h2 class="mb-5">Compétences</h2>
                <div class="SkillBar">
                    <div id="Skill-HTML">
                        <span class="Skill-Area ">HTML</span>
                        <span class="PercentText ">90%</span>
                    </div>
                </div>

                <div class="SkillBar">
                    <div id="Skill-CSS">
                        <span class="Skill-Area ">CSS/CSS3</span>
                        <span class="PercentText ">80%</span>
                    </div>
                </div>

                <div class="SkillBar">
                    <div id="Skill-jQuery">
                        <span class="Skill-Area ">jQuery</span>
                        <span class="PercentText ">40%</span>
                    </div>
                </div>

                <div class="SkillBar">
                    <div id="Skill-JS">
                        <span class="Skill-Area ">Javascript</span>
                        <span class="PercentText ">60%</span>
                    </div>
                </div>
                <div class="SkillBar">
                    <div id="Skill-SQL">
                        <span class="Skill-Area ">SQL </span>
                        <span class="PercentText ">80%</span>
                    </div>
                </div>
                <div class="SkillBar">
                    <div id="Skill-PHP">
                        <span class="Skill-Area ">PHP </span>
                        <span class="PercentText ">65%</span>
                    </div>
                </div>
                <div class="SkillBar">
                    <div id="Skill-HTML">
                        <span class="Skill-Area ">ADOBE XD </span>
                        <span class="PercentText ">90%</span>
                    </div>
                </div>
                <div class="subheading mb-3">Flux de travail</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <i class="fa-li fa fa-check"></i> Conception design des sites web et mobile </li>
                    <li>
                        <i class="fa-li fa fa-check"></i>Développement agile &amp; Scrum</li>
                </ul>
            </div>
    </div>
    </div>
    </section>



    <section class="resume-section p-3 p-lg-5 d-flex align-items-center d-none" id="services">
        <div class="w-100">
            <h2 class="m-auto">Services</h2>
            <div class=" d-flex flex-row flex-wrap justify-content-center">
                <div class="mycrd mt-5 mx-3">
                    <img class="mt-3 mb-5" src="img/designer.svg" alt="designer">
                    <h3 style="text-align: center; color: #007AA6;">Designer</h3>
                    <p class="px-4 textcrd pt-3">J'apprécie une structure de contenu simple, des modèles de conception propres et des interactions réfléchies.
                    </p>
                    <h5 style="text-align: center; color: #007AA6;">Les choses que j'aime concevoir:</h4>
                        <p class="px-4 textcrd pt-3">UX, UI, Web, Mobile, Apps, Logos
                        </p>
                </div>
                <div class="mycrd mt-5 mx-3">
                    <img class="mt-3 mb-5" src="img/designer.svg" alt="designer">
                    <h3 style="text-align: center; color: #007AA6;">Développeur FULL Stack</h3>
                    <p class="px-4 textcrd pt-3">J'aime coder des choses à partir de zéro et j'aime donner vie aux idées dans le navigateur.
                    </p>
                    <h5 style="text-align: center; color: #007AA6;">Languages:</h4>
                        <p class="px-4 textcrd pt-3">HTML,CSS,JS,SASS,SQL,PHP
                        </p>
                </div>
                <div class="mycrd mt-5 mx-3">
                    <img class="mt-3 mb-5" src="img/designer.svg" alt="designer">
                    <h3 style="text-align: center; color: #007AA6;">Un résolveur de problèmes</h3>
                    <p class="px-4 textcrd pt-3">J'aime trouver les bogues de votre site Web et les résoudre, en peu de temps, et rendre votre site Web plus rapide.
                    </p>
                    <h5 style="text-align: center; color: #007AA6;">Languages:</h4>
                        <p class="px-4 textcrd pt-3">HTML,CSS,JS,SASS,SQL,PHP
                        </p>
                </div>
            </div>



    </section>

    <section id="project" style="display: none;" class="portfolio section-bg mt-4 mx-auto">
        <div class="container">
        <h2 class="m-auto">Projets</h2>
            <div class="row col-lg-12">
                <div class="row col-lg-12">
                    <?php
                    $query = "SELECT * FROM project";
                    $runquery = mysqli_query($connect, $query);
                    while ($data5 = mysqli_fetch_array($runquery)) {
                    ?>
                        <div class="col-lg-4 mb-4">
                            <a href="#" data-toggle="modal" data-target="#Modal<?= $data5['id'] ?>" data-whatever="@mdo">
                                <div class="card h-100" id="card">
                                    <img src="img/<?= $data5['image'] ?>" class="card-img-top" alt="img project" style="height: 242px;">
                                    <div class="card-body">
                                        <div class="card-footer">
                                            <a class="card-text lead p-2"><?= $data5['nomprojet'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                $query = "SELECT * FROM project";
                $runquery = mysqli_query($connect, $query);
                while ($data5 = mysqli_fetch_array($runquery)) {
                ?>
                    <div class="modal fade" id="Modal<?= $data5['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> -->
                                    <h5 class="modal-title"><?= $data5['nomprojet'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <img src="img/<?= $data5['image'] ?>" class="card-img-top" alt="...">
                                        <div>
                                            <!-- <h5 class="modal-title"><?= $data5['nomprojet'] ?></h5>
                                            <p class="modal-text">Some quick example text to build on the card title and
                                                make
                                                up the bulk of the card's content.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= $data5['lien'] ?>" class="btn btn-success "><?= $data5['source'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    </section>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center d-none" id="contact">
        <div class="w-100">
            <form action="includes/mail.php" method="post">
                <div class="card border-primary rounded-0" style="height: 70vh; border-color: #007AA6 !important;">
                    <div class="card-header p-0">
                        <div class=" text-white text-center py-2" style="background-color: #007AA6;">
                            <h3 style="color: white;"> Contactez moi</h3>

                        </div>
                    </div>
                    <div class="card-body p-3">

                        <!--Body-->
                        <div class="form-group">
                        <form action="includes/mail.php" method="POST" class=" mx-auto w-50">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user " style="color: #007AA6;"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="nombre" name="name" placeholder="Nom" required>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" style="color: #007AA6;"></i>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user " style="color: #007AA6;"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" id="nombre" name="subject" placeholder="Sujet" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment" style="color: #007AA6;"></i>
                                        </div>
                                    </div>
                                    <textarea name="message" rows="8" class="form-control" placeholder="Tapez votre message...." required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input name="submit" type="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2" style="width: 200px;margin: auto; background-color: #007AA6;">
                            </div>
                        </div>

                    </div>
            </form>
    </section>

    <hr class="m-0">



    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.js"></script>

</body>

</html>