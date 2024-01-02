<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <center>
        <div class = "container dark">
            <div class="wrapers">
                <h3><center>LOGIN PANNEL</center></h3>
            </div>
        </div>
        <div id = "div_text">
            <h3>LOGIN FORM</h3>
            <table border="0" cellpadding="25" cellspacing="20">
                <form action="connect.php" method="POST">
                    <tr><td>User Name </td><td> <input type="text" name="user" value= "" required =""></td></tr>
                    <tr><td>Password </td><td> <input type="password" name="pass" value= "" required =""></td></tr>
                    <tr><td></td><td><input id ="button" type="submit" name="submit" id="Login IN"></td></tr>
                </form>
            </table>
            <?php
            if (isset($_POST['submit'])) {
                # code...
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $query = "SELECT * FROM login WHERE user = '$user' && pass = '$pass'";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                if($total == 1){
                    $_SESSION['user_name'] = $user;
                    header('location:deskboard.php');
                }
                else
                echo "Login is Failed";
            
        }
            ?>
        </div>
        <p><a href="">GO TO HOME</a></p>
        <div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        <div class = "container dark">
            <div class = "wrapers"></div>
            
        </div>
    </center>
</body>
</html>