<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="log.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
</head>
<body>
    <div class="box">
    <div class=login-container style="text-align: center; width: 400px; margin-left:470px; margin-top:100px">
    <img src="https://media.istockphoto.com/id/529074894/vector/wind-rose-hand-drawn-illustration.jpg?s=612x612&w=0&k=20&c=OHb0rrbwc99rmf04XK1gYCtS7mAUGZTiPm8jLLTfxyw=" style="width: 150px;">
    <h1>Login</h1>
        <form action="proseslogin.php" method="POST">
        <div class="formlogin">
                <input type="text" name="us" placeholder="Username" required> <br>
                <input type="text" name ="ps" placeholder="Password" required> <br>
                <button type="submit" class="btn btn-warning" title="Login">
                        Login
                    </button>
                <a href="register.php">Register</a>
            </div>
        </form>
    </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
</body>
</html>