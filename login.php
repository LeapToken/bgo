<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Login page</title>
   <script>
      function validateEmail() {
         const emailInput = document.getElementById('email');
         const email = emailInput.value.trim();

         const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
         const isValidEmail = emailRegex.test(email);

         if (!isValidEmail) {
            emailInput.setCustomValidity('Please enter a valid email address.');
         } else {
            emailInput.setCustomValidity('');
         }
      }
   </script>
</head>
<body>
   <div class="login-container">
      <div class="login-content">
         <form method="post" action="login_action.php" class="login-form">
            <h2 class="form-title">Авторизация</h2>
            <?php
            if (isset($_SESSION['error'])) {
               echo "<div class='error-msg'>{$_SESSION['error']}</div>";
               unset($_SESSION['error']);
            }
            ?>
            <div class="form-group">
               <label for="email">Почта</label>
               <input type="email" name="email" id="email" autocomplete="off" required oninput="validateEmail()">
            </div>
            <div class="form-group">
               <label for="password">Пароль</label>
               <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn-login">Войти</button>
         </form>
         <div class="signup-link">
            Нет Аккаунта? <a href="signup.php">Зарегистрироваться!</a>
         </div>
      </div>
   </div>
</body>
</html>