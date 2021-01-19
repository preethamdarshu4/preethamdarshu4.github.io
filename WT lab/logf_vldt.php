<?php

    session_start();


    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        header("Location: usr_prof.php");
        exit();
    }
    include "confg.php";
    $username = $password = $usernameE = $passwordE = "";

    function valInp($data) {
        
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty(valInp($_POST["username"]))) {
            $usernameE = "Please enter username.";
        }
        else {
            $username = valInp($_POST["username"]);
        }
        if(empty(valInp($_POST["acc_password"]))) {
            $passwordE = "Enter a passowrd.";
        }
        else {
            $password = valInp($_POST["acc_password"]);
        }
        if(empty($usernameE) && empty($passwordE)) {
            $sql = "SELECT username, id, password FROM $table WHERE username = :username";
            
            $stmt = $conn->prepare($sql);
            if($stmt) {
                $stmt->bindParam(':username', $P_username);
                $P_username = $username;
                if($stmt->execute()) {
                    if( $stmt->rowCount() == 1) {
                        $row = $stmt->fetch();
                        if($row) {
                            $id = $row["id"];
                            $username = $row["username"];
                            $hashed_password = $row["password"];
                            $result = password_verify($password, $hashed_password);
                            if($result) {
                                session_start();
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                header("Location: user_info.php");
                            }
                            else {
                                $passwordE = "Enter a valid password.";
                            }
                        }
                    }
                    else {
                        $usernameE = "Enter a valid username.";
                    }
                }
                else {
                    echo "Oops! Something went wrong.";
                }
            }
            unset($stmt);
        }
    }
    $conn = null;
?>