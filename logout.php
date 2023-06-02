<!DOCTYPE html>
<html>
<head>
  <title>Logout Form</title>
</head>
<body>
  <h1>Thank you for accessing the website</h1>
  
  <form action="inner.html" method="post" id="logoutForm">
    <input type="submit" value="Logout">
  </form>

  <script>
    document.getElementById("logoutForm").addEventListener("submit", function(e) {
      e.preventDefault();
      // Perform logout actions here
      alert("You have been logged out!");
      // Redirect to login page or perform any other necessary actions
    });
  </script>

</body>
</html>