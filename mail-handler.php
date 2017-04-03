<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artsy At Heart</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Griffy" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  </head>
  <body>
    <header class="main-header">
      <h1>Artsy At Heart</h1>
      <nav>
        <ul class="main-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="classes.html">Classes</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="custom.html">Custom</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </header><!-- Main Header -->
    <main>
        
      <div class="thanks">
        <h3>Thank you for contacting Artsy At Heart!</h3>
        <p>We will be sure to get back to you as soon as possible! We hope you have a great day! Meanwhile, check out the rest of our website for artsy ideas or artworks from Mary herself!</p>
        <div class="link-list">
          <div class="link">
            <p><a href="classes.html">Painting Classes</a></p>
          </div>
          <div class="link">
            <p><a href="gallery.html">Gallery</a></p>
          </div>
          <div class="link">
            <p><a href="about.html">About Mary</a></p>
          </div>
          <div class="link">
            <p><a href="index.html">Homepage</a></p>
          </div>
        </div>
      </div>
      
      <?php 
        if(isset($_POST['submit'])){
        $to = "frazier.mary83@yahoo.com";
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $subject = "Form submission";
        $message = $first_name . " " . $last_name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
        mail($to,$subject,$message);
        } 
      ?> 
      
    </main>
    <footer class="main-footer">
    <nav>
      <ul class="secondary-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="classes.html">Classes</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="custom.html">Custom</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav><!-- Secondary Nav-->
    
    <div class="foot">
      <div class="social">
        <a href="mailto:frazier.mary83@yahoo.com">
          <img class="social-img" src="img/email.png" alt="Email Logo" id="e-mail">
        </a>
        <a href="tel:6622268835">
          <img class="social-img" src="img/phone.png" alt="Phone Logo" id="phone">
        </a>
      </div><!-- Social Images -->
      <p>Located in Grenada, Mississippi</p>
      <p>Open: 8am-8pm, Monday-Thursday</p>
    </div>
    <p>&copy; 2017 Artsy At Heart</p>
  </footer>
</body>
</html>