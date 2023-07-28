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
    <title>Buy - Барбоскины: Game Over</title>
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
            opacity: 0;
        }

        /* Buy styles */
        #buy-content {
            text-align: center;
            margin: 2rem;
        }

        .buy-button {
            background-color: #ffffff; /* Set button to white */
            color: #ff0062; /* Set text color to the header color */
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease; /* Add color transition */
        }

        .buy-button:hover {
            background-color: #ff0062; /* Set background color on hover */
            color: #ffffff; /* Set text color to white on hover */
        }
    </style>
</head>
<body>
    <header>
        <h1>Пред-Заказ Игры</h1>
    </header>
    <div id="buy-content">
        <p>
            Оформите предзаказ 'Барбоскины: Game Over' прямо сейчас и станьте одним из первых, кто испытает это эпическое приключение! Те, кто сделает предварительный заказ, получат свою копию игры по электронной почте после выпуска. Нажмите кнопку ниже, чтобы сделать предварительный заказ.
        </p>
        <!-- Buy button -->
        <button class="buy-button" onclick="redirectToBuyPage()">Buy Now</button>
    </div>

    <footer>
        <p>&copy; 2023 Sam-Game. All rights reserved.</p>
    </footer>

    <script>
        // Function to redirect to the buy page
        function redirectToBuyPage() {
            window.location.href = "https://example.com/buy"; // Replace with the actual URL of the buy page
        }
    </script>
</body>
</html>