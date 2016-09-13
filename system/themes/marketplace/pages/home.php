<?php
/**
 * Created by PhpStorm.
 * User: Iftekar
 * Date: 9/8/2016
 * Time: 2:25 PM
 */
?>

<div class="container-fluid homebannerblock">
    <div class="imgbgright">

      <?php
        $bannerhtml='<img src="system/themes/marketplace/images/banner.jpg">';
        echo $AI->get_defaulted_dynamic_area('bannerhtml',$bannerhtml);
        ?>
    </div>
    <div class="bannercontentblock">

            <?php
            $bannerheadinghtml='<h3>MarketPlace Master Dealership Series</h3>';
            echo $AI->get_defaulted_dynamic_area('bannerheadinghtml',$bannerheadinghtml);
            ?>

        <?php

        $bannertextimage='<img src="system/themes/marketplace/images/bannertxt_expo.png">';
        echo $AI->get_defaulted_dynamic_area('bannertextimage',$bannertextimage);
        ?>
        <div class="bannercontent">
            <blockquote>
               <?php
               $bannertexthome1='<h3>Join Us In Dallas Texas I September 18, 19, 20</h3>
                <h4>Presale Tickets Available October 15th, 2016 </h4>
                 <p>Get On Top Of The Radically Changing Market Place. Put the POWER back in your Marketing Strategies.Digital Marketing Is Going LOCAL. Are You Ready? </p>';
                    echo $AI->get_defaulted_dynamic_area('bannertexthome1',$bannertexthome1);
                    ?>


            </blockquote>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="container-fluid hometextblock5">

    <div class=" hometextblock5-wrapper">

        <h2>
            <?php   $hometextblock5h2='Wayne Gretzky, one of the greatest hockey players of all time, said "I skate to where the puck is going to be, not where it has been."';
            echo $AI->get_defaulted_dynamic_area('hometextblock5h2',$hometextblock5h2);
            ?>
        </h2>
        <!--<h3>"I skate to where the puck is going to be, not where it has been." </h3>-->

        <span class="welcomedealership">
            <h1>
        <?php
        $hometextblock5h1='DEALERSHIPS WELCOME!';
        echo $AI->get_defaulted_dynamic_area('hometextblock5h1',$hometextblock5h1);
        ?>
        </h1></span>
        <h4>

            <?php
            $hometextblock5h4='Join us and gain extreme clarity of where the ';
            echo $AI->get_defaulted_dynamic_area('hometextblock5h4',$hometextblock5h4);
            ?>
        </h4>
        <h5>
            <?php
            $hometextblock5h5='Marketplace';
            echo $AI->get_defaulted_dynamic_area('hometextblock5h5',$hometextblock5h5);
            ?>
        </h5>

        <?php
        $hometextblock5img='<img src="system/themes/marketplace/images/img_one.png" class="oneclass">';

        echo $AI->get_defaulted_dynamic_area('hometextblock5img',$hometextblock5img);
        ?>

            <?php
            $hometextblock5h6='<h6>Is headed and stay ahead of the curve.</h6>';
            echo $AI->get_defaulted_dynamic_area('hometextblock5h6',$hometextblock5h6);
            ?>



        <!--<label><img src="system/themes/marketplace/images/textimg1.png" alt="#"></label>-->

        <?php
        $hometextblock5viewmore='<a href="javascript:void(0)" class="block5btn">View More</a>';
        echo $AI->get_defaulted_dynamic_area('hometextblock5viewmore',$hometextblock5viewmore);
        ?>




    </div>
</div>

<!--<div class="container-fluid hometextblock3">
    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 hometextblock3left">
        <h2><img src="system/themes/marketplace/images/hometext1.png" alt="#"></h2><br/>
        <h3>Join Us In Dallas Texas I SEPTEMBER 18, 19, 20</h3><br/>

        <h4>Presale Tickets Available OCTOBER 1st</h4>

    </div>

    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 hometextblock3right">
        <h5>
        Get On Top Of The Radically Changing Market Place.<br/>
        Put the POWER back in your Marketing Strategies.<br/>
        Digital Marketing Is Going LOCAL. Are You Ready?
        </h5>

    </div>


    <div class="clearfix"></div>
</div>-->
<div class="container-fluid hometextblock4">
    <div class="hometextblock4-wrapper">

            <?php
            $hometextblock4h2='<h2>The Online Marketplace</h2>';
            echo $AI->get_defaulted_dynamic_area('hometextblock4h2',$hometextblock4h2);
            ?>


        <?php

        $hometextblock4h5='<h5>is a moving target and it’s<br/> changing. Come learn from leaders in the industry and<br/>     supercharge your dealership for forthcoming paradigm shift.</h5>';
        echo $AI->get_defaulted_dynamic_area('hometextblock4h5',$hometextblock4h5);
            ?>


        <?php

        $hometextblock4h3='<h3>Our Message and Mission is very specialized and focused on the emerging new online local marketplace for auto dealers. Besides incredible current opportunities there are major shifts coming. There is no other convention on earth that will bring you this incredible information like the <span>MarketPlaceMasters Dealership Series.</span></h3>';
            echo $AI->get_defaulted_dynamic_area('hometextblock4h3',$hometextblock4h3);
            ?>
       


    </div>
