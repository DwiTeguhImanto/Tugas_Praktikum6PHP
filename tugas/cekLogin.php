<!DOCTYPE html>
<html>

<head>
    <title>FORM LOGIN</title>
</head>

<body>
    <?php
    if (empty($_POST['username']) || empty($_POST['email'])) {
        header("Location:gagalLogin.php");
    } else {
        date_default_timezone_set('Asia/Jakarta');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $date = date('Y-m-d H:i:s');
        $day = date('l');

        echo "<center>";
        echo "<h2>Login Berhasil</h2>";
        echo "Selamat Datang, " . $username . "!<br><br>";
        echo "Email Anda : " . $email . "<br><br>";
        echo "Waktu Anda Login : " . date('h:i A', strtotime($date)) . " on " . $day . ", " . date('F jS, Y', strtotime($date));
        echo "</center>";
    }

    ?>
</body>

</html>