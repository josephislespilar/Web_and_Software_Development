<?php require_once 'controllers/authcontroller.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- CSS Custom Styling -->
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4 form-div">
            <form action="login.php" method="post">
                <h3 class="text-center">Login</h3>

                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                  <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label for="username">Username or Email</label>
                  <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                  <button type="submit" name="login" class="btn btn-primary btn-block btn-lg">Login</button>
                </div>
                  <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>
                  <div style="font-size: 0.8em; text-align: center;">
                    <a href="forgot_password.php">Forgot your password?</a>
                  </div>
            </form>
          </div>
        </div>
      </div>


  </body>
</html>
