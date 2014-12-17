<?php
ob_start();
$page = basename($_SERVER['SCRIPT_NAME'], ".php");
$title = ucfirst($page).' - Fade-Olu Event Management Company' ;
$keywords = 'event , management , bouquet , event management , events , weddings, anniversaries, hampers , hair fascinators , cakes , catering , food catering , birthday parties ' ;
$description = 'We are a full-service event management company and provide the following services: etiquette advice, event scheduling, vendor confirmation, rehearsal attendance, supervision of event, ceremony and reception setup and budget planning.' ;
?>


        <?php include('inc/header.php');?>

    <style type="text/css">

        form{
            float: left;
            width: 60%;
        }

        form label{
            display: block;
            clear: right;
            margin-top: 10px;
            text-transform: capitalize;
            color: #555555 !important;
            font-size: 16px;
        }

        form label input[type=text],
        form label textarea{
            display: block;
            width: 100%;
            padding:3px;
            font-size: 16px;
            margin-top: 2px;
            padding: 8px;
            font-family: 'PT Sans Narrow', Calibri, 'Myriad Pro', Tahoma, Arial;
            resize: none;
            color: #555555;
            border:1px solid #333;
        }

        form input[type=submit]{
            margin: 5px auto;
            display: block;
            width: 103%;
            padding: 10px;
            font-size: 17px;
            text-transform: capitalize;
            border:none;
            background-color: #f6a828;
        }

        form input[type=submit]:active{
            background-color: #fbd850#;
        }

        form label textarea{
            height: 100px;
        }

        form label input[type=text]:focus,
        form label textarea:focus{
            border:1px solid #DDB600;
        }


        .address{
            float: right;
            display: inline-block;
            width: 30%;
            margin-top: 10px;
        }

        .address p{
            color: #333 !important;
        }

        .address strong{
            display: block;
            text-transform: capitalize;
            margin-top: 10px;
        }


    </style>


        <div class="wrapper">
            <div class="navigation">
                <?php $nav = Generate_Navigation($page) ; echo $nav ; ?>
                <?php include('inc/social.php') ; ?>
            </div>

            <div class="Main">

                <section>
                    <?php include('inc/top-nav.php') ?>
                    <h1>Booking <?php echo $page ; ?></h1>

                    <div class="contact">

                        <form method="post" class="contactForm" action="ajax/contact.php">
                         <label>name
                             <input type="text" data-alert="enter your name" name="name" class="req" placeholder="Your name" />
                         </label>

                            <label>email
                                <input type="text" data-alert="enter a valid email" name="email" class="req" placeholder="Your email" />
                            </label>

                            <label>message
                               <textarea class="req" data-alert="enter your message" name="message" placeholder="your message"></textarea>
                            </label>

                            <input type="submit" value="send" />

                        </form>

                        <div class="address">

                            <ul>
                                <li><strong>Phone</strong></li>
                                <li>+234 0810 225 9188</li>
                                <li>+234 0803 546 4419</li>
                                <li>+234 0803 740 3171</li>
                            </ul>

                            <p><strong>email</strong> fadeoluevents@gmail.com</p>

                            <p><strong>Address</strong>
                            275 CANON ADEYEMI ROAD
                            OKA AREA ONDO TOWN</p>

                        </div>




                    </div>

            </div>
            </section><!-- End of Section -->


        </div><!-- End of main  wrapper  -->

        <script>
            $(document).ready(function(){

                /* Contact Form */
                $(".contactForm").on('submit', function(e){
                    e.preventDefault();
                    var $this = $(this) ;

                    $this.find('.req').each(function(){
                        if( $.trim($(this).val().length) < 3 ){
                            alert( $(this).attr('data-alert') );
                            $(this).focus();
                            exit();
                        }
                    });

                    /* Post to server */
                    $.ajax({
                        url: $this.attr('action') ,
                        data: $this.serialize() ,
                        type: 'post',
                        success: function(returnedData){
                            //var json = $.parseJSON(data);
                            alert(returnedData) ;
                        }
                    });

                });

            });
        </script>


        <?php include('inc/footer.php') ; ?>

    </div>
    </body>
    </html>
<?php ob_flush(); flush() ; ?>