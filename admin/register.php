<?php 
include("admin/db.php");

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $Npassword = md5($_POST['cpass']);

    $query = "insert into user (`username`,`email`,`phone`,`password`,`Cpassword`)values('$username','$email','$phone','$password','$Npassword')";
    $q1 = mysqli_query($con,$query);

    if($q1){
        $msg = "Registration successfully";
    }
    else{
        $err = "something wrong!!";
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
                <?php if(isset($msg)){ ?>
                  <div class="alert alert-success">
                    <?php echo $msg; ?>
                  </div>
              <?php } ?>
                <form method="post">
                    <label for="email" class="sr-only">username</label>
                    <input name="username" type="text" placeholder="username" />

                    <label for="password" class="sr-only">email</label>
                    <input name="email" type="text" placeholder="Email" />

                    <label for="password" class="sr-only">Phone</label>
                    <input name="phone" type="text" placeholder="Phone" />

                    <label for="password" class="sr-only">Password</label>
                    <input name="password" type="password" placeholder="Password" />

                    <label for="password" class="sr-only">Confirm Password</label>
                    <input name="cpass" type="password" placeholder="New password" />

                    <button type="submit" name="submit">Register</button>
                </form>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Obtenha o aplicativo.</p>
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