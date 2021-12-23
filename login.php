<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <!-- <link rel="stylesheet" href="style_login.css"> -->
            <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_login.css">
    </head>
   
    <body>
		
        <div class="container">
          
            <form method="POST" action="cek_login.php">
                
            <h4 class = "text-center">Form login</h4>
            <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" name = "user"  id = "user"  class = "form-control"  placeholder="Masukkan username anda">
            </div>

            <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" name = "pass" id = "password"  class = "form-control"  placeholder="Masukkan Password anda">
            </div>
            <button type="Submit" name ="submit" onclick="doinsert()" class = "btn btn-primary">Login</button>
            </form>
        </div>     
    </body>
</html>

