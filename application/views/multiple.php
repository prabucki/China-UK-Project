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
        margin-top: 30px;
    }
    .blankRow{
        height:60px;
        width:100%;
        /*background-color: brown;*/
        margin: 0px;
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
    <form class="form-horizontal" role="form">
        <!--The no. and questions here-->
        <div class="form-group">
            <label class="col-lg-2 control-label input-lg" id="no"><h2>1.</h2></label>
            <label class="col-lg-7 control-label input-lg" name="question"><h2>Which dynasty realized unification of China first in history?
                </h2></label>
        </div>
        <div class="blankRow"></div>
        <div class="form-group">
            <!--<div class="col-lg-offset-1 col-lg-10 input-lg" style="background-color: orange;">-->
            <div>
                <label class="checkbox-inline" style="background-color: #e38d13;">
                    <img src="../../image/1.jpg">
                    <input type="radio" name="options" id="option1" value="option1" checked>Qing Dynasty
                </label>
                <label class="checkbox-inline">
                    <img src="../../image/1.jpg">
                    <input type="radio" name="options" id="option2" value="option2" checked>Qin Dynasty
                </label>
                <label class="checkbox-inline">
                    <img src="../../image/1.jpg">
                    <input type="radio" name="options" id="option3" value="option3" checked>Shang Dynasty
                </label>
                <label class="checkbox-inline">
                    <img src="../../image/1.jpg">
                    <input type="radio" name="options" id="option4" value="option4">Ming Dynasty
                </label>
            </div>
            <!--</div>-->
        </div>
        <!--<div class="blankRow"></div>-->
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-10 input-lg">
                <button class="btn btn-info btn-lg input-lg col-lg-3 button" onclick="check()" formaction="POST">OK</button>
            </div>
        </div>
    </form>
</div>
<div class="footer navbar-fixed-bottom"></div>

<script>
    function check(){

    }
</script>
</body>
</html>
