<?php
session_start();
session_destroy();
header("Location: bugbounty copy.html");
?>

DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Logout - Bug Bounty Program</title>
</head>
<body>

  <div class="container">
    <header>
      <h1>Logout</h1>
    </header>

    <section id="logout-content">
      <h2>Logout Confirmation</h2>
      <p>Are you sure you want to logout?</p>

      <button onclick="logout()">Logout</button>
    </section>
  </div>

  <footer>
    <p>&copy; 2023 Bug Bounty Program</p>
  </footer>

  <script src="app.js"></script>
  <script>
    function logout() {
      // Perform logout actions (e.g., clear authentication token, redirect to login page)
      // You may want to include additional logic based on your authentication setup
      // For demonstration, redirecting to the login page
      window.location.href = 'login.html';
    }
  </script>
</body>
</html>
