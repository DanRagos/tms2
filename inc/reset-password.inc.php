<?php

    if (isset($_POST['reset-password-submit'])) {
        
        $selector = $_POST['selector'];
        $validator = $_POST['validator'];
        $password = $_POST['pwd'];
        $cpassword = $_POST['cpwd'];

        if (empty($password) || empty($cpassword)) {
            header("location: ../create-new-password.php?newphp=empty");
            exit();
        } elseif ($password !== $cpassword) {
            header("location: ../create-new-password.php?newphp=pwdnotsame");
            exit();
        }

        $currentDate = date("U");

        require 'dbc.inc.php';

        $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires >=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "There was an error!!";
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "si", $selector, $currentDate);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);
            if (!$row = mysqli_fetch_assoc($result)) {
                echo "You need to re-submit your reset request.";
                exit();
            } else {
                $tokenBin = hex2bin($validator);
                $tokenCheck = password_verify($tokenBin, $row['pwdResetToken']);

                if ($tokenCheck === false) {
                    echo "You need to re-submit your reset request.";
                    exit();
                } elseif ($tokenCheck === true) {
                    $tokenEmail = $row['pwdResetEmail'];

                    $sql = "SELECT * FROM users WHERE email=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "There was an error in select !!";
                        exit();
                    } else {
                        mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if (!$row = mysqli_fetch_assoc($result)) {
                            echo "There was an error !!!";
                            exit();
                        } else {
                            $sql = "UPDATE users SET password=? WHERE email=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error update!!";
                                exit();
                            } else {
                                //$newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                                $newPwdHash = $password;
                                mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $sql = "DELETE FROM pwdreset WHERE pwdResetEmail=?";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    echo "There was an error!! in Delete";
                                    exit();
                                } else {
                                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                    mysqli_stmt_execute($stmt);
                                   	echo "
				<script>alert('Password Updated')</script>
				<script>window.location = '../index.php'</script>
				";
                                }
                            }
                        }
                    }
                }
            }
        }

    } else {
        header("location: ../index.php");
    }