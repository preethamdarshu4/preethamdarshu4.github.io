<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>Sign In</title>
        <link rel="icon" type="image/png" href="https://www.flaticon.com/svg/static/icons/svg/1060/1060387.svg">
        <link rel="stylesheet" type="text/css" href="det_form.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="stylesheet" type="text/css" href="err.css">
    </head>
    <body>
        <?php include 'logf_vldt.php'; ?>
        <section class="main-cont">
            <header>
                <ul class="out-ul">
                    <li class="fli">
                        <span>
                            <img src="https://www.flaticon.com/svg/static/icons/svg/3285/3285719.svg" style="height: 26px; width: 32px;">  
                            Online Book Store
                        </span>
                    </li>
                </ul>
            </header>
            <div class="cont">
                <div class="wrapper">
                    <p>Login</p>
                    <form method="POST" name="LoginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                        <label for="username"><b>Username: </b><span class="invalid">*<?php echo $usernameE; ?></span></label><br>
                        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required/>
                        <br><br>
                        <label for="password"><b>Password: </b><span class="invalid">*<?php echo $passwordE; ?></span></label><br>
                        <input type="password" id="password" name="acc_password" required/>
                        <br><br>
                        <button type="submit" name="submit" >continue</button>
                    </form>
                    <h5>New to Online Book Store?</h5>
                    <a href="regf.php" style="color: blue;">Create your account</a>
                </div>
            </div>
        </section>
    </body>
</html>