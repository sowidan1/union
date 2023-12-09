<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .box {
      width: 300px;
      padding: 40px;
      background-color: #f2f2f2;
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
    }

    .remember-me,
    .forgot-password {
      flex-basis: 49%;
    }

    label {
      display: block;
      text-align: left;
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="checkbox"] {
      vertical-align: middle;
      margin-right: 150px;
    }

    a {
      text-decoration: none;
    }

    .signin {
      width: 100%;
      padding: 10px;
      background-color: #ff5d27;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .signin:hover {
      background-color: #ff5d1d;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="box">
      <img src="../assets/images/logo3-1-232x107.png" alt="Mobirise Website Builder" style="height: 8rem;">
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group remember-forgot">
          <div class="remember-me">
            <label for="remember">Remember me</label>
            <input type="checkbox" id="remember" name="remember">
          </div>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
        </div>
        <div class="form-group">
          <a href="post.html" class="signin">Sign In</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
