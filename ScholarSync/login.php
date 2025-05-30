<?php include 'header.php'; ?>
<main>
  <section class="auth">
    <div class="container">
      <h2>Login</h2>
      <form action="process_login.php" method="post" class="form-container">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
      </form>
      <p><a href="forgot_password.php">Forgot Password?</a></p>
      <p>Don't have an account? <a href="signup.php">Sign up now</a></p>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
