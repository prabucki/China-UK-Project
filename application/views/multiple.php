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
            $("#next_question").click(function(){
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var status = $("#status").val();
                var answer = $("input[name='options']:checked").val();
                $.post('showMulQuestionAnswer', {
                    questionId : questionId,
                    region : region,
                    answer : answer
                },function (response, status, xhr) {
                    if(response == 1){
                        score++;
                        alert("Right!");
                    }else{
                        alert("Wrong! The right answer is " + response);
                    }
                    window.location.href="nextMulQuestions?region=" + region + "&score=" + score + "&count=" + count +"&status=" + status;
                });

            });
        });
    </script>
</head>
<style>
    body {
        background-image: url("../../image/map.jpg");
        background-size: 100%;
        z-index: -1;
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
        margin: 10% 20%;
        opacity: 0.9;
        /*filter:alpha(opacity=50);*/
        background: gainsboro;
        width: 60%;
        height: 60%;
        border-radius: 15px;
        /*padding-top: 40px;*/
        padding-top: 5%;
        padding-left: 0px;
        padding-right: 0px;
    }

    .blankRow {
        height: 150px;
        width: 100%;
        /*background-color: brown;*/
        margin: 0px;
    }

    .choice {
        margin: 0 50px;
        font-size: 24px;
    }

    .radio {
        width: 24px;
        height: 24px;
        display: inline-block;
        line-height: 24px;
    }

    .button {
        margin: 40px 150px;
        /*background-color: #e38d13;*/
        font-size: 24px;
        line-height: 24px;
    }
</style>
<body>
<!--<div class="header">-->
<!--    <h1>Know Culture</h1>-->
<!--</div>-->
<div class="questionDisplay">

    <input type="hidden" id="question_id" name="question_id" value="<?php echo $id;?>">
    <input type="hidden" id="region" name="region" value="<?php echo $region;?>">
    <input type="hidden" id="score" name="score"  value="<?php echo $score;?>">
    <input type="hidden" id="count" name="count" value="<?php echo $count;?>">
    <input type="hidden" id="status" name="status" value="<?php echo $status;?>">
    <!--The no. and questions here-->
    <div class="form-group">
        <label class="col-lg-2 control-label input-lg" id="no"><h2>1.</h2></label>
        <label class="col-lg-8 control-label input-lg" name="question"><h2><?php echo $question; ?>
            </h2></label>
    </div>
    <div class="blankRow"></div>
    <div class="form-group">
        <!--<div class="col-lg-offset-1 col-lg-10 input-lg" style="background-color: orange;">-->
        <div>
            <label class="radio-inline choice">
                <?php
                if($pic == 1) {
                    ?>
                    <img src="../../image/<?php echo $pic_info; ?>">
                    <?php
                }
                ?>
                <input class="radio" type="radio" name="options" id="option1" value="<?php echo $answer1; ?>"
                       checked><?php echo $answer1; ?>
            </label>
            <label class="radio-inline choice">
                <!--<img src="../../image/1.jpg">-->
                <input class="radio" type="radio" name="options" id="option2"
                       value="<?php echo $answer2; ?>"><?php echo $answer2; ?>
            </label>
            <label class="radio-inline choice">
                <!--<img src="../../image/1.jpg">-->
                <input class="radio" type="radio" name="options" id="option3"
                       value="<?php echo $answer3; ?>"><?php echo $answer3; ?>
            </label>
            <label class="radio-inline choice">
                <!--<img src="../../image/1.jpg">-->
                <input class="radio" type="radio" name="options" id="option4"
                       value="<?php echo $answer4; ?>"><?php echo $answer4; ?>
            </label>
        </div>
        <!--</div>-->
    </div>
    <!--<div class="blankRow"></div>-->
    <div class="form-group">
        <div class="col-lg-offset-1 input-lg">
            <button id="next_question" class="btn btn-info btn-lg input-lg col-lg-6 button">NEXT</button>
        </div>
    </div>

</div>
<!--<div class="footer navbar-fixed-bottom"></div>-->
</body>
</html>
