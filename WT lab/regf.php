<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, iniial-scale=1.0">
        <title>Registration Form</title>
        <link rel="icon" type="image/png" href="https://www.flaticon.com/premium-icon/icons/svg/2544/2544098.svg" >
        <link rel="stylesheet" type="text/css" href="det_form.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="stylesheet" type="text/css" href="err.css">
    </head>
    <body>
        <?php include 'regfDt.php'; ?>
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
                    <p>Create Account</p>
                    <form method="POST" name="RegForm" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> ">
                        <label for="fname" ><b>First name:  </b><span class="invalid" >* <?php echo $firstnameE; ?> </span></label><br>
                        <input type="text" id="fname" name="firstname" required value=" <?php echo $firstname; ?>"/>
                        <br><br>
                        <label for="lname" ><b>Last name:  </b><span class="invalid" >* <?php echo $lastnameE; ?> </span></label><br>
                        <input type="text" id="lname" name="lastname" required value=" <?php echo $lastname; ?>"/>
                        <br><br>
                        <label for="uname" ><b>User name:  </b><span class="invalid" >* <?php echo $usernameE; ?> </span></label><br>
                        <input type="text" id="uname" name="username" required value=" <?php echo $username; ?>"/>
                        <br><br>
                        <label for="mno"><b>Mobile Number</b><span class="invalid" >* <?php echo $mobileNoE; ?> </span></label><br>
                            <select id="code" name="cntryCode" required>
                                <option value=""></option>
                                <option value="+1">+1</option>
                                <option value="+44">+44</option>
                                <option value="+91">+91</option>
                                <option value="+94">+94</option>
                                <option value="+95">+95</option>
                                <option value="+96">+96</option>
                            </select>
                        <input style="width: 82%;" type="tel" id="mno" name="mobileNo" required placeholder="Mobile number" value=" <?php echo $mobileNo; ?>" /><br><br>
                        <label for="email"><b>Email: </b><span class="invalid" >* <?php echo $emailE; ?> </span></label><br>
                        <input type="email" id="email" name="email" value=" <?php echo $email; ?>"><br><br>
                        <label for="pass"><b>Password</b><span class="invalid" >* <?php echo $passwordE; ?> </span></label><br>
                        <input type="Password" id="pass" name="password" required placeholder="At least 6 characters"/><br>
                        <br> 
                        <label for="confpass"><b>Confirm Password: </b><span class="invalid" >* <?php echo $confpwdE; ?> </span></label><br>
                        <input type="Password" id="confpass" name="confpwd" required placeholder="Confirm your password"/><br>
                        <br> 
                        <button type="submit" name="submit">Continue</button>
                    </form>
                    <p>Already have an account? <a href="logf.php" style="color: blue;"> Sign in</a></p>
                </div>
            </div>
        </section>
    </body>
</html>