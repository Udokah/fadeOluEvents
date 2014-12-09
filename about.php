<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Fade-Olu Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'Founded originally on a part-time basis, Fade-Olu is a small business designed to meet the needs of the ever changing social world. Alagomeji, Yaba is the current home with plans to expand to branch offices within four years. Fade-Olu;s staff of four, with numerous contract vendors, plans events, writes event-planning products, and trains students in the art of event planning' ;
?>
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
<div class="about-Us">


<div class="mission">
<h3>About us</h3>
<p>In an ever changing, fast-paced world, success is determined by good choices for lasting effects. Communication is essential. Fade-Olu Events strives to be the best choice of clients by helping to ease their event planning burden. Through consistent, predictable professionalism, we will ensure a worry and hassle-free event at a reasonable price.<br>
Keeping in tune with the needs of the market, utilizing the latest technology and trends, all while ensuring the client receives the individual attention they deserve, is the vision and daily mission of Fade-Olu.
</p>
</div>

<div class="keys">
<h4><label>keys to Success</label></h4>
<span>
<p>Our keys to success include the commitment to quality by every person who is part of the team. Each of us will be responsible to push ourselves to a higher level of professionalism in three areas:</p>
<ul>
<li><a href="Javascript:void();">Accurate and consistent fulfillment of the client’s wishes</a></li>
<li><a href="Javascript:void();">Competitive and affordable pricing for the quality of services offered</a></li>
<li><a href="Javascript:void();">Significant profit made on each event planned</a></li>
</ul>
</span>
</div>



</div>

</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>