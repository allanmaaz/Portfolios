<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Store in a file (simple database substitute)
    $file = fopen("messages.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n---\n");
    fclose($file);

    echo "<p>Thanks, $name! Your message has been received.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Me</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="logo">Allan<span>Maaz</span></h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <a href="projects.html">Projects</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="contact">
    <h2>Contact Me</h2>
    <form method="POST" action="">
      <input type="text" name="name" placeholder="Your Name" required><br>
      <input type="email" name="email" placeholder="Your Email" required><br>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea><br>
      <button type="submit" class="btn">Send Message</button>
    </form>
  </section>

  <footer>
    <p>© 2025 Allan Maaz</p>
  </footer>
</body>
</html>
