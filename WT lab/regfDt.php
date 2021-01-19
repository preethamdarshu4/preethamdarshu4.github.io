<?php
    //Form4@

    $firstname = $lastname = $username = $cntryCode = $mobileNo = $email = $password = $confpwd = "";
    $firstnameE = $lastnameE = $usernameE = $cntryCodeE = $mobileNoE = $emailE = $passwordE = $confpwdE = ""; 
    $p_firstname = $p_lastname = $p_username = $p_cntryCode = $p_mobileNo = $p_email = $p_password = "";  

    //Validating  Function
    function valInp($data) {
        if(!empty($data)) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        else {
            return false;
        }
    }

    //Validating form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = null;

        $firstname = valInp($_POST["firstname"]);
        if (!preg_match("/^[A-Za-z ]*$/i", $firstname)) {
            $firstnameE  = "Only letters and whitespaces are allowed";
            $valid = 0;
        }

        $lastname = valInp($_POST["lastname"]);
        if (!preg_match("/^[A-Za-z ]*$/i", $lastname)) {
            $lastnameE  = "Only letters and whitespaces are allowed";
            $valid = 0;
        }

        $username = valInp($_POST["username"]);
        if (!preg_match("/^[0-9a-z_]*$/i", $username)) {
            $usernameE  = "Only digits, Lower-case letters and underscore(_) are allowed.";
            $valid = 0;
        }

        $cntryCode = valInp($_POST["cntryCode"]);
        $valid = 1;

        $mobileNo = valInp($_POST["mobileNo"]);
        if (!(strlen($mobileNo) == 10)) {
            $mobileNoE = "Enter a 10 digit number";
            $valid = 0;
        }
        else {
            if (!preg_match("/^(?=\d{10})[0-9]*$/", $mobileNo)) {
                $mobileNoE = "Only numbers (0-9) are allowed";
                $valid = 0;
            }
        }

        $email = valInp($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailE  = "Invalid email format";
            $valid = 0;
        }

        $password = valInp($_POST["password"]);
        if (!preg_match("/^\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S)\S*$/", $password)) {
            $passwordE  = "<ul>Password Should contain atleast One:
                                <li> Upper-case, lower-case letter, One digit(number)</li>
                                <li>One special character(@, _) and no white spaces</li>
                            </ul>";
            $valid = 0;
        }

        $confpwd = valInp($_POST["confpwd"]);
        if (!($confpwd == $password)) {
            $confpwdE = "Password did'nt match :|";
            $valid = 0;
        }

        if ($valid == 1) {
            //DB connection
            include 'confg.php';
            $table = "regData";

            $stmt = $conn->prepare("SELECT id FROM $table WHERE username = :username;");
            if($stmt) {
                $stmt->bindParam(':username', $p_username);
                $p_username = $username;
                
                if($stmt->execute()) {
                    if($stmt->rowCount() == 1) {
                        $usernameE = "This username is already taken.";
                        $valid = 0;
                    }
                }
                else {
                    echo "Oops! Something went wrong.";
                    $valid = 0;
                }
                unset($stmt);
            }

            if($valid == 1) {
                //Uploading data to DB
                $mobileNo = $cntryCode . $mobileNo;
                date_default_timezone_set("ASIA/KOLKATA");
                $stmt = $conn-> prepare("INSERT INTO $table (firstname, lastname, username, mobile_num, email, password, regDate) 
                VALUES (:firstname, :lastname, :username, :mobileNo, :email, :password, :date);");
                if($stmt) {
                    $stmt->bindParam(':firstname', $p_firstname);
                    $stmt->bindParam(':lastname', $p_lastname);
                    $stmt->bindParam(':username', $p_username);
                    $stmt->bindParam(':mobileNo', $p_mobileNo);
                    $stmt->bindParam(':email', $p_email);
                    $stmt->bindParam(':password', $p_password);
                    $stmt->bindParam(':date', $date);
                    $p_firstname = $firstname;
                    $p_lastname =$lastname;
                    $p_username = $username;
                    $p_mobileNo = $mobileNo;
                    $p_email = $email;
                    $stmt->bindParam(':password', $p_password);
                    $p_password = password_hash($password, PASSWORD_DEFAULT);
                    $date = date('y/m/d H:i:s');
                    if($stmt->execute()) {
                        header('Location: logf.php');
                    }
                    else {
                        echo "oops! Something went wrong.";
                    }
                    unset($stmt);
                }
            }
            $conn = null;
        }
    }
?>