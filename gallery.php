<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Fade-Olu  Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Fade-Olu  Gallery of event designs , cakes and hair fascinators.' ;
?>

<?php include('inc/header.php');?>

    <!-- Lightbox Plugin file -->
    <script type="text/javascript" src="plugins/lightbox/jquery.lightbox-0.5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="plugins/lightbox/jquery.lightbox-0.5.css" media="screen" />

    <script>
        $(function() {
            $('#gallery ul').load('ajax/loadimage.php', function(){
                $('#gallery a').lightBox();
            });
        });

    </script>

<div class="wrapper">
<div class="navigation">
<?php $nav = Generate_Navigation($page) ; echo $nav ; ?>
<?php include('inc/social.php') ; ?>
</div>

<div class="Main">

<section>
    <?php include('inc/top-nav.php') ?>
<h1><?php echo $page ; ?></h1>

<div id="gallery">
<ul style="text-align:center;">
<img src="img/lightbox-ico-loading.gif" />
</ul>
</div>

</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>