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
    
    <title>Business: SNS Poster</title>
    <link rel="stylesheet" href="./assets/css/bg-style.css">
    <link rel="stylesheet" media="screen" href="./assets/css/poster.css">

</head>
<body>
    <section>
        <h3>goSMAC SNS Poster Maker</h3>
        <div style="width: 38%;" class="options">
        <button onclick="window.location.href='poster-maker';">
                Back to Main
            </button>
            <button onclick="window.location.href='landscape-poster1';">
                Landscape Poster
            </button>
            <button onclick="window.location.href='mobile-poster1';">
                Mobile Poster
        </button>
        </div>
        <div class="sns" id="capture">
        <!-- <p class="heading">Industry Career Coaching Session</p> -->
        <img class="logo" src="./images/logo.jpg">
        <!-- <div style="top: 3.5em; left: 3em; right: 5em;" id="show_img"></div>  -->
        <h1 style="top: 3.5em; font-size: 38px;" class="title">Enter Webinar Title Here</h1>
        <h3 class="desc">Description Here</h3>
         
        <div class="details-sns" style="top: 73%; text-align: center; left: 6em;">
        <p class="date">Date</p>
        <p class="time">Time</p> 
        <p style="visibility: hidden;" class="name">Speaker Name</p>
        <p style="visibility: hidden;"class="role">Speaker Role</p>
        </div>
        <!-- <div class="sns" id="capture">
        <p class="heading">Industry Career Coaching Session</p>
        <img class="logo" src="./images/logo.jpg">
        <div style="top: 4.5em; left:13em; right:5em;" id="show_img"></div> 
        <h1 style="text-align: left; top: 4em; width: 55%; font-size: 32px; line-height: 140%;" class="title">Enter Webinar Title Here</h1>
        <h3 style="top: 65%; text-align: left; left: 3.5em; width: 45%;" class="desc">Description Here</h3>
         
        <div class="details-sns">
        <p class="name">Speaker Name</p>
        <p class="role">Speaker Role</p>
        <p class="date">Date</p>
        <p style="line-height: 100%; width: 80%;" class="time">Time</p>
        </div> -->
        
        <!-- <p class="footer"><b>Register Now:</b> jobs.go-smac.com</p> -->
        <!-- <img class="mobile-poster" src="./images/mobile-bg.png"> -->
        <!-- <img class="sns-poster" src="./images/sns1.png"> -->
        <img class="sns-poster" src="./images/sns1.png" id="main">
        <div class="sns-content" id="thumbnails">
        <img src="./images/sns-bg.png">
        <img src="./images/sns1.png">
        <!-- <img src="./images/sns2.png"> -->
        <img src="./images/sns3.png">
        <img src="./images/sns4.png">
        <img src="./images/sns5.png">
        <img src="./images/sns6.png">
        <img src="./images/sns7.png">
        <img src="./images/sns8.png">
        <img src="./images/sns9.png">
        <img src="./images/sns10.png">  
        </div>
        <!-- <img class="mobile-poster" src=""> -->
        </div>

        <!-- generate the poster -->
        <!-- get user input -->
        <div class="poster-info">
            <div class="input-text">    
                <p>Upload Background Image:</p>
                <input type="file" id="bg_input" accept="image/png, image/jpg">
                
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
                <textarea data-id="role"></textarea></div>
    </section>


    <!-- JS Library -->
    <script src="./assets/poster/html2canvas.js"></script>
    <!-- JS Script -->
    <script src="./assets/poster/script.js?v=3"></script>
    <!-- JS Script: Background Changer -->
    <script  src="./assets/poster/bg-script.js"></script>
</body>
</html>