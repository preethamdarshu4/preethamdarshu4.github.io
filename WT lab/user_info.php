<?php
	session_start();

	if( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ) {
		header("Location: logf.php");
		exit();
    }
    
    require_once "confg.php";
    if(isset($_SESSION["username"]) || empty($_SESSION["username"])) {
        $sql = "SELECT firstname, lastname, mobile_num, email FROM $table 
        WHERE username = :username ";
        $stmt = $conn->prepare($sql);
        if($stmt) {
            $stmt->bindParam(':username', $P_username);
            $P_username = $_SESSION["username"];
            if($stmt->execute()) {
                if($stmt->rowCount() == 1){
                    $row = $stmt->fetch();
                    if($row) {
                        $_SESSION["firstname"] = $row["firstname"];
                        $_SESSION["lastname"] = $row["lastname"];
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["mobileno"] = $row["mobile_num"];
                        $_SESSION["email"] = $row["email"];
                        header("Location: usr_prof.php");
                    }
                    else {
                        echo "ERROR: initializing session variables.";
                    }
                }
                else {
                    echo "Record not found";
                }
            }
            else {
                echo "ERROR";
            }
        }
        unset($stmt);
    }
    else {
        echo "ERROR: session variable [username] not set or empty.";
    }
    $conn = null;
?>