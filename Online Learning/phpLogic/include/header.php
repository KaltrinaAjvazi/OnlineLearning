
<?php  session_start(); ?>

<header>
      <nav>
        <ul>
          <li><a href="Index.php"> 
            <img src="./img/LOGO.png" width="100px"/>
          </a></li>
          <li><a href="index.php"> Home</a></li>
          <li><a href="about-us.php"> About us </a></li>
          <li><a href="contact-us.php"> Contact us </a></li>
          <?php if(!empty($_SESSION['Emri'])) { ?>
          <li><a href="#"> <?php echo $_SESSION['Emri'] ?></a></li>
          <li><a href="invalidateSession.php">Sign out</a></li>
          <?php  } else { ?>
          <li><a href="signup.php"> Register </a></li>
          <li><a href="login.php"> Login </a></li>
          <?php  }  ?>
        </ul>
      </nav>
    </header>
    