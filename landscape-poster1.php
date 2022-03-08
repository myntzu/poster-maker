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
    
    <title>Business: Landscape Poster</title>
    <link rel="stylesheet" media="screen" href="./assets/css/poster.css">
    <link rel="stylesheet" href="./assets/css/bg-style.css">

</head>
<body>
    <section>
        <h3>goSMAC Landscape Poster Maker</h3>
        <div style="width: 38%;" class="options">
        <button onclick="window.location.href='poster-maker';">
                Back to Main 
            </button>
            <button onclick="window.location.href='mobile-poster1';">
                Mobile Poster
            </button>
            <button onclick="window.location.href='sns-poster1';">
                SNS Poster
        </button>
        </div>
 
        <div class="landscape" id="capture">
            <div class="landscape-content">
            <!-- <p class="heading2">Industry Career Coaching Session</p> -->
            <img class="logo2" src="./images/logo.jpg">
            <!-- <div style="height: 300px; width: 300px; top:5em; left: 5em;" id="show_img"></div>  -->
            <!-- <div style="top: 0%;
                        border-radius: 0%; 
                        height: 596px; 
                        width: 400px;
                        border: 0px;
                        left: 0%;" 
                        id="show_img"></div>  -->
            <h1 class="title"
            style="
            left: 2em;
            right: 2em;
            width: 80%;
            text-align: center;"
            >Enter Webinar Title Here</h1>
            <h3 class="desc">Description Here</h3>
            
            <div class="details-landscape">
            
            <!-- <p style="margin-bottom: 30px;" class="name">Speaker Name</p> -->
            
            <!-- <p class="role">Speaker Role</p> -->
            </div>
            <!-- <div class="new-section"> -->
            <div class="date-info">
            <p class="date">Date</p>
            <p class="time">Time</p> 
            <p style="visibility: hidden;" class="name">Speaker Name</p>
            <p style="visibility: hidden;"class="role">Speaker Role</p>
            </div>

            <!-- <p class="footer"><b>Register Now:</b> jobs.go-smac.com</p> -->
            <!-- <img class="landscape-poster" src="./images/landscape-bg.png"> -->
            <!-- <img class="landscape-poster" src="./images/landscape1.png"> -->
            <!-- <div id="show_bg"></div> -->
            <!-- <div style="background-size: cover; width: 1278px; height: 596px;" id="show_bg"></div> -->
            <img class="landscape-poster" src="./images/landscape1.png" id="main">
                <div class="landscape-content" id="thumbnails">
                <img src="./images/landscape-bg.png">
                <img src="./images/landscape1.png">
                <!-- <img src="./images/landscape2.png"> -->
                <img src="./images/landscape3.png">
                <img src="./images/L5.png">
                <img src="./images/L6.png">
                <img src="./images/L7.png">
                <img src="./images/L8.png">
                <img src="./images/L9.png">
                <img src="./images/L10.png">
                <img src="./images/L11.png">
        </div>
            <!-- <img class="mobile-poster" src=""> -->
            </div>
            </div>

        <!-- generate the poster -->
        <!-- get user input -->
        <div class="poster-info">
            <div class="input-text">     
                <p>Upload Background Image:</p>
                <!-- <input type="file" id="bg_input" accept="image/png, image/jpg"> -->
                
                <p>Webinar Title:</p>
                <textarea data-id="title"></textarea>
                <p>Short Description:</p>
                <textarea data-id="desc"></textarea>
                <p>Date:</p>
                <textarea data-id="date"></textarea>
                <p>Time:</p> 
                <textarea data-id="time"></textarea>
            
                
            </div>
            <div class="buttons">
            <button type="button" title="Save poster" onclick="storeValues()">Save</button>
            <button class="btn1" type="button" onclick="create()">Create</button>
            <a id="download" download="poster.jpg">
            <button class="btn2" type="button" onclick="download()">Download</button>
            </a></div>

        </div>
        <!-- render the poster -->
        <div id="render">
            <!-- <h1>Click 'Create' to Preview Poster</h1> -->
        </div>
        <div style="visibility: hidden;">
                <p>Upload Image:</p>
                <input type="file" id="image_input" accept="image/png, image/jpg">   
                
                <p>Speaker Name:</p>
                <textarea data-id="name"></textarea>
                <p>Speaker Role:</p>
                <textarea data-id="role"></textarea>
        </div>
    </section>

    <!-- JS Library -->
    <script src="./assets/poster/html2canvas.js"></script>
    <!-- JS Script -->
    <script src="./assets/poster/script.js?v=2"></script>
    <!-- JS Script: Background Changer -->
    <script  src="./assets/poster/bg-script.js"></script>
</body>
</html>