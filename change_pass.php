<?php
include("admin/db.php");
session_start();

if(isset($_POST['change']))
{
    $current = $_SESSION['admin']['password'];
    $cpass = md5($_POST['cpass']);
    $npass = md5($_POST['npass']);
    $copass = md5($_POST['copass']);

    $id = $_SESSION['admin']['id'];
    if($current === $cpass){     

        if($cpass !== $npass){

            if($npass === $copass){
                
                $passupdate = "update user set `password`='$npass' where `id`='$id'";
                $qu1 = mysqli_query($con,$passupdate);
            ?>

               <script>
                window.location = "logout.php";
               </script>

            <?php
            }
            else{
                $msg = "new and confirm password not matched!!";
            }
        }
        else{
            $msg = "current and new password are matched!!";
        }
    }
    else{
        $msg = "current password not matched!!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Instagram clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <?php if(isset($msg)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $msg; ?>
                    </div>
                <?php }?>
                <form method="post">
                    <label for="email" class="sr-only">Current Password</label>
                    <input name="cpass" type="password" placeholder="Current Password" />

                    <label for="password" class="sr-only">New Password</label>
                    <input name="npass" type="password" placeholder="New Password" />

                    <label for="password" class="sr-only">Confirm Password</label>
                    <input name="copass" type="password" placeholder="Confirm Password" />

                    <button type="submit" name="change">Change Password</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">SOBRE</a></li>
            <li><a href="#">AJUDA</a></li>
            <li><a href="#">IMPRENSA</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">CARREIRAS</a></li>
            <li><a href="#">PRIVACIDADE</a></li>
            <li><a href="#">TERMOS</a></li>
            <li><a href="#">LOCALIZAÇÃO</a></li>
            <li><a href="#">CONTAS MAIS RELEVANTES</a></li>
            <li><a href="#">HASHTAGS</a></li>
            <li><a href="#">IDIOMA</a></li>
        </ul>
        <p class="copyright">© 2020 Instagram do Facebook</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>