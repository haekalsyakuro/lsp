<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>login</title>
</head>

<body>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-5 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
        <form action="proses.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="username"><br><br>

            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="password"><br><br>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <div class="register">
                <small>Belum Punya Akun? <a href="../register/index.php">Silahkan Daftar</a></small>
</div>
</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>