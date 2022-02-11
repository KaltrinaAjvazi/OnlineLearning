
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF=8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>Online Learning</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="Index.html"> 
            <img src="./img/LOGO.jpg" width="100px"/>
          </a></li>
          <li><a href="Index.html"> Home</a></li>
          <li><a href="about-us.html"> About us </a></li>
          <li><a href="contact-us.html"> Contact us </a></li>
          <li><a href="signup.html"> Register </a></li>
          <li><a href="login.html"> Login </a></li>
        </ul>
      </nav>
    </header>
    <?php  include ('../Projekti1/phpLogic/include/header.php') ?> 
    <h2>
        "Education is the most powerful weapon which you can use to change the world"

    </h2>
<div style="display: flex;">
  <div style="width: 30%">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="./img/teacher8.jpg" style="width: 100%;" />
        <div class="text">...</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="./img/teacher2.jpg" style="width: 100%;" />
        <div class="text">...</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="./img/teacher5.jpg" style="width: 100%;" />
        <div class="text">...</div>
      </div>
      <a class="arrow-slide prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="arrow-slide next" onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>
  <div style="width: 80%">
    <h2>Our Teachers</h2>
    <div class="images">
      <div class="image">
        <img src="./img/doctor1.jpg" style="width: 100%;" />
      </div>
      <h1> Ramiz Leka</h1>
      <div class="image">
        <img src="./img/teacher1.jpg" style="width: 100%;" />
      </div>
      <h1>Petrit Gashi</h1>
      <div class="image">
        <img src="./img/teacher7.jpg" style="width: 100%;" />
      </div>
      <h1>Kujtesa Lahu</h1>
    </div>
    </div>
  </div>
</div>
    
    <br />

    <div style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    
    <section class="home-hero">
      <div class="container">
        <h1 class="quote"></h1>
      </div>
    </section>
    <section class="home"></section>
    

    <div class="login">
      <h2>Contact Now</h2>
      <form id="login" method="get">    
        <div class="input-group">
          <label for="emri"><b>Name and Surname</b></label>
          <input type="text" name="name"  class="input" required>
        </div>
        <div class="input-group">
          <label for="email"><b>Email</b></label>
          <input type="email" name="email"  class="input" required>
        </div>
        <div class="input-group">
          <label for="number"><b>Number</b></label>
          <input type="number" name="number"  class="input" required>
        </div>
        <button type="button" class="btn-default btn-dark" >Contact</button>    
        <br><br> 
      </form>
    </div>

    
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides((slideIndex += n));
      }

      function currentSlide(n) {
        showSlides((slideIndex = n));
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
          slideIndex = 1;
        }
        if (n < 1) {
          slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>
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
          Our company is a multi-year company, which offers efficient services for students to learn from therin homes, 
          is a platform that has many active students and teachers learning on this platform.
        </p>
        </div>
      </div>
    </footer>
  </body>
</html>