<?php 
ob_start(); 
$page = 'home' ;
$title = 'Fade-Olu Events Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Fade-Olu is a full service company that provides complete consulting services for weddings, anniversaries, birthday parties, company end of year parties and hampers packaging for companies.' ;
?>

<?php include('inc/header.php');?>

    <script>
        $(document).ready(function(){
            $(".Slideshow > div:gt(0)").hide();
            setInterval(function() {
                $('.Slideshow > div:first')
                    .fadeOut(300)
                    .next()
                    .fadeIn(300)
                    .end()
                    .appendTo('.Slideshow');
            },  1500);
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
<div class="Slideshow">

<?php
    $dir = 'img/slides/';
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if (!is_dir($file)) {
                ?>
                <div><img src="<?php echo $dir.$file ?>"  alt='slide'  /></div>
            <?php
            }
        }
        closedir($handle);
    }
?>
</div>


    <div class="quicklinks">
        <strong>Quick Links</strong>
        <ul>
            <?php
            foreach($PAGES as $link){
                if($link == $page){ $class = 'current' ; } else{ $class = '' ;}
                echo "<li><a href='./".ucfirst($link)."' class='$class'><span></span> <label>$link</label></a></li>" ;
            }
            ?>
        </ul>

        <strong>Adverts Here</strong>

        <img style="width: 260px" src="img/fadeads.jpg">

    </div>

    <div class="clear"></div>

<div class="boxHolder">
<div class="box">
<h2>Who we are.....</h2>
<p>Fade-Olu Event business designed to meet the needs of the ever changing social world.  Base in Ondo state<a href="./About">...continue</a></p>
</div>

<div class="box">
<h2>What we do.....</h2>
<p>We are a full service company that provides complete consulting services for weddings, anniversaries, company end of year parties and hampers packaging for companies <a href="./Services">...continue</a></p>
</div>
</div><!-- end of box holder -->
</div>

</section><!-- End of Section -->

<div class="clear"></div>


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>