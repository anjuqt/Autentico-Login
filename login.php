<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form>
      <div class="form-group">
        <input type="text" id="username" name="username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
      <div class="form-group">
        <span class="forgot-password">Forgot password?</span>
      </div>
      <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="register.html"
        class="fw-bold text-body"><u>Register here</u></a></p>

    </form>
  </div>
</body>
</html>
