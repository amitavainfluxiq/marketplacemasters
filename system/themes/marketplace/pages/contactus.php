<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 9/20/16
 * Time: 5:45 PM
 */
?>

<div class="container-fluid conference_banner">

    <div class="conference_banner_img">

        <?php
        $contactbannerimg=' <img src="system/themes/marketplace/images/contacttopbanner.jpg">';
        echo $AI->get_defaulted_dynamic_area('contactbannerimg',$contactbannerimg);
        ?>




    </div>
    <div class="clearfix"></div>


    <div class="conference_banner_bgblock1"></div>


    <div class="clearfix"></div>



    <div class="conference_banner_text">
        <div class="bannertextblock3">
            <h6>

                <?php
                $contactbannerh6text='MarketPlace Master Dealership Series';
                echo $AI->get_defaulted_dynamic_area('contactbannerh6text',$contactbannerh6text);
                ?>
            </h6>

            <div class="mediaroombannerimg2"> <?php
                $contactbannerimg2=' <img src="system/themes/marketplace/images/mediaroom_bannerimg2.png">';
                echo $AI->get_defaulted_dynamic_area('contactbannerimg2',$contactbannerimg2);
                ?>
            </div>

            <div class="bannertextblock4">

                <h1>
                    <?php
                    $contactbannertext3='
                <span>September 7th</span>
                8th and 9th';
                    echo $AI->get_defaulted_dynamic_area('contactbannertext3',$contactbannertext3);
                    ?>
                </h1>



            </div>

        </div>



        <div class="clearfix"></div>
    </div>

</div>



<div class="container-fluid mediaroom_block2">

    <h2> <?php
        $contactbannerh6textblock2h2='Contact Us ';
        echo $AI->get_defaulted_dynamic_area('contactbannerh6textblock2h2',$contactbannerh6textblock2h2);
        ?></h2>
    <h3><?php
        $contactblock2h3='Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
        echo $AI->get_defaulted_dynamic_area('contactblock2h3',$contactblock2h3);
        ?></h3>

</div>


<div class="container-fluid contactformwrapper">

    <div class="contactform_div1"><h2>CONTACT US</h2></div>

    <div class="contactform_div2">
       <h4>MarketPlace Master   </h4>

        <span>Email:  <a href="mailto:ipsum @Text.com">ipsum @Text.com</a>  </span>   <span> Tel:  <a href="tel:(000) 000-0000">(000) 000-0000 </a></span>   <span> Fax:     (000) 000-0000</span>

    </div>


    <div class="contactform_div3">

        <div class="form-groupd3">
            <label>Your Name</label>
            <input class="form-control" type="text">
            <div class="clearfix"></div>
        </div>


        <div class="form-groupd3">
            <label>Phone</label>
            <input class="form-control" type="text">
            <div class="clearfix"></div>
        </div>

        <div class="form-groupd3">
            <label>Email</label>
            <input class="form-control" type="text">
            <div class="clearfix"></div>
        </div>

        <div class="form-groupd3">
            <label>Subject</label>
            <input class="form-control" type="text">
            <div class="clearfix"></div>
        </div>

        <div class="form-groupd3">
           <textarea class="formcontroltextarea" placeholder="Message"></textarea>
            <div class="clearfix"></div>
        </div>

        <input class="delsubmit3" type="submit" value="Submit">



        </div>



    </div>