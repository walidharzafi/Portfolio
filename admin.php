<?php
session_start();
include("connection/db.php");


$errors = [];
$message = "";
if (isset($_POST['submit'])) {
    $password =  $_POST['password'];

    $query = "SELECT * FROM admin WHERE  password='$password'";
    $run = mysqli_query($connect, $query);
    $result = mysqli_fetch_array($run);
    // die($result);

    if (empty($password)) :
        $errors = '*veuillez entrer le mot de passe';
    endif;

    if ($result) {
        $_SESSION['login']=$result['password'];
        header('location:admin/project.php');
    } else {
    }
    $message = "mot de passe incorrect";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>

    <style>
    .errors{
        color: red;
        text-align: center;
        font-size: 20px;
    }
    </style>
</head>

<body>
    <div class="container">


        <!-- Start Heading ************-->
        <div class="heading">
            <span class="span1" style="color:#fff;">
                - Harzafi Walid -
            </span>

            <br />

            <span class="span2" style="color:#fff;">
                Admin panel
            </span>
            <hr />
        </div>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <p class="errors">
                <?php
                if (!empty($errors)) :
                    echo $errors;
                else :
                    echo $message;
                endif;
                ?>
                <hr style="width: 23rem;">
            </p>

            <input class="pass" type="password" lang="en" name="password" maxlength="16" placeholder="Password" />
            <div class="remdiv">
                <span class="forgot">
                </span>
            </div>
            <input style="color:#fff;font-size:16px ;width: 200px;" class="submit" type="submit" name="submit" value="Connexion" />
        </form>

    </div>
</body>

</html>