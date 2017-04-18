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
                $.post('showQuestionAnswer', {
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
        margin-top: 30px;
    }
    .blankRow{
        height: 150px;
        width:100%;
        /*background-color: brown;*/
        margin: 0px;
    }

    .choice {
        margin: 0 40px;
    }
    .button{
        margin: 40px 450px;
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

        <input type="hidden" id="question_id" name="question_id" value="<?php echo $id;?>">
        <input type="hidden" id="region" name="region" value="<?php echo $region;?>">
        <input type="hidden" id="score" name="score"  value="<?php echo $score;?>">
        <input type="hidden" id="count" name="count" value="<?php echo $count;?>">
        <input type="hidden" id="status" name="status" value="<?php echo $status;?>">
        <!--The no. and questions here-->
        <div class="form-group">
            <label class="col-lg-2 control-label input-lg" id="no"><h2>1.</h2></label>
            <label class="col-lg-7 control-label input-lg" name="question"><h2><?php echo $question;?>
                </h2></label>
        </div>
        <div class="blankRow"></div>
        <div class="form-group">
            <!--<div class="col-lg-offset-1 col-lg-10 input-lg" style="background-color: orange;">-->
            <div>
                <label class="checkbox-inline choice">
                    <!--<img src="../../image/1.jpg">-->
                    <input type="radio" name="options" id="option1" value="<?php echo $answer1;?>" checked><?php echo $answer1;?>
                </label>
                <label class="checkbox-inline choice">
                    <!--<img src="../../image/1.jpg">-->
                    <input type="radio" name="options" id="option2"
                           value="<?php echo $answer2; ?>"><?php echo $answer2; ?>
                </label>
                <label class="checkbox-inline choice">
                    <!--<img src="../../image/1.jpg">-->
                    <input type="radio" name="options" id="option3"
                           value="<?php echo $answer3; ?>"><?php echo $answer3; ?>
                </label>
                <label class="checkbox-inline choice">
                    <!--<img src="../../image/1.jpg">-->
                    <input type="radio" name="options" id="option4" value="<?php echo $answer4;?>"><?php echo $answer4;?>
                </label>
            </div>
            <!--</div>-->
        </div>
        <!--<div class="blankRow"></div>-->
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-10 input-lg">
                <button id="next_question" class="btn btn-info btn-lg input-lg col-lg-3 button">NEXT</button>
            </div>
        </div>

</div>
<div class="footer navbar-fixed-bottom"></div>

<script>
    function check(){

    }
</script>
</body>
</html>
