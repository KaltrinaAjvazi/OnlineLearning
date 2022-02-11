<!DOCTYPE html>
<html>

<head>
  <title>Online Learning - Log In</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php  include ('../Projekti1/phpLogic/include/header.php') ?>

  
  <div class="page-title">
    <h2>Log in</h2>
  </div><br>
  <div class="login">
    <div class="img-login">
      <img src="./img/userplus.png" width="50" height="50" alt="user img">

    </div>
    <form  action="phpLogic/controllers/LoginController.php" method="POST" id="login" name="login">
      <label><b>Email
        </b>
      </label>
      <input type="email" name="Email" id="Uname" class="input" placeholder="email"
        onchange="ValidateEmail(document.login.email)" required>
      <br><br>
      <label><b>Password
        </b>
      </label>
      <input type="Password" name="Password" id="password" class="input" placeholder="Password"
        onchange="ValidatePassword(document.login.password)" required>
      <br><br>
      <button type="submit" id="myBtn" class="btn-default">Log in</button>
      <br><br>
    </form>
  </div>
</body>
<script>
  function ValidateEmail(inputText) {
    //  /\S+@\S+\.\S+/
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (inputText.value.match(mailformat)) {
      var element = document.getElementById("myBtn");
      element.classList.remove("disabled");
      document.login.email.focus();
      return true;
    }
    else {
      var element = document.getElementById("myBtn");
      element.classList.add("disabled");
      alert("You have entered an invalid email address!");
      document.login.email.focus();
      return false;
    }
  }
  function ValidatePassword(inputText) {
    var password = inputText.value;
    if (password.length > 5) {
      var element = document.getElementById("myBtn");
      element.classList.remove("disabled");
      document.login.password.focus();
    }
    else {
      var element = document.getElementById("myBtn");
      element.classList.add("disabled");
      alert("Password is short!");
      document.login.password.focus();
      return false;
    }
  }

</script>

</html>