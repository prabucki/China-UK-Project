<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="../../js/bootstrap.js"></script>
    <script>
        $(function(){
            $("#false").click(function(){
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var answer = "False";
                window.location.href = "nextQuestions?questionId=" + questionId + "&region=" + region + "&score=" + score + "&answer=" + answer + "&count=" + count;
            });

            $("#true").click(function(){
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var answer = "True";
                window.location.href = "nextQuestions?questionId=" + questionId + "&region=" + region + "&score=" + score + "&answer=" + answer + "&count=" + count;
            });
        });
    </script>
</head>
<style>
    .header {
        width: 100%;
        height: 120px;
        background-color: lightblue;
        margin: 0;
        padding-left: 10px;
    }
    h1 {
        font-size: 60px;
        margin: 0px;
        padding: 0px;
        line-height: 120px;
        color: white;
    }

    .questionDisplay {
        text-align: center;
        margin-top: 100px;
    }
    .blankRow{
        height:80px;
        width:100%;
        /*background-color: brown;*/
        margin: 0px;
    }
    .button{
        margin: 40px 60px;
        /*background-color: #e38d13;*/
    }
    .footer {
        width: 100%;
        height: 120px;
        background-color: lightblue;
        margin: 0;
    }
</style>
<body style="margin: 0">
<div class="header">
    <h1>Know Culture</h1>
</div>
<div class="questionDisplay">
    <form class="form-horizontal" role="form">
        <input type="hidden" id="question_id" name="question_id" value="<?php echo $id;?>">
        <input type="hidden" id="region" name="region" value="<?php echo $region;?>">
        <input type="hidden" id="score" name="score"  value="<?php echo $score;?>">
        <input type="hidden" id="count" name="count" value="<?php echo $count;?>">
        <!--The no. and questions here-->
        <div class="form-group">
            <label class="col-lg-2 control-label input-lg" id="no"><h2>1.</h2></label>
            <label class="col-lg-7 control-label input-lg" name="question"><h2><?php echo $question;?></h2></label>
        </div>
        <div class="blankRow"></div>
        <div class="form-group">
            <div class="col-lg-offset-3 col-lg-10 input-lg">
                <button id="false" class="btn btn-info btn-lg input-lg col-lg-2 button">False</button>
                <button id="true" class="btn btn-info btn-lg input-lg col-lg-2 button">True</button>
            </div>
        </div>
    </form>
</div>
<div class="footer navbar-fixed-bottom"></div>

<script>
    var answer = 0;
    function falseClick(){

    }
    function trueClick(){
        answer = 1;
    }
</script>
</body>
</html>