<!DOCTYPE html>
<html>
<head>
  <form action="inner.html">
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registration</h2>
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="Confirm password">Confirm Password:</label>
        <input type="password" id="password" name="password" required>
        </div>
      
      <div class="form-group">
        <div class="col-md-6 mb-4 d-flex align-items-center">

          <div class="form-outline datepicker w-100">
            <label for="Birthday">Birthday:</label>
            <input type="birthday" id="birthdayDate" name="birthday"><br>
          </div>

    
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.html"
            class="fw-bold text-body"><u>Login here</u></a></p>

    </form>
  </div>
 
</body>
</html>