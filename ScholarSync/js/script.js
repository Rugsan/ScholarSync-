document.addEventListener("DOMContentLoaded", function() {
    console.log("The Scholasync site is loaded and ready!");
  
    // Course card click interactivity
    const courseCards = document.querySelectorAll('.course');
    courseCards.forEach(card => {
      card.addEventListener("click", function() {
        const courseTitle = card.querySelector('h3').innerText;
        alert("You have selected: " + courseTitle);
      });
    });
  
    // Simple client-side validation for signup: check if passwords match
    const signupForm = document.querySelector('form[action="process_signup.php"]');
    if (signupForm) {
      signupForm.addEventListener("submit", function(e) {
        const password = document.getElementById('password').value;
        const confirm = document.getElementById('confirm_password').value;
        if (password !== confirm) {
          e.preventDefault();
          alert("Passwords do not match. Please try again.");
        }
      });
    }
  });
  