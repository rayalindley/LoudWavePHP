<?php
    include 'connect.php';
?>

<style>
    <?php
        include 'css/LoudWave.css';
    ?>

    
</style>

<head>
    <title> LoudWave Music </title>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Ojuju:wght@200..800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div> 
            <a href="index.php">LoudWave Music</a>
        </div>

        <div>
            <input type="text" placeholder="Search concerts, events, and artists" class="search-bar">
        </div>
        
        <div>
            <a href="register.php"> Register </a>
            <a href="#"> / </a>
            <a href="login.php"><img src="Images/icons8-user-material-rounded/icons8-user-24.png" alt=""> Log in </a>
        </div>
    </header>

    <div id="menu">
        <a href="aboutUsPage.html"> About Us </a>
        <a href="contactPage.html"> Contact Us </a>
    </div>

    <div class="container">
        <h1>HOT ARTISTS !</h1>

        <div id="artist-container">
            <div>
                <img src="images/artist_bp.jpg">
                <p class="artist-name"> Blackpink </p>
            </div>

            <div>
                <img src="images/artist_bp.jpg">
                <p class="artist-name"> Blackpink </p>
            </div>

            <div>
                <img src="images/artist_bp.jpg">
                <p class="artist-name"> Blackpink </p>
            </div>

            <div>
                <img src="images/artist_bp.jpg">
                <p class="artist-name"> Blackpink </p>
            </div>
        </div>
    </div>
</body>