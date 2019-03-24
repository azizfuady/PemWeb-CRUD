<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:lavender">
        <form class="form-horizontal" method="POST" action="validasi.php" name="form">
            <h1 style="text-align:center">Login</h1>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" name="username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <br>
            <input type="submit" name="submit" value="Masuk" class="btn btn-primary btn-block">

        </form>
        <br>
        <div class="hint-text" style="text-align:center" >Belum punya akun? <a href="#">Daftar disini</a></div>
        </div>
        <div class="col -sm-4"></div>
    </div>

</body>
</html>