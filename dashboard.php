<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Барбоскины: Game Over</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            overflow: hidden;
            overflow-y: auto; /* Allow vertical scrolling */
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }
        header {
            background-color: #ff0062;
            padding: 1rem;
            color: #ffffff;
            text-align: center;
        }
        h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.4rem;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem;
            color: #ffffff;
            text-align: center;
        }
        video {
            width: 100%;
            display: block;
            margin: 0 auto;
            max-width: 800px;
            border: 5px solid #ff0062;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            opacity: 1; /* Set opacity to 1 to always display the video */
        }

        /* Image styles */
        #imageContainer {
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        #imageContainer img {
            max-width: 800px;
            border: 5px solid #ff0062;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
        }
      
        .button-container {
            display: flex;
            justify-content: center;
            margin: 2rem 0;
        }

        .button {
            background-color: #ffffff; /* Set buttons to white */
            color: #ff0062; /* Set text color to the header color */
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease; /* Add color transition */
        }

        .button + .button {
            margin-left: 10px; /* Add left margin to create space between buttons */
        }

        .button:hover {
            background-color: #e6e1e1; /* Set background color on hover */
            color: #ff0062; /* Set text color to white on hover */
        }

        /* Style for the new "Log Out" and "Buy Now" buttons */
        .buy-button {
            background-color: #ff0062;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease; /* Add color transition */
        }

        .buy-button {
            margin-top: 10px;
        }

        .logout-button + .buy-button {
            margin-left: 10px;
        }

        .logout-button:hover, .buy-button:hover {
            background-color: #e6e1e1;
            color: #ff0062;
        }

        /* Additional CSS for the image and button container */
        #imageButtonContainer {
            text-align: center;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        /* Footer styles */
        footer {
            background-color: #ff0062;
            padding: 1rem;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Барбоскины: Game Over</h1>
        <p>Привет, <?php echo $name ?>!</p>
        <button class="button logout-button" onclick="redirectToLogout()">Выйти</button>
    </header>
    <p>
        Они бродят каждую ночь в поисках новой жертвы. сможешь ли ты успокоить их демонов и остаться в живых?
    </p>
    <video controls id="gameVideo">
        <source src="https://cdn.glitch.me/ee439b70-1bf9-42eb-8a12-155c63acb87e/%D0%9C%D0%B5%D0%BC.mp4?v=1690465708903" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div id="imageButtonContainer">
        <img src="https://m.gjcdn.net/video-poster/1400/25039010-awfugwki-v4.webp" alt="My Awesome Game Image">
        <br>
        <button class="button buy-button" onclick="redirectToBuy()">Пред-Заказ</button>
        <button class="button buy-button" onclick="redirectToGallery()">Галерея</button>
    </div>
  
    <footer>
        <p>&copy; 2023 Sam-Game. All rights reserved.</p>
    </footer>

    <script>
        // Function to redirect to YouTube
        function redirectToCheck() {
            window.location.href = "check.php"; // Replace with the actual YouTube URL
        }

        // Function to redirect to Twitter
        function redirectToCheck2() {
            window.location.href = "check2.php"; // Replace with the actual Twitter URL
        }

        // Function to redirect to logout.php
        function redirectToLogout() {
            window.location.href = "logout.php";
        }

        // Function to redirect to the buy page
        function redirectToBuy() {
            window.location.href = "buy.php"; // Replace with the actual buy page URL
        }

        // Function to redirect to the buy page
        function redirectToGallery() {
            window.location.href = "gallery.php"; // Replace with the actual buy page URL
        }
    </script>
</body>
</html>