<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script>
        $(function(){
            $("#false").click(function(){
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var answer = "FALSE";
                var mark = $("#status").val();
                $.post('showTFQuestionAnswer', {
                    questionId : questionId,
                    region : region,
                    answer : answer
                },function (response, status, xhr) {
                    if(response == 1){
                        score++;
                        //alert("Right!");
                    }else{
                        alert("Wrong! The right answer is " + response);
                    }
                    window.location.href="nextTFQuestions?region=" + region + "&score=" + score + "&count=" + count +"&status=" + mark;
                });
            });

            $("#true").click(function(){
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var answer = "TRUE";
                var mark = $("#status").val();
                $.post('showTFQuestionAnswer', {
                    questionId : questionId,
                    region : region,
                    answer : answer
                },function (response, status, xhr) {
                    if(response == 1){
                        score++;
                        //alert("Right!");
                    }else{
                        alert("Wrong! The right answer is " + response);
                    }
                    window.location.href="nextTFQuestions?region=" + region + "&score=" + score + "&count=" + count +"&status=" + mark;
                });
            });
        });
    </script>
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
    .questionDisplay {
        text-align: center;
        margin: 5% 20%;
        opacity: 0.9;
        /*filter:alpha(opacity=50);*/
        background: gainsboro;
        width: 60%;
        height: 80%;
        border-radius: 15px;
        /*padding-top: 40px;*/
        padding: 30px 0;
    }
    .blankRow{
        height: 150px;
        width:100%;
        /*background-color: brown;*/
        margin: 0px;
    }
    .button{
        margin: 15px 70px;
        /*background-color: #e38d13;*/
        font-size: 24px;
        line-height: 24px;
    }
</style>
<body>
<div class="header">
    <a href="http://121.42.57.140/China-UK-Project/index.php/Welcome/index">
        <img src="../../image/Logotype.png">
    </a>
</div>
<div class="questionDisplay">
        <input type="hidden" id="question_id" name="question_id" value="<?php echo $id;?>">
        <input type="hidden" id="region" name="region" value="<?php echo $region;?>">
        <input type="hidden" id="score" name="score"  value="<?php echo $score;?>">
        <input type="hidden" id="count" name="count" value="<?php echo $count;?>">
        <input type="hidden" id="status" name="status" value="<?php echo $status;?>">
        <!--The no. and questions here-->
        <div class="form-group">
            <label class="col-lg-3 control-label input-lg" id="no"><h2><?php echo $count;?>.</h2></label>
            <label class="col-lg-6 control-label input-lg" name="question"><h2><?php echo $question; ?></h2></label>
        </div>
        <div class="blankRow"></div>
        <div class="form-group">
            <div class="col-lg-offset-2 input-lg">
                <button id="false" class="btn btn-info btn-lg input-lg col-lg-2 button">False</button>
                <button id="true" class="btn btn-info btn-lg input-lg col-lg-2 button">True</button>
            </div>
        </div>
</div>
<!--<div class="footer navbar-fixed-bottom"></div>-->
</body>
</html>