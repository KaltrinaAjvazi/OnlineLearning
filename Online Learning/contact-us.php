<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF=8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>Online Learning</title>

  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" />
</head>

<body>
  <!--<header>
    <nav>
      <ul>
        <li><a href="Index.html"> Home</a></li>
        <li><a href="about-us.html"> About us </a></li>
        <li><a href="contact-us.html"> Contact us </a></li>
        <li><a href="signup.html"> Register </a></li>
        <li><a href="login.html"> Login </a></li>
      </ul>
    </nav>
  </header>-->
  <?php  include ('../Projekti1/phpLogic/include/header.php') ?>
  <div class="page-title">
    <h2>Contact Us</h2>
  </div>
  <section class="contact-section">
    <div class="contact">
      <h2 style="text-align: left;padding: 20px 0;">Contact Us</h2>
      <form id="login" method="get">
        <div class="input-group">
          <label for="emri"><b>Name</b></label>
          <input type="text" name="name" class="input" required>
        </div>
        <div class="input-group">
          <label for="email"><b>Email</b></label>
          <input type="email" name="email" class="input" required>
        </div>
        <div class="input-group">
          <label for="text"><b>Subject</b></label>
          <input type="text" name="subject" class="input" required>
        </div>
        <div class="input-group">
          <label for="text"><b>Message</b></label>
          <textarea name="message" id="" rows="10" class="input"></textarea>
        </div>
        <button type="button" class="btn-default btn-dark">SEND</button>
        <br><br>
      </form>
    </div>
    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.21003859951!2d21.12370779102555!3d42.66637476671216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1608410937612!5m2!1sen!2s"
        width="600" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </div>
  </section>




  <footer class="footer">
    <div class="footer-p1">
      <h3>Online Learning</h3>
      <div class="footer-links">
        <a href="index.html">Home</a>
        <a href="about-us.html">About</a>
        <a href="contact-us.html">Contact</a>
      </div>
    </div>

      <div class="footer-p2">
      <h5>Contact Us</h5>
        <p></p>
          <a href="online.learn@gmail.com"
            >
            online.learn@gmail.com
          </a>
      </div>
    <div class="footer-p3">
      <h5>About Us</h5>
      <p class="footer-company-about">
        Ne jemi nj?? organizat q?? kemi krijuar nj?? platform p??r m??sim online, q??llimi yn?? ??sht?? t?? kemi cil??si t?? larta n?? arsim.
      </p>
      </div>
    </div>
  </footer>
</body>

</html>