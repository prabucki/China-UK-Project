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
        $(function () {
            $("#next_question").click(function () {
                var questionId = $("#question_id").val();
                var region = $("#region").val();
                var score = $("#score").val();
                var count = $("#count").val();
                var mark = $("#status").val();
                var answer = $("input[name='options']:checked").val();
                $.post('showMulQuestionAnswer', {
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
                    window.location.href="nextMulQuestions?region=" + region + "&score=" + score + "&status=" + mark + "&count=" + count ;
                });

            });
        });
    </script>
</head>
<style>
    body{
        background: url(../../image/que_background.jpg) no-repeat center center;
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
        <label class="col-lg-2 control-label input-lg" id="no"><h2><?php echo $count;?>.</h2></label>
        <label class="col-lg-8 control-label input-lg" name="question"><h2><?php echo $question; ?>
            </h2></label>
    </div>
    <div class="blankRow"></div>
    <?php
    if($pic == 1) {
        ?>
        <img class="img" src="../../image/<?php echo $pic_info; ?>">
        <br>
        <?php
    }
    ?>
    <div class="form-group">
        <!--<div class="col-lg-offset-1 col-lg-10 input-lg" style="background-color: orange;">-->
        <div>
            <label class="radio-inline choice">
                <input class="radio" type="radio" name="options" id="option1" value="<?php echo $answer1; ?>"
                       checked><?php echo $answer1; ?>
            </label>
            <label class="radio-inline choice">
                <input class="radio" type="radio" name="options" id="option2"
                       value="<?php echo $answer2; ?>"><?php echo $answer2; ?>
            </label>
            <label class="radio-inline choice">
                <input class="radio" type="radio" name="options" id="option3"
                       value="<?php echo $answer3; ?>"><?php echo $answer3; ?>
            </label>
            <label class="radio-inline choice">
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
