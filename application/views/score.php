<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="../../js/bootstrap.js"></script>
</head>
<style>
    body {
        background: url("../../image/Qbg.jpg") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .header {
        margin: 20px 20%;
    }
    .scoreDisplay {
        text-align: center;
        margin: 60px 300px;
        padding: 0;
        /*background-color: white;*/
        background-image: url("../../image/poster.gif");
        background-size: 90%;
        width: 800px;
        height: 680px;
        z-index: 20;
    }

    .blankRow {
        height: 380px;
        width: 100%;
        /*background-color: brown;*/
        margin: 0px;
        z-index: 50;
    }

    /*.button{*/
    /*margin: 80px 450px;*/
    /*!*background-color: #e38d13;*!*/
    /*}*/
</style>
<body>
<div class="header">
    <a href="http://121.42.57.140/China-UK-Project/index.php/Welcome/index">
        <img src="../../image/Logotype.png">
    </a>
</div>
<div class="scoreDisplay">
    <div class="blankRow"></div>
    <h2 class="col-lg-6">Your score:</h2>

    <div class="h1 col-lg-1" id="score" style="font-size: 80px; line-height: 40px"><?php echo $score;?></div>
    <!--<a href="answers.html">-->
    <!--<button class="btn btn-info btn-lg input-lg col-lg-4 button">See Correct Answers</button>-->
    <!--</a>-->
</div>

</body>
</html>