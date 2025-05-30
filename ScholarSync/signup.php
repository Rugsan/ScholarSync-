<?php include 'header.php'; ?>
<main>
  <section class="auth">
    <div class="container">
      <h2>Signup</h2>
      <form action="process_signup.php" method="post" class="form-container">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <input type="submit" value="Sign Up">
      </form>
      <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
