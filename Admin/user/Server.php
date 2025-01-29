<?php

    //session start
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } else{
        session_destroy();
        session_start();
    }

    //initialize global variables
    $email = "";
    $errors = array();


    //db connection
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database = "sri_lankan_airways";

    $db_connection = new mysqli($server_name , $user_name , $password , $database);

    if($db_connection -> connect_error){
        die("connection error");
    }


    //-------------------------------------login---------------------------------------//
    if (isset($_POST['login'])) {

        $email = mysqli_real_escape_string($db_connection, $_POST['email']);
        $password = mysqli_real_escape_string($db_connection, $_POST['Password']);
            
            $sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
            $result = mysqli_query($db_connection, $sql);
            

            if (mysqli_num_rows($result) == 1) {
                $_SESSION['email'] = $email;
            
                if ($row = mysqli_fetch_assoc($result)) {
                    echo $row;
                    $_SESSION['fname'] = $row['FirstName'];
                    $_SESSION['lname'] = $row['LastName'];
                    echo $_SESSION['fname'];
                }

                $sql = "SELECT Utype, Status FROM users WHERE Email='$email' AND Password='$password'";
                $result = mysqli_query($db_connection, $sql);

                if ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['utype'] = $row['Utype'];
                    $_SESSION['status'] = $row['Status'];
                }
                if ($_SESSION['utype'] == 0 && $_SESSION['status'] == 1 )
                {
                    header('location: User/UserDashboard.php');
                }
                else if ($_SESSION['utype'] == 1 && $_SESSION['status'] == 1 ) {
                    header('location: Admin/AdminDashboard.php');
                }
            }
            else{
                echo "Wrong Email & Password Combination";
            }
    }

    //----------------------logout-------------------------------//
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        header('location: login.php');
    }

?>