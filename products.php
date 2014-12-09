<?php 
ob_start(); 
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Fade-Olu Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'We are a full-service event management company and provide the following services: etiquette advice, event scheduling, vendor confirmation, rehearsal attendance, supervision of event, ceremony and reception setup and budget planning.' ;
?>

<?php include('inc/header.php');?>

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
<li><a href="Javascript:void();">etiquette advice</a></li>
<li><a href="Javascript:void();">event scheduling</a></li>
<li><a href="Javascript:void();">vendor confirmation</a></li>
<li><a href="Javascript:void();">rehearsal attendance</a></li>
</ul>

<ul>
<li><a href="Javascript:void();">supervision of event</a></li>
<li><a href="Javascript:void();">ceremony & reception setup</a></li> 
<li><a href="Javascript:void();">budget planning</a></li>
</ul>
<div class="clear"></div>
</div>

<p class="link">
<a href="#">click here to view the products and tools used within our operation for the best possible results</a></p>

<div class="bottom">

<fieldset>
<span>
<h4>Party Pack</h4>
<img src="img/hampers.jpg" alt="Product" />
</span>
<label>
 The Party Pack is a complete kit for any party. It includes decorations, lighting effects guide, cutlery, plates, napkins, cups, punch mix (or recipe), snack supplies (or recipe), tablecloths, theme music (where applicable), invitations, thank-you cards, and a step-by-step guide to planning, putting together and hosting the event.
</label>
<div class="clear"></div>
</fieldset>

<fieldset>
<span>
<h4>Step-by-Step Guides</h4>
<img src="img/guide.jpg" alt="Product" />
</span>
<label>
This booklet is used to map out the event, a step-by-step guide on what is needed for and how to put together a successful, worry-free event, resource information, popular refreshments, games, and tips to put their event in the record books. The events available include birthdays for all ages, meetings, retreats, parties, vacations, and special occasion celebrations such as graduations, showers, weddings, and receptions.
</label>
<div class="clear"></div>
</fieldset>

<fieldset>
<span>
<h4>Event Planning Software</h4>
<img src="img/software.png" alt="Product" />
</span>
<label>
Due to be released June 2014, this cutting-edge tool will allow the client all the resources and visual aids for their event planning. They will be able to play with decoration themes, listen to theme music, design invitations, thank-you cards, and RSVP cards, use the interactive planning calendar, and much more. This software will bring their event into reality with cutting edge technology that is designed to save time and money.
</label>
<div class="clear"></div>
</fieldset>

<fieldset>
<span>
<h4>Resources Manual</h4>
<img src="img/manual.jpg" alt="Product" />
</span>
<label>
This valuable guide acts as a review for all the resources located in the surrounding area. A ranking is given to the various services, such as caterers, decorators, disc jockeys, bands, facilities, etc. This manual gives the client the freedom of making a choice based on experience.
</label>
<div class="clear"></div>
</fieldset>
</div>

<div class="top">
<p><strong><u>Free Event Planners Training for High School and College Students</u>&nbsp;  <img src="img/school.png" /></strong><br> it is our mission to support our community. Ten hours each month will be devoted to training students in event planning. This will aid them in planning graduation parties, birthdays, and other important events. It will not be cut back as the business grows. </p>

<ul class='wide'>
<li><a href="Javascript:void();">Meetings, Trainings, and Retreats</a></li>
<li><a href="Javascript:void();">Conferences and Workshops</a></li>
<li><a href="Javascript:void();">Birthdays, Anniversaries and Graduations</a></li>
<li><a href="Javascript:void();">Weddings, Receptions, and Showers</a></li>
<li><a href="Javascript:void();">Company picnics, banquets, award ceremonies and end of year party</a></li>
</ul>
<div class="clear"></div>

<p>…..and any other event that needs to be planned.</p>
</div>

</div>
</section><!-- End of Section -->


</div><!-- End of main  wrapper  -->

<?php include('inc/footer.php') ; ?>

</div>
</body>
</html>
<?php ob_flush(); flush() ; ?>