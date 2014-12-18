<div class="header">
<table>
<tr>
<td>
<a href="./Home" class="logo">
<span class="imgholder"><img src="img/logo.png" alt="Fade-Olu Logo" /></span><label>Fade-Olu Events</label><i>event management at its best !</i></a>
</td>
<td>
<img src='img/phone.png' />
<ul>
<li>Call us now </li>
<li>+234 810 225 9188</li>
<li>+234 803 546 4419</li>
<li>+234 803 740 3171</li>
</ul>
</td>
</tr>
</table>
</div>
<!DOCTYPE HTML>
<html manifest="cache.manifest">
<head>
    <title><?php echo $title ; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="Keywords" content="<?php echo $keywords ; ?>" />
    <meta name="Description" content="<?php echo $description ; ?>" />

    <link rel="icon" href="img/logo.png" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!-- the nicescroll script -->
    <script type="text/javascript" src="plugins/nicescroll/nicescroll.min.js"></script>
    <script type="text/javascript" src="plugins/nicescroll/nicescroll.plus.js"></script>

    <!-- Simple Audio Files -->
    <link rel="stylesheet" href="plugins/SimpleAudio/dependencies/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="plugins/SimpleAudio/simple-html5-music-player.css">
    <script src="plugins/SimpleAudio/simple-html5-music-player.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>

</head>
<body>
<div class="container">
    <div class='hide'>
        <?php
        $PAGES = array('home','services','about','gallery','contact');
        include('inc/fn.php');
        ?>
    </div>


