<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<head>
    <meta charset="UTF-8">
    <title>KnowCulture</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$(function(){
			$("#gameOneChinese").click(function(){
				var score = 0;
				var region = "China";
				window.location.href="selectQuestions?score="+score+"&region="+region;
			});

			$("#gameOneUK").click(function(){
				var score = 0;
				var region = "UK";
				window.location.href="selectQuestions?score="+score+"&region="+region;
			});

			$("#gameOneMix").click(function(){
				var score = 0;
				//var region = "UK";
				//window.location.href="selectQuestions?score="+score+"&region="+region;
			});
		});
	</script>



</head>

<header>
    <div class="dropdown"
</header>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="row">
                    <div class="jumbotron" align="centre">
                            <h1>Know Culture</h1>
                            <p>The #1 site for English & Chinese culture quizes </p>
                    </div>
                </div>

                <div class="row">
                    <div class="jumbotron" align="centre">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Multiple Choice</h2>
                                Test your knowledge about culture choosing the correct answer from 4 options. Only one answer is correct!
                            </div>
                                <div class="col-md-6">
                                    <div class="container">
                                        <div class="buttons_div">
                                            <button id="gameOneChinese" class="buttonC" type="button"></button>
                                            <button id="gameOneUK" class="buttonU" type="button"></button>
                                            <button id="gameOneMix" class="buttonM" type="button"></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="jumbotron" align="centre">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>True or False</h2>
                                Verify whether the statements given about chosen culture are true or false.
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="buttons_div">
                                        <button class="buttonC" type="button"></button>
                                        <button class="buttonU" type="button"></button>
                                        <button class="buttonM" type="button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="jumbotron" align="centre">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Picture Questions</h2>
                                Test your photographic memory by matching the right picture to the right title.
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="buttons_div">
                                        <button class="buttonC" type="button"></button>
                                        <button class="buttonU" type="button"></button>
                                        <button class="buttonM" type="button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-md-2"></div>
    </div>

</body>
</html>