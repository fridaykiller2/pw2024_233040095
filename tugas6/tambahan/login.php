<?php
    // Cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"]) ) {
        // Cek username & Password
        if( $_POST["username"] == "admin" && $_POST["password"] == "admin") {
            // Jika benar, redirect ke halama admin
            header("Location: admin.php");
            exit;
        } else {
            // Jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Login Admin</h1>
                <p>
                    <img src="logo/logo.jpg" alt="">
                </p>
                <?php if(isset($error)) : ?>
                <p>username / password salah!</p>
                <?php endif; ?>
                <form action="" method="post">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                    <br>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
        </div>
    </div>
</body>
</html>