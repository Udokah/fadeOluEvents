<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Fade-Olu Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'We are a full-service event management company and provide the following services: etiquette advice, event scheduling, vendor confirmation, rehearsal attendance, supervision of event, ceremony and reception setup and budget planning.' ;
?>

    <script>
        $(document).ready(function() {

            $('.bottom').hide();
            $('.services .bottom fieldset label').hide();

            $('.link a').click(function(e){
                e.preventDefault();
                $('.bottom').slideToggle('slow',function(){
                    if($(this).is(':hidden')){
                        $('.services .bottom fieldset label').hide();
                    }
                    else{
                        $('.services .bottom fieldset label').show('slide');
                    }
                });
            });

        });
    </script>

<style type="text/css">
    .aservice{
        display: inline-block;
        width: 40%;
        float: left;
        background:#FFF;
        border-bottom:3px solid #BBB;
        padding:0px;
        margin:15px;
        overflow:hidden;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    }

    .aservice span{
        display: block;
        width: 100%;
        height: 70px;
        line-height: 70px;
        background-color: #f2f2f2;
        padding: 0 1em;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
        z-index: 5;
        text-transform: uppercase;
        text-align: center;
    }

    .aservice img{
        width: 100%;
        max-height: 300px;
    }

</style>
<?php include('inc/header.php');?>

<div class="wrapper">
<div class="navigation">
<?php $nav = Generate_Navigation($page) ; echo $nav ; ?>
<?php include('inc/social.php') ; ?>
</div>

<div class="Main">

<section>
    <?php include('inc/top-nav.php') ?>
<h1><?php echo $page ; ?></h1>

<div class="services">

    <div class="aservice">
        <span>soft drinks</span>
        <img src="img/gallery/drinks.jpg" />
    </div>

    <div class="aservice">
        <span>ice block</span>
        <img src="img/gallery/iceblock.jpg" />
    </div>

    <div class="aservice">
        <span>lodging</span>
        <img src="img/gallery/IMG_9305.JPG" />
    </div>

    <div class="aservice">
        <span>mini bar</span>
        <img src="img/gallery/IMG_9309.JPG" />
    </div>

    <div class="aservice">
        <span>events</span>
        <img src="img/gallery/IMG_9325.JPG" />
    </div>

    <div class="aservice">
        <span>table water</span>
        <img src="img/gallery/IMG_9222.JPG" />
    </div>



    <div class="clear"></div>

</div>

</div>
</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>