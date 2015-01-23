<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="lmoofav.png">

    <title>Linda's Cohort Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <!-- Lindas stylesheet from LESS file -->
    <link href="css/mystyle.css" rel="stylesheet">
</head>

<!-- ================================================== -->
<body>

<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Linda's Cohort Page</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Lindaspage.html">Home</a></li>
                        <li><a href="resume.html">Resume</a></li>
                        <li><a href="aform.php">A Form</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">COHORT INFO <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                                <li><a href="http://geekwiseacademy.com/">GEEKWISE</a></li>
                                <li><a href="http://geekwiseacademy.com/cohort">COHORT</a></li>
                                <li><a href="http://bitwiseindustries.com/">BITWISE</a></li>
                                <!-- Possible future project nav
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>



<!-- ================================================== -->

<div class="container marketing">

    <div id=myform>
        <h2 style="text-align:center">My Form</h2>
        <form name="myForm" action="processmyform.php" method="post">
            <p><fieldset></p>
            <p><legend><em><strong What is your name?</strong></em></legend></p>
            <p>First Name: <input type="text" name="fNane" /></p>
            <p>Last Name: <input type="text" name="lName" /></p>
            </fieldset>

            <p><fieldset></p>
            <p><legend><em><strong  What is your interest?</strong></em></legend></p>
            <p><label><input type="radio" name="interest" value="1" id="VAGRANT"> VAGRANT</label></p>
            <p><label><input type="radio" name="interest" value="2" id="PHP"> PHP</label>
              <label><input type="radio" name="interest" value="3" id=" MySQL">MySQL</label></p>
            <p><label><input type="radio" name="interest" value="4" id="VIRTUAL BOX">VIRTUAL BOX</label></p>
            <p><label><input type="radio" name="interest" value="5" id="APACHE">Apache</label>
            <p></fieldset></p>
            <p>
                <input type="submit" name="submit" id="submit" value="Submit Form">
            </p>
    </div>
    <?php
	include('inc_myheader.php');
   ?>

</div>


<!-- FOOTER -->
<footer>

    <p>&copy; 2015 LindaMoo Designs, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>