Scholasync
Empowering Students Through Collaborative Learning

Scholasync is a multipage website designed to offer an innovative learning platform where students can explore various courses, interact through a secure authentication system, and connect via a contact portal. This project integrates PHP, HTML, CSS, JavaScript, and MySQL to provide a complete web application with a responsive design and robust user interactions.

Table of Contents
Overview

Features

File Structure

Installation and Setup

Prerequisites

Database Setup

Usage

Testing

Future Improvements

License

Contact

Overview
Scholasync is aimed at empowering students by providing:

A striking homepage with a full-width hero section and background image.

A detailed Courses page displaying dynamic course content.

Secure user authentication with Signup, Login, Logout, and Forgot Password functions.

A robust Contact page for user inquiries.

Responsive layouts that ensure usability across desktops, tablets, and mobiles.

A consistent design using a unified color palette (Deep Blue and Vibrant Orange) and typography.

Features
Responsive Design: Ensures a smooth user experience on all devices.

Dynamic User Authentication: Secure methods for user registration, login, password reset, and logout.

Interactive Course Exploration: Course cards with hover effects and dynamic interactions.

Real-Time Form Validation: Client-side (JavaScript) and server-side (PHP) validations.

Secure Data Handling: Utilizes secure password hashing (using PHP's password_hash()), proper session handling, and safe SQL queries.

Optimized Performance: Image optimizations and efficient asset management for faster load times.

Consistent Layout: Common header, footer, and container classes maintain design consistency.

Prerequisites
XAMPP or another PHP/MySQL stack installed on your machine.

A modern web browser (Chrome, Firefox, Safari, Edge).

Basic knowledge of PHP, HTML, CSS, and SQL.

Database Setup
Start the Apache and MySQL services via your XAMPP control panel.

Open phpMyAdmin.

Create a new database by running the provided database.sql file:

In phpMyAdmin, select the Import tab.

Choose the database.sql file and click Go.

This script creates the scholasync_db database with two tables: users and contacts.

Installation
Clone or download the project files into your XAMPP's htdocs folder (or another appropriate web root).

Ensure all file scripts (PHP, CSS, JavaScript) are present in the corresponding folders.

Update database credentials in db_config.php if necessary (e.g., username, password).

Usage
Launch the Website: Open your browser and navigate to: http://localhost/Scholasync/index.php

Navigation:

Use the header links to access Home, About, Courses, Contact, Signup, Login, and Logout.

The hero section on the homepage features a full-width background image with a centered call-to-action button directing users to the Courses page.

User Authentication:

Signup: Create a new account by entering a username, email, and matching passwords.

Login: Use your credentials to log in.

Forgot Password: Request a password reset link (simulation).

Logout: End your session by clicking the Logout link.

Contact Form:

Submit inquiries through the Contact page. Ensure all required fields are filled. Validations will trigger if any input is missing or invalid.

Testing
The website was tested against the following criteria:

Links & Buttons: Verified that all navigational elements redirect correctly.

JavaScript: Confirmed dynamic interactions (hover effects, form validations) work seamlessly.

Security: Tested auth forms ensuring passwords are hashed, sessions are properly handled, and reset tokens are generated.

Layout: Compared layouts with design wireframes to ensure consistency and responsiveness.

Error Handling: Verified appropriate error messages for invalid form submissions.

Images: Checked correct loading, display, and responsive behavior.

Forms: Both client-side and server-side validation were implemented and tested.

Browser Compatibility: Manually tested on multiple browsers (Chrome, Firefox, Safari, Edge).

Future Improvements
Enhanced Error Messaging: Inline error feedback on forms.

Lazy Loading: For heavy image assets to improve performance.

Mobile Browser Optimization: Additional responsive tweaks for mobile-specific browsers.

Improved Security Logging: More robust logging around authentication and data transactions.

Accessibility Enhancements: Expand ARIA labels and keyboard navigation support.

License
This project is free to use and modify. Please include appropriate attributions if you repurpose or build upon this work.

Contact
For further inquiries or support, please reach out via email:

Email: support@scholasync.com
