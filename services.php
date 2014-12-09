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
<div class="top">
<p>We are a full-service event management company and provide the following services:</p>
<ul>
<li><a href="Javascript:void();">Soft Drinks</a></li>
<li><a href="Javascript:void();">Ice block</a></li>
<li><a href="Javascript:void();">Table Water</a></li>
</ul>

<ul>
<li><a href="Javascript:void();">Lodging</a></li>
<li><a href="Javascript:void();">Mini Bar</a></li>
<li><a href="Javascript:void();">Events</a></li>
</ul>
<div class="clear"></div>
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