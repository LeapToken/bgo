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
    <title>Галерея - Барбоскины: Game Over</title>
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

        /* Gallery styles */
        #gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 2rem;
        }

        .gallery-item {
            margin: 1rem;
            max-width: 300px;
            border: 5px solid #ff0062;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
        }

        .gallery-item img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .gallery-item p {
            padding: 1rem;
            color: #ffffff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Галерея - Барбоскины: Game Over</h1>
    </header>
    <div id="gallery">

        <div class="gallery-item">
            <img src="images/1.jpg" alt="Image 1">
            <p>Image 1 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/2.jpg" alt="Image 2">
            <p>Image 2 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/3.jpg" alt="Image 3">
            <p>Image 3 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/4.jpg" alt="Image 4">
            <p>Image 4 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/5.jpg" alt="Image 5">
            <p>Image 5 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/6.jpg" alt="Image 6">
            <p>Image 6 description</p>
        </div>
      
        <div class="gallery-item">
            <img src="images/7.jpg" alt="Image 7">
            <p>Image 7 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/8.jpg" alt="Image 8">
            <p>Image 8 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/9.jpg" alt="Image 9">
            <p>Image 9 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/10.jpg" alt="Image 10">
            <p>Image 10 description</p>
        </div>

        <div class="gallery-item">
            <img src="images/11.jpg" alt="Image 11">
            <p>Image 11 description</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Sam-Game. All rights reserved.</p>
    </footer>
</body>
</html>
