<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <div class=login-container style="text-align: center; background-color:white; width: 400px; margin-left:500px; margin-top:50px;">
    <h1>Get Started</h1>
    <img src="https://media.istockphoto.com/id/529074894/vector/wind-rose-hand-drawn-illustration.jpg?s=612x612&w=0&k=20&c=OHb0rrbwc99rmf04XK1gYCtS7mAUGZTiPm8jLLTfxyw=" style="width: 150px;">
    <h1>Register</h1>
        <form action="prosesregister.php" method="POST">
        <div class="formlogin">
                <input type="text" name="us" placeholder="Username" required> <br>
                <input type="text" name ="ps" placeholder="Password" required> <br>
                <input type="radio" name="rl" value="Jual"/>
                    <label>Penjual</label>
                <input type="radio" name="rl" value="Beli"/>
                    <label>Pembeli</label> <br><br>
                <button type="submit" class="btn btn-warning" title="Register">
                        Register
                    </button>
            </div>
        </form>
    </div>
</body>
</html>