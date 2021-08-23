<?php
include("configfile.php");
$uname ="admin";
$upass = "password";

$adminid = $_POST['uname'];
$password = $_POST['pass'];

if($uname == $adminid && $upass == $password)
    {
        echo "Login Success";
        session_start();
        $_SESSION["admin"]="yes";
        echo $_SESSION["admin"];
        #session was getting
        header("display.php");
        echo '<script>
        window.location.href = "display.php"
        </script>';
    }    
    else
    {
        echo '<script>alert("Invalid Login Details");
        window.location.href = "admin.html"
        </script>';
    }

?>
