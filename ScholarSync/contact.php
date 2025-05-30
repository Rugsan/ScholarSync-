<?php include 'header.php'; ?>
<main>
  <section class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <form action="process_contact.php" method="post" class="form-container">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" placeholder="Optional">
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Send Message">
      </form>
      <div class="social-links">
        <p>Or reach us on social media:</p>
        <a href="#">Facebook</a> | 
        <a href="#">Twitter</a> | 
        <a href="#">LinkedIn</a>
      </div>
    </div>
  </section>
</main>
<?php include 'footer.php'; ?>
