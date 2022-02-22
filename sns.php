<?php
require_once("_dbconnect.php");
require_once("_dbconnect2.php");
require_once("_global_config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SNS Poster</title>
    <link rel="stylesheet" href="./assets/css/bg-style.css">
    <link rel="stylesheet" media="screen" href="./assets/css/poster.css">

</head>
<body>
    <section>
        <h3>goSMAC Mobile Poster Maker</h3>
        <div class="options">
            <button onclick="window.location.href='landscape-poster';">
                Landscape Poster
            </button>
            <button onclick="window.location.href='mobile-poster';">
                Mobile Poster
        </button>
        </div>

        <div class="sns" id="capture">
        <p class="heading">Industry Career Coaching Session</p>
        <img class="logo" src="./images/logo.jpg">
        <div style="top: 3.5em; left: 3em; right: 5em;" id="show_img"></div> 
        <h1 style="top: 7.5em;" class="title">Enter Webinar Title Here</h1>
        <h3 style="top: 83%" class="desc">Description Here</h3>
         
        <div class="details-sns">
        <p class="name">Speaker Name</p>
        <p class="role">Speaker Role</p>
        <p class="date">Date</p>
        <p style="line-height: 100%; width: 80%;" class="time">Time</p>
        </div>
        
        <p class="footer"><b>Register Now:</b> jobs.go-smac.com</p>
        <!-- <img class="mobile-poster" src="./images/mobile-bg.png"> -->
        <img class="sns-poster" src="./images/sns1.png">
        <!-- <img class="mobile-poster" src=""> -->
        </div>

        <!-- generate the poster -->
        <!-- get user input -->
        <div class="poster-info">
            <div class="input-text">
                <p>Upload Image:</p>
                <input type="file" id="image_input" accept="image/png, image/jpg">
                <p>Upload Background Image:</p>
                <input type="file" id="bg_input" accept="image/png, image/jpg">
                
                <p>Webinar Title:</p>
                <textarea data-id="title"></textarea>
                <p>Short Description:</p>
                <textarea data-id="desc"></textarea>
                <p>Speaker Name:</p>
                <textarea data-id="name"></textarea>
                <p>Speaker Role:</p>
                <textarea data-id="role"></textarea>
                <p>Date:</p>
                <textarea data-id="date"></textarea>
                <p>Time:</p> 
                <textarea data-id="time"></textarea>
            </div>
            <div class="buttons">
            <button type="button" title="Preview poster" onclick="create()">Create</button>
            <a id="download" download="poster.jpg">
            <button type="button" title="Download poster" onclick="download()">Download</button>
            </a></div>
        </div>
        <!-- render the poster -->
        <div id="render">
            <!-- <h1>Click 'Create' to Preview Poster</h1> -->
        </div>
    </section>


    <!-- JS Library -->
    <script src="./assets/poster/html2canvas.js"></script>
    <!-- JS Script -->
    <script src="./assets/poster/script.js"></script>
    <!-- JS Script: Background Changer -->
    <script  src="./assets/poster/bg-script.js"></script>
</body>
</html>