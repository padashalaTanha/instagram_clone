<?php
include("admin/db.php");
session_start();

if(!empty($_SESSION['admin'])){
    
    header("location:dashbord.php");
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $qu = "select * from user where `email`='$email' AND `password`='$password'";
    $qu1 = mysqli_query($con,$qu);
    $qu2 = mysqli_num_rows($qu1);

    if($qu2){
        $admin = mysqli_fetch_array($qu1);
        $_SESSION['admin'] = $admin;
        header("location:dashbord.php");
    }
    else{
        $msg = "Invelid Email and Password";
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
                    <label for="email" class="sr-only">email</label>
                    <input name="email" placeholder="email" />

                    <label for="password" class="sr-only">Password</label>
                    <input name="password" type="password" placeholder="password" />

                    <button type="submit" name="login">Login</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <a href="forget_password.php">Forget Password?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don't have an account?</p>
                <a href="register.php">Register</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
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