<?php

include_once('config.php');
$BASEDIR = getBaseDir(getcwd(),constant('CONTEXT')); // todo does this work in production??

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="eMII eMarine Information Infrastructure">
    <link rel="icon" href="<?php echo $BASEDIR ?>img/IMOSfavicon.ico">
    <title><?php echo $title;
        echo " IMOS-OceanCurrent" ?></title>
    <link href="<?php echo $BASEDIR ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $BASEDIR ?>css/oceancurrent.css" rel="stylesheet">
    <!--<link href="css/parallax.css" rel="stylesheet"-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <a href="http://www.imos.org.au/">
                <img id="IMOSLogo" class="floatRight"
                     src="http://static.emii.org.au/images/logo/IMOS-Ocean-Portal-logo.png"
                     title="IMOS (Australian Integrated Marine Observing System">
            </a>
            <header>
                <a class="homelink" href="<?php echo $BASEDIR ?>index.php" alt="IMOS Ocean Current home page"
                   title="IMOS Ocean Current home page">
                    <h1>IMOS OceanCurrent</h1>

                    <h2><span></span>Surface Currents and Temperature</h2>
                </a>
                <h3 class="greyHeader">&#8220; Up to date ocean information around Australia. &#8221;</h3>
            </header>
            <p><a class="btn btn-primary" href="<?php echo $BASEDIR ?>news.php" role="button">Latest News &raquo;</a></p>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <ul class="nav navbar-nav">
                            <li><a class="navbar-active" href="http://imos.org.au" alt="IMOS home page">IMOS</a></li>
                            <li><a class="navbar-active" href="http://portal.imos.org.au" alt="IMOS ocean portal">
                                    IMOS Ocean Portal</a></li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="navbar-brand" href="<?php echo $BASEDIR ?>index.php" alt="home page">Home</a>
                            </li>
                            <li><a class="navbar-brand" href="<?php echo $BASEDIR ?>news.php" alt="news items">News</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information<span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo $BASEDIR ?>whatsshown.php" alt="Whats shown">What's
                                            Shown</a></li>
                                    <li><a href="<?php echo $BASEDIR ?>profiles/whatsshown.php" alt="Whats shown">What's
                                            Shown - Profiles</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $BASEDIR ?>acknowl.php"
                                           alt="Acknowledgements">Acknowledgements</a></li>
                                    <li><a href="<?php echo $BASEDIR ?>glossary.php" alt="Glossary">Glossary</a></li>
                                    <li><a href="<?php echo $BASEDIR ?>misc/references.php" alt="References">References</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><?php //.navbar-collapse ?>
                </div><?php //.container-fluid ?>
            </nav>
        </div>
    </div>
    <div class="whiteWrapper">
        <div class="container">