</div>

<div class="container-fluid hometextblock6">
    <div class=" hometextblock6-wrapper">
        <?php
        $hometextblock6h1h4='<h1>Attendees</h1>
        <h4>Who should attend?</h4>';
       echo $AI->get_defaulted_dynamic_area('hometextblock6h1h4',$hometextblock6h1h4);?>
        <?php
        $hometextblock6img='<img src="system/themes/marketplace/images/block6img.png" alt="#" class="block61">';
       echo $AI->get_defaulted_dynamic_area('hometextblock6img',$hometextblock6img);?>

        <div class="block6imgdiv block6box9">
    <?php
    $block6box9img='<img src="system/themes/marketplace/images/block6-img9.png" alt="#" >';
    echo $AI->get_defaulted_dynamic_area('block6box9img',$block6box9img);?>


        <?php
        $block6box9h2='<h2>Auto Sales Professionals </h2>';
        echo $AI->get_defaulted_dynamic_area('block6box9h2',$block6box9h2);?>


        </div>


        <div class="block6imgdiv block6box1">
<?php
$block6box1img='<img src="system/themes/marketplace/images/block6-img1.png" alt="#" >';
  echo $AI->get_defaulted_dynamic_area('block6box1img',$block6box1img);?>

<?php
$block6box1h2=' <h2>Independent Automotive dealer<br/>principals</h2>';

echo $AI->get_defaulted_dynamic_area('block6box1h2',$block6box1h2);?>
        </div>





        <div class="block6imgdiv block6box2">
            <?php
            $block6box2img='<img src="system/themes/marketplace/images/block6-img2.png" alt="#" >';
            echo $AI->get_defaulted_dynamic_area('block6box2img',$block6box2img);?>

<?php
$block6box2h2='<h2>Independent Automotive dealer<br/>upper management</h2>';
echo $AI->get_defaulted_dynamic_area('block6box2h2',$block6box2h2);?>




        </div>


        <div class="block6imgdiv  block6box3">
<?php
$block6box3img='<img src="system/themes/marketplace/images/block6-img3.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box3img',$block6box3img);?>


<?php
$block6box3h2='<h2>Franchise Dealer<br>Principals</h2>';
echo $AI->get_defaulted_dynamic_area('block6box3h2',$block6box3h2);?>

        </div>


        <div class="block6imgdiv block6box4">
<?php
$block6boximg='<img src="system/themes/marketplace/images/block6-img4.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6boximg',$block6boximg);?>


<?php
$block6boxh211='<h2>Internet department<br/>management</h2>';
echo $AI->get_defaulted_dynamic_area('block6boxh211',$block6boxh211);?>



        </div>


        <div class="block6imgdiv block6box5">
<?php
$block6box5img='<img src="system/themes/marketplace/images/block6-img7.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box5img',$block6box5img);?>


<?php
$block6box5h2='<h2>Industry News Professionals</h2>';
echo $AI->get_defaulted_dynamic_area('block6box5h2',$block6box5h2);?>


        </div>

        <div class="block6imgdiv  block6box6">
<?php
$block6box6img='<img src="system/themes/marketplace/images/block6-img6.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box6img',$block6box6img);?>

<?php
       $block6boxh2='<h2>Social media service<br/>professionals</h2>';
echo $AI->get_defaulted_dynamic_area('block6boxh2',$block6boxh2);?>

        </div>
        <div class="block6imgdiv block6box7">
<?php
$block6box7img='<img src="system/themes/marketplace/images/block6-img8.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box7img',$block6box7img);?>


<?php
$block6box7h2='<h2>Independent Automotive dealer<br/>upper management</h2>';
echo $AI->get_defaulted_dynamic_area('block6box7h2',$block6box7h2);?>

        </div>
        <div class="block6imgdiv block6box8">
<?php
$block6box8img='<img src="system/themes/marketplace/images/block6-img5.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box8img',$block6box8img);?>

<?php
$block6box8h2='<h2>Local dealer marketing service<br/>professionals</h2>';
echo $AI->get_defaulted_dynamic_area('block6box8h2',$block6box8h2);?>

        </div>
        <div class="block6imgdiv block6box10">
<?php
$block6box10img='<img src="system/themes/marketplace/images/block6-img10.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block6box10img',$block6box10img);?>


