<!DOCTYPE html>
<?php

require_once 'controllers/authController.php'; ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- CSS Custom Styling -->
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4 form-div login">
            <form action="signup.php" method="post">
                <h3 class="text-center">Register</h3>

                <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                  <li><?php echo $error; ?></li>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                  <label for="passwordConf">Confirm Password</label>
                  <input type="password" name="passwordConf" class="form-control form-control-lg">
                </div>
                <div class="form-group">
                  <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                </div>
                <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
            </form>
          </div>
        </div>
      </div>


  </body>
</html>
