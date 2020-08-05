<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../../Assets/CSS/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" method="POST" action="../../Controller/accountController.php">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" name ="username"placeholder="User-name" required autofocus>
                <label for="inputUserame">User-name</label>
              </div>

              <div class="form-label-group">
                <input type="phone-number" id="inputEmail" class="form-control"name ="phone-number" placeholder="Phone-number" required>
                <label for="inputEmail">Phone-number</label>
              </div> 
              <hr>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name ="password1"placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control"name ="password2" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="register">Register</button>
              <a class="d-block text-center mt-2 small" href="../loginForm.php">Sign In</a>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>