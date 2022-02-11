<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!--<header>
        <nav>
            <ul>
                <li><a href="Index.html"> Home</a></li>
                <li><a href="AboutUs.html"> About us </a></li>
                <li><a href="contact-us.html"> Contact us </a></li>
                <li><a href="signup.html"> Register </a></li>
                <li><a href="login.html"> Login </a></li>
            </ul>
        </nav>
    </header>-->
    <?php  include ('../Projekti1/phpLogic/include/header.php') ?>
    <div class="page-title">
        <h2>Register</h2>
    </div><br>

    <div class="login">
        <div class="img-login">
            <img src="./img/userplus.png" width="50" height="50" alt="user img">

        </div>
        <form method="POST" name="signup">
            <div class="signup-information">
                <div class="input-group">
                    <label for="firstname"><b>Name</b></label>
                    <input type="text" name="firstname" class="input" required>
                </div>

                <div class="input-group">
                    <label for="lastname"><b>Lastname</b></label>
                    <input type="text" name="lastname" class="input" required>
                </div>

                <div class="input-group">
                    <label for="email"><b>Email</b></label>
                    <input type="text" name="email" class="input" onchange="ValidateEmail(document.signup.email)"
                        required>
                </div>

                <div class="input-group">
                    <label for="gender"><b>Gender</b></label>
                    <div class="gender-options">
                        <input type="radio" name="gender" value="male" checked> Male<br>
                        <input type="radio" name="gender" value="female"> Female<br>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" id="password" name="password" class="input"
                        onchange="ValidatePassword(document.signup.password)" required>
                </div>

                <div class="input-group">
                    <label for="confirm-password"><b>Confirm Password</b></label>
                    <input type="password" name="confirmPassword"
                        onchange="ValidateConfirmPassword(document.signup.confirmPassword)" class="input" required>
                </div>
            </div>
            <button type="submit" id="myBtn" class="btn-default">Sign Up</button>
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
            document.signup.email.focus();
            return true;
        }
        else {
            var element = document.getElementById("myBtn");
            element.classList.add("disabled");
            alert("You have entered an invalid email address!");
            document.signup.email.focus();
            return false;
        }
    }
    function ValidatePassword(inputText) {
        var password = inputText.value;
        if (password.length > 5) {
            var element = document.getElementById("myBtn");
            element.classList.remove("disabled");
            document.signup.password.focus();
        }
        else {
            var element = document.getElementById("myBtn");
            element.classList.add("disabled");
            alert("Password is short!");
            document.signup.password.focus();
            return false;
        }
    }
    function ValidateConfirmPassword(inputText) {
        var confirmpassword = inputText.value;
        var password = document.getElementById("password");
        if (confirmpassword == password.value) {
            var element = document.getElementById("myBtn");
            element.classList.remove("disabled");
            document.signup.password.focus();
        }
        else {
            var element = document.getElementById("myBtn");
            element.classList.add("disabled");
            alert("Password dont match!");
            document.signup.password.focus();
            return false;
        }
    }
</script>

</html>