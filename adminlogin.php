<?php require("form.php") ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    <?php include 'links.php' ?>
</head>
<body>
<a class="btn btn-danger btn-lg" href="index.php">Home</a>
<header>
    <div class="container center-div shadow">
        <div class="heading text-center mb-5 text-uppercase text-white">Logowanie do Admin Panelu</div>
        <div class="container row d-flex flex-row justify-content-center mb-5">
            <div class="admin-from shadow p-2">
                <form action="logincheck.php" method="POST">
                    <div class="form-group">
                        <label>Login (user1)</label>
                        <input type="text" name="user" value="" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Password (user1)</label>
                        <input type="password" name="password" value="" class="form-control" autocomplete="off">
                    </div>
                    <input type="submit" class="btn btn-success" name="submit">
                </form>
            </div>
        </div>
    </div>
</header>
</body>
</html>



