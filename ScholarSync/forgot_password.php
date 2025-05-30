<?php include 'header.php'; ?>
<main>
  <section class="auth">
    <div class="container">
      <h2>Forgot Password</h2>
      <form action="process_forgot.php" method="post" class="form-container">
        <label for="email">Enter your registered Email:</label>
        <input type="email" id="email" name="email" required>
        
        <input type="submit" value="Reset Password">
      </form>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