<?php
$block6box10h2='<h2>Buy Here Pay Here dealerships</h2>';
echo $AI->get_defaulted_dynamic_area('block6box10h2',$block6box10h2);?>

        </div>



<?php
$block6box10h3=' <h3>Expo Focuses On:</h3>';
echo $AI->get_defaulted_dynamic_area('block6box10h3',$block6box10h3);?>



        <div class="block6btnwrapper">

            <div class="block6btn1">
<?php
$block6btn1img='<a href="javascript:void(0)" ><img src="system/themes/marketplace/images/icon-dm.png"><span>Digital Marketing</span></a>';
echo $AI->get_defaulted_dynamic_area('block6btn1img',$block6btn1img);?>

            </div>
            <div class="block6btn2">
                <?php
                $block6btn1img1='<a href="javascript:void(0)" ><img src="system/themes/marketplace/images/icon-sm.png"><span>Social Media</span></a>';
                echo $AI->get_defaulted_dynamic_area('block6btn1img1',$block6btn1img1);?>
            </div>
            <div class="block6btn3">
<?php
$block6btn3img='<a href="javascript:void(0)"><img src="system/themes/marketplace/images/icon-ad.png"><span>Audience Development</span></a>';
echo $AI->get_defaulted_dynamic_area('block6btn3img',$block6btn3img);?>
            </div>

            <div class="clearfix"></div>
        </div>

    </div>
</div>

<div class="container-fluid hometextblock7">
    <div class="hometextblock7-wrapper">
        <div class="block7_left">

<?php
$block7_lefth234='<h2>KEEP UP TO DATE!</h2>
            <h3>Kick Up Your Marketing Prowess To Impact Your Local Car Buyers </h3>
            <h4>From Keynote Speaker Peter Bordes:</h4>';
echo $AI->get_defaulted_dynamic_area('block7_lefth234',$block7_lefth234);?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container-fluid hometextblock10">
    <div class=" hometextblock10-wrapper">
        <div class="container">
            <div class="block10_center">

<?php
$block10_centerh5='<h5>"The age of the Social Enterprise and Sharing Economy is changing the way executives lead in today\'s <br/>hyper-connected, mobile, and global business world.<br/>As a long-time CEO and one of the top 100 most influential angel investors in social media in the<br/> US, I can   empathize with the challenges executives and start-ups face today: the nology."<br/> ever-changing   landscape of social media, disruptive innovation, and new tech"</h5>';
echo $AI->get_defaulted_dynamic_area('block10_centerh5',$block10_centerh5);?>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container-fluid hometextblock11">

    <h1>
<?php
$hometextblock11h1='keynote speakers:';

echo $AI->get_defaulted_dynamic_area('$hometextblock11h1',$hometextblock11h1);?>
    </h1>
    <div class="hometextblock11-wrapper">
        <div class="block11con">
            <div class="imgwrapper">
<?php
$hometextblock1img='<img src="system/themes/marketplace/images/block8_img1.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock1img',$hometextblock1img);?>
            </div>
            <div class="block11con_text">

<?php
$hometextblock1h4h2h3='<h2>Speaker</h2>
                <h3>Keynote Speaker: Peter Bordes</h3>
                <h4>
                    Subject: Online Social Media and Massive Audience
                    Development for dealers
                </h4>';
echo $AI->get_defaulted_dynamic_area('hometextblock1h4h2h3',$hometextblock1h4h2h3);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal1">View Full Bio</a>
                <div class="clearfix"></div>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11conimg='<img src="system/themes/marketplace/images/block8_img9.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11conimg',$block11conimg);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth234='<h2>Speaker</h2>
                <h3>Keynote Speaker:  D.J. Harrington</h3>

                <h4>
                    Subject: Staying Genuine in a Changing Marketplace

                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth234',$block11con_texth234);?>

                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal9">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2341img='<img src="system/themes/marketplace/images/block8_img2.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2341img',$block11con_texth2341img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth2341text='<h2>Speaker</h2>
                <h3>Keynote Speaker: Mike Jackson</h3>

                <h4>
                    Subject: Understanding The New Millennial Buyer

                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2341text',$block11con_texth2341text);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal2">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2342img='<img src="system/themes/marketplace/images/block8_img3.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342img',$block11con_texth2342img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth2342h23456='<h2>Speaker</h2>
                <h3>Keynote Speaker: Ken Shilson</h3>

                <h4>
                    Subject: Hosting the ALLSTAR Dealer Panel


                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342h23456',$block11con_texth2342h23456);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal3">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth234266img='<img src="system/themes/marketplace/images/block8_img4.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth234266img',$block11con_texth234266img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth234266h234='<h2>Speaker</h2>
                <h3>Keynote Speaker: Patrick Anderson</h3>

                <h4>
                    Subject: The Smart Dealer Internet Department


                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth234266h234',$block11con_texth234266h234);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal4">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2342009img='<img src="system/themes/marketplace/images/block8_img5.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009img',$block11con_texth2342009img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth2342009h234='<h2>Speaker</h2>
                <h3>Keynote Speaker: Beto Paredes</h3>
                <h4>
                    Subject: The Emerging New Market is bringing a Major
                    Shift for the Automotive Industry – Get Ready!
                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h234',$block11con_texth2342009h234);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal5">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2342009h288img='<img src="system/themes/marketplace/images/block8_img6.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288img',$block11con_texth2342009h288img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth2342009h288h234='<h2>Speaker</h2>
                <h3>Keynote Speaker: George Dans</h3>
                <h4>
                    Subject: Turn Your Sales Staff Into Influencers
                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288h234',$block11con_texth2342009h288h234);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal6">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2342009h288h2309img='<img src="system/themes/marketplace/images/block8_img7.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288h2309img',$block11con_texth2342009h288h2309img);?>
            </div>
            <div class="block11con_text">

