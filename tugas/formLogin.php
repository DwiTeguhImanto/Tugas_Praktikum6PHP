<!DOCTYPE html>
<html>

<head>
    <title>FORM INPUT LOGIN </title>
</head>

<center>
    <h1>Form Login Tanpa Database</h1>

    <form action="cekLogin.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">E - mail:</label>
        <input type="text" id="email" name="email"><br><br>

        <input type="submit" value="Login">

    </form>
</center>

</html>










<!-- <form method="GET" action="hasil.php">
                        <input type="teks" name="user">
                        <input type="password" name="pass">
                        <input type="submit" value="Login">
                    </form> -->

<!-- <?php
$user = $_GET['user'];
$pass = $_GET['pass'];
if (($user == "bactiar") && ($pass == "newbie"))
    printf("Selamat $user, Anda Berhasil Masuk.");
else
    printf("Username atau Password Anda Salah.");
?> -->