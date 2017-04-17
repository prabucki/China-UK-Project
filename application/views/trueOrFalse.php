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
        <!--The no. and questions here-->
        <div class="form-group">
            <label class="col-lg-2 control-label input-lg" id="no"><h2>1.</h2></label>
            <label class="col-lg-7 control-label input-lg" name="question"><h2>The readition of giving red envelopes to
                    junior people during Spring Festival is for protection against evil originally.</h2></label>
        </div>
        <div class="blankRow"></div>
        <div class="form-group">
            <div class="col-lg-offset-3 col-lg-10 input-lg">
                <button class="btn btn-info btn-lg input-lg col-lg-2 button" onclick="falseClick()" formaction="POST">False</button>
                <button class="btn btn-info btn-lg input-lg col-lg-2 button" onclick="trueClick()" formaction="POST">True</button>
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