<?php
$block11con_texth2342009h288h2309h234='<h2>Speaker</h2>
                <h3>Keynote Speaker:  Jimmy Serrano</h3>
                <h4>
                    Subject: Never Give Up on Your Dreams
                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288h2309h234',$block11con_texth2342009h288h2309h234);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal7">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="block11con">
            <div class="imgwrapper">
<?php
$block11con_texth2342009h288h2309h237img='<img src="system/themes/marketplace/images/block8_img8.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288h2309h237img',$block11con_texth2342009h288h2309h237img);?>
            </div>
            <div class="block11con_text">
<?php
$block11con_texth2342009h288h2309h237h234='<h2>Speaker</h2>
                <h3>Keynote Speaker:  Steve Maher</h3>
                <h4>
                    Subject: Effective Measurement of Buyer Satisfaction
                </h4>';
echo $AI->get_defaulted_dynamic_area('block11con_texth2342009h288h2309h237h234',$block11con_texth2342009h288h2309h237h234);?>
                <a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal8">View Full Bio</a>
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>



<div class="container-fluid hometextblock9">
    <div class="hometextblock8-wrapper">
        <div class="hometextblock9_left">
            <h2>
<?php
$hometextblock9_left323='Platinum Sponsors';
echo $AI->get_defaulted_dynamic_area('hometextblock9_left323',$hometextblock9_left323);?>

            </h2>

            <table width="100%" border="0">
                <tr>
                    <td align="center" valign="bottom">
                        <div>
                            <?php
                            $hometextblock9_leftimg='<img src="system/themes/marketplace/images/block9img1.png" alt="#" >';
                            echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg',$hometextblock9_leftimg);?>
                        </div>

                        <span> NIADA</span>

                    </td>
                    <td align="center" valign="bottom">
                        <div>
<?php
$hometextblock9_leftimg22='<img src="system/themes/marketplace/images/block9img2.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg22',$hometextblock9_leftimg22);?>
                        </div>

                        <span>Car Fax </span>

                    </td>
                    <td align="center" valign="bottom">
                        <div>
<?php
$hometextblock9_leftimg23='<img src="system/themes/marketplace/images/block9img3.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg23',$hometextblock9_leftimg23);?>
                        </div>

                        <span> NABD </span>

                    </td>

                    <td align="center" valign="bottom">&nbsp;</td>
                </tr>
            </table>

            <div class="clearfix"></div>
        </div>

        <div class="hometextblock9_right">
            <h2>Technology Sponsors </h2>

            <table width="100%" border="0">
                <tr>
                    <td align="center" valign="bottom">
                        <div>
<?php
$hometextblock9_leftimg24='<img src="system/themes/marketplace/images/block9img4.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg24',$hometextblock9_leftimg24);?>
                        </div>

                        <span>Auto Search Tech </span>

                    </td>
                    <td align="center" valign="middle">
                        <div class="block9mg5">
<?php
$hometextblock9_leftimg28='<img src="system/themes/marketplace/images/block9img5.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg28',$hometextblock9_leftimg28);?>
                        </div>

                        <span>Content Plus - powered by OneQube  </span>

                    </td>
                    <td align="center" valign="bottom">

                        <div>
<?php
$hometextblock9_leftimg30='<img src="system/themes/marketplace/images/block9img6.png" alt="#" >';
echo $AI->get_defaulted_dynamic_area('hometextblock9_leftimg30',$hometextblock9_leftimg30);?>
                        </div>

                        <span>ProBidAuto  </span>

                    </td>
                </tr>
            </table>

            <div class="clearfix"></div>
        </div>


        <div class="clearfix"></div>
    </div>
</div>

