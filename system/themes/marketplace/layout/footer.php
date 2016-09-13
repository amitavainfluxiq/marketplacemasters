<?php
/**
 * Created by PhpStorm.
 * User: Iftekar
 * Date: 9/8/2016
 * Time: 2:25 PM
 */
?>
<div class="container-fluid footerblock">

    <div class="footertop">
        <div class="footermenu">

<?php
         $footermenuhtml ='<a href="javascript:void(0)"> Home</a>
            <a href="javascript:void(0)">Conference Info</a>
            <a href="javascript:void(0)">Speaker Information</a>
            <a href="javascript:void(0)">Get Passes</a>
          <a href="javascript:void(0)">Exhibitors</a>
          <a href="javascript:void(0)">T & A</a>
          <a href="javascript:void(0)">DS eZine</a>
         <a href="javascript:void(0)">Media Room</a>
            <a href="javascript:void(0)">Contact</a>';
            echo $AI->get_defaulted_dynamic_area('footermenuhtml',$footermenuhtml);
            ?>
        </div>

        <div class="footesocialblock">

            <?php

            $footersocialiconhtml='<a href="javascript:void(0)">  <img src="system/themes/marketplace/images/sicon1.png" alt="#" ></a>
            <a href="javascript:void(0)">  <img src="system/themes/marketplace/images/sicon2.png" alt="#" ></a>
            <a href="javascript:void(0)">  <img src="system/themes/marketplace/images/sicon3.png" alt="#" ></a>
            <a href="javascript:void(0)">  <img src="system/themes/marketplace/images/sicon4.png" alt="#" ></a>
            <a href="javascript:void(0)">  <img src="system/themes/marketplace/images/sicon5.png" alt="#" ></a>';

            echo $AI->get_defaulted_dynamic_area('footersocialiconhtml',$footersocialiconhtml);
            ?>
            </div>


        <div class="clearfix"></div>
  </div>

    <div class="clearfix"></div>


    <div class="footercopyright">
        <?php
        $copyrighthtml='Copyright &copy; 2016 · MarketPlace Master.com · All Rights Reserved.';

        echo $AI->get_defaulted_dynamic_area('copyrighthtml',$copyrighthtml);
        ?>

    </div>

    </div>

<!-- popup1-->
<div class="modal fade" id="myModal1" role="dialog">
   <div class="modal-dialog">

       <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                    <?php
                    $modal1img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('modal1img1',$modal1img1);
                    ?>
                    </div>

                    <div class="popupuser">

                    <?php
                    $modal1img2='<img src="system/themes/marketplace/images/block8_img1.png" alt="#" >';
                     echo $AI->get_defaulted_dynamic_area('modal1img2',$modal1img2);
                    ?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                <?php
                $modal11text1='<h2>Keynote</h2>
                                    <h3>Peter Bordes</h3>
                                    <h4>Social and Local Audience Development</h4>';
                echo $AI->get_defaulted_dynamic_area('modal11text1',$modal11text1);?>
                </div>

                <div class="popupdetail">



                    <?php
                    $modal11text2='<h6>Master Online Marketer - Automotive Industry Entrepreneur</h6>';
                    echo $AI->get_defaulted_dynamic_area('modal11text2',$modal11text2);?>


<?php
$modal11text3='<p>Peter Bordes is considered one of the most successful online marketing experts and entrepreneurs of all time. He has worked in marketing and media for over 30 years. Peter is very well known for his online marketing expertise, breaking records for online performance marketing and is no stranger to the Automotive space. One of his major investments, Think Realtime, was acquired by Dealer.com for it’s lightning-fast ability to analyze and intelligently price media space. The web’s most sophisticated marketers use this auto dealer based technology to measure, be accountable to the same metrics used in paid search, influence and drive consumer sales using the display advertising channel.
                           <br/><br/>
                        Founding one of the most successful direct response marketing companies in the world, Media Trust (#9 on the INC500 2 years in a row), Peter has turned his attention to the local marketing space for dealerships. He saw the future coming for the local market well before it hit. His current focus through OneQube.com is is deeply involved in audience development. His Keynote will be a breath of fresh air for dealerships of all sizes. He will be speaking on the subject of Local Online Social Media and Massive Audience Development for dealers.  You really do not want to miss what Peter can teach you about the audience development on the local level for your dealership. Get in early!
                    </p>';
                     echo $AI->get_defaulted_dynamic_area('modal11text3',$modal11text3);?>

                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup9 -->
<div class="modal fade" id="myModal9" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">

                    <?php
                    $myModal9img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                      echo $AI->get_defaulted_dynamic_area('myModal9img1',$myModal9img1);?>

                    </div>

                    <div class="popupuser">

                    <?php
                    $myModal9img2='<img src="system/themes/marketplace/images/block8_img9.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal9img2',$myModal9img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                    <?php
                    $myModal9text1='<h2>Keynote</h2>
                                        <h3>D.J. Harrington</h3>
                                        <h4>Staying Genuine in a Changing Marketplace</h4>';
                    echo $AI->get_defaulted_dynamic_area('myModal9text1',$myModal9text1);?>
                </div>

                <div class="popupdetail">

                    <?php
                    $myModal9text2='<p>D.J. Harrington, CSP is a bestselling author and the President of Phone Logic Inc. an international training company based in Atlanta, Georgia.
                        <br/><br/>
                        D.J. serves as a consultant and trainer to over 1,000 privately owned businesses throughout the country, training personnel at all levels of the company. Known as the "Doctor" to some and the "Car-Diologist" to others he has presented well over 2000 programs globally.
                        <br/><br/>
                        He has had a blessed life and been awarded the prestigious Certified Speaking Professional (CSP) designation by the National Speakers Associa-tion. He contributes much of his success to his experiences as a graduate of Saint Leo University.
                        <br/><br/>
                        D.J. combines his knowledge, high energy and humor in a thought pro-voking, fun, interactive learning environment. He leaves his audience with practical advice and methods to succeed. His years as a sales trainer and motivational speaker, in a variety of industries, have provided D.J with an outstanding background which he brings to every clinic and seminar. DJ can give you a "tune-up" or a"complete overhaul".
                        <br/><br/>
                        Presenting to dealerships on location, on stage and across the world D.J. will be bringing you a performance you simply can not miss!
                    </p>';
                    echo $AI->get_defaulted_dynamic_area('myModal9text2',$myModal9text2);?>

                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup2 -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">

                        <?php
                        $myModal2img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                        echo $AI->get_defaulted_dynamic_area('myModal2img1',$myModal2img1);?>
                    </div>

                    <div class="popupuser">
                        <?php
                        $myModal2img2='<img src="system/themes/marketplace/images/block8_img2.png" alt="#" >';
                        echo $AI->get_defaulted_dynamic_area('myModal2img2',$myModal2img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                    <?php
                    $myModal2text1='<h2>Keynote</h2>
                    <h3>Mike Jackson</h3>
                    <h4>Understanding The New Millennial Buyer</h4>';
                    echo $AI->get_defaulted_dynamic_area('myModal2text1',$myModal2text1);?>
                </div>

                <div class="popupdetail">

                    <?php
                    $myModal2text2='<h6>10 Years in the Industry  - 1,800 Dealership Clients Across the USA</h6>';
                    echo $AI->get_defaulted_dynamic_area('myModal2text2',$myModal2text2);?>




                    <?php
                    $myModal2text3='<p>
                    
                    Mike Jackson has been operating in the dealership industry developing highly effective websites and SEO strategies for dealers going on 10 years. Mike is considered a major authority in marketing for dealers appearing 15 times as a keynote speaker and trainer.  Mike has been published over 30 times in major industry publications and works very closely with the NIADA and other organizations.
                                            <br/><br/>
                                            Unlike so many other professionals in the field, Mike has worked to truly educate dealers on what they are able to do in their local search and social environment from the start. Incredible enough the web has continued towards giving local businesses their power back. The ability to do incredible things with your marketing with very minimal costs has taken the industry to a completely new level.   And the new Millennial Market has emerged amongst this new industry perspective.   How do you reach these new buyers? Mike will bring all home in his Keynote! Don’t miss it.
                                            <br/><br/>
                                            Mike will completely surprise you with the amount of usable information you will  learn from his presentations. In fact, that is one thing he hears more consistently than anything else. His subject matter will uncover many ways that dealers can reach their local audiences through SEO, social media and very effective and free online resources.
                    </p>';
                    echo $AI->get_defaulted_dynamic_area('myModal2text3',$myModal2text3);?>
                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup3 -->
<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                        <?php
                        $myModal3img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                         echo $AI->get_defaulted_dynamic_area('myModal3img1',$myModal3img1);?>
                    </div>

                    <div class="popupuser">

                        <?php
                        $myModal3img2='<img src="system/themes/marketplace/images/block8_img3.png" alt="#" >';
                         echo $AI->get_defaulted_dynamic_area('myModal3img2',$myModal3img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                    <?php
                    $myModal3text1='<h2>Keynote</h2>
                                        <h3>Ken Shilson</h3>
                                        <h4>Hosting the ALLSTAR Dealer Panel </h4>';
                    echo $AI->get_defaulted_dynamic_area('myModal3text1',$myModal3text1);?>
                </div>

                <div class="popupdetail">
                    <?php
                    $myModal3text2='<h6>Ken Shilson is one of the most renown figures in the BHPH business</h6>';
                    echo $AI->get_defaulted_dynamic_area('myModal3text2',$myModal3text2);?>



                        <?php
                        $myModal3text3='<p>
                        
                        The National Alliance of Buy Here, Pay Here Dealers (NABD) was founded in 1999 as the only organization focusing exclusively on the needs of the large and growing Buy Here, Pay Here industry. They are an association focusing exclusively on the needs of the BHPH industry and is dedicated to improving the quality of BHPH dealers through education, ongoing training, and by promoting the interests of self-finance dealers nationwide.
                                                <br/><br/>
                                                Ken’s group is considered the authority in the industry for BHPH dealers.  They have a major circular publication that goes out to over 20,000 dealerships on a monthly basis. Besides the publications they hold conventions two times a year that are highly popular and informative.
                                                <br/><br/>
                                                Ken will be leading as the host of honor an all star dealer panel to discuss the challenges in marketing for BHPH dealers. The panel will be hand picked by Ken guaranteed to be a huge success.
                                                <br/><br/>
                                                If you are a BHPH dealer that is struggling with your marketing model you do not want to miss this panel!</p>';
                    echo $AI->get_defaulted_dynamic_area('myModal3text3',$myModal3text3);?>
                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup4 -->
<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                        <?php
                        $myModal4img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                        echo $AI->get_defaulted_dynamic_area('myModal4img1',$myModal4img1);?>
                    </div>

                    <div class="popupuser">

                        <?php
                        $myModal4img2='<img src="system/themes/marketplace/images/block8_img4.png" alt="#" >';
                        echo $AI->get_defaulted_dynamic_area('myModal4img2',$myModal4img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                <?php
                $myModal4text1='<h2>Keynote</h2>
                                    <h3>Patrick Anderson</h3>
                                    <h4>The Smart Dealer Internet Department </h4>';
                echo $AI->get_defaulted_dynamic_area('myModal4text1',$myModal4text1);?>
                </div>

                <div class="popupdetail">
                    <?php
                    $myModal4text2='<h6> Considered a Master of the Corporate Internet Department</h6>';
                    echo $AI->get_defaulted_dynamic_area('myModal4text2',$myModal4text2);?>
                        <?php
                        $myModal4text3='<p>
                        Patrick Anderson has been in the operations department of some of the most successful companies in the world.  He appeared to a sold out crowd of over 2,000 Internet marketers at Wembley stadium and has appeared as a Keynote speaker in the space over 30 times. As an online marketing entrepreneur he has experience you will not find in another speaker. He was the senior director of affiliate services at American Express leading them to win the Affiliate program of the year 4 years in a row. His customers include Priceline.com. Travelocity, 20th Century Fox, Yahoo.com and several other major online Internet players. Patrick has brought groundbreaking traffic results including his own online media hub that saw over 8 million unique visits per day.
                                            <br/><br/>
                                                Patrick’s ad buying strategies and clear understanding of the space has propelled his group to massive success in ad revenues in many diverse industries. Patrick is considered an expert at inducing viral and high interest through applications such as Facebook, twitter, instagram and others. As one of the most sought after campaign managers in the industry and the owner of AdMarketingPros.com Patrick has incredible strategies to share to Automotive Dealers across the United States. You are not going to want to miss his incredible keynote.   He will be talking about intelligent ad spend and on line marketing management for your dealership. His focus will be on how to keep budgeted but still maintain incredible results.
                    </p>';
                    echo $AI->get_defaulted_dynamic_area('myModal4text3',$myModal4text3);?>

                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup5 -->
<div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                        <?php
                        $myModal5img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                             echo $AI->get_defaulted_dynamic_area('myModal5img1',$myModal5img1);?>
                    </div>

                    <div class="popupuser">
                        <?php
                        $myModal5img2='<img src="system/themes/marketplace/images/block8_img5.png" alt="#" >';

                        echo $AI->get_defaulted_dynamic_area('myModal5img2',$myModal5img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                    <?php
                    $myModal5text1='<h2>Keynote</h2>
                                        <h3>Beto Paredes</h3>
                                        <h4>Master The Emerging Local Market TODAY</h4>';
                    echo $AI->get_defaulted_dynamic_area('myModal5text1',$myModal5text1);?>
                </div>

                <div class="popupdetail">
                    <?php
                    $myModal5text2='<h6> With the New Market Emerging Beto will help prepare your Dealership today.</h6>';
                    echo $AI->get_defaulted_dynamic_area('myModal5text2',$myModal5text2);?>



                    <?php
                    $myModal5text3='<p>
                    
                    Beto Paredes is the founder of two Automotive marketing and website companies going on over 12 years in service. With over 4,000 dealers in his group’s customer base he has held Keynote at numerous IT and Automotive Industry venues frequently appearing on the same stage as executives from Google, IBM and many other major online players.  He was one of the only outside specialists called in by Microsoft to make their decision moving their ad center to digital river.
                                            <br/><br/>
                                            Rarely will you find an individual with his portfolio and background of Beto Paredes and his thirst for solution-driven, boundary- pushing, newer-thinking methodologies. With 15 years of experience as a senior level business developer and engineer he has lead teams in over 40 professional sectors launching over 2000+ online projects to date. Beto has managed major projects for Affiliate.com (Inc 500), Hydra Networks (Inc 500), Media Trust (Inc 500), 5Linx (Inc 500), LinkTrust (Inc 5000) several of which went on to become multi-million dollar platforms.
                                            <br/><br/>
                                            Beto’s Keynote subject will be one of the most interesting coming to the Market Place Master platform. There are always changes to the online marketplace, but there is about to be a major shift that is going to affect every single market. The online automotive industry will be especially hit.
                    </p>';
                    echo $AI->get_defaulted_dynamic_area('myModal5text3',$myModal5text3);?>

                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup6 -->
<div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                    <?php
                    $myModal6img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal6img1',$myModal6img1);?>
                    </div>

                    <div class="popupuser">
                        <?php
                        $myModal6img2='<img src="system/themes/marketplace/images/block8_img6.png" alt="#" >';
                        echo $AI->get_defaulted_dynamic_area('myModal6img2',$myModal6img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                <?php
                $myModal6text1='<h2>Keynote</h2>
                                    <h3>George Dans</h3>
                                    <h4>Turn Your Sales Staff Into Influencers</h4>';
                echo $AI->get_defaulted_dynamic_area('myModal6text1',$myModal6text1);?>
                </div>

                <div class="popupdetail">
                    <?php
                    $myModal6text2='<h6>   George\'s Stage Presence in Dallas will be delivering a powerful message!</h6>';

                     echo $AI->get_defaulted_dynamic_area('myModal6text2',$myModal6text2);?>



                        <?php
                        $myModal6text3='<p>
                        


                        Who is George? Motivational speaker George Dans is fired up with passion and drive to help everyone he meets develop themselves to success. George speaks to companies who are looking for real world training solutions, backed with the motivational training to implement what they learn.
                        <br/><br/>
                        George has studied human improvement for over 25 years and has read thousands of books on the subject. Being a published author himself, George has written many articles and books on what it takes to succeed in this market. He is a master of humor and powerful storytelling, bringing unparalleled energy and principals to every audience he speaks for. George had the privilege of serving our country as a ‘Fire Fighter’ and was honored as the ‘Academy Chief’ at the 62nd basic fire academy in Orange County, California. He has the ability to generate contagious energy, which results from his own rich life experiences.
                        <br/><br/>
                        Professional Paid Speaker 16 years - Over 750 paid speaking events - Spoke Internationally  - Coached over 250 clients - Consulted 500 plus clients - Top rated Speaker at several events - Trained and spoke at over 150 sales and motivational seminars with top Fortune 500 companies - Head Hockey Coach 15 years - Professional Hockey Instructor - Professional Hockey School Director - Spoken over 150 youth groups on personal development.
                    </p>';
                    echo $AI->get_defaulted_dynamic_area('myModal6text3',$myModal6text3);?>

                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup7 -->
<div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                    <?php
                    $myModal7img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal7img1',$myModal7img1);?>
                    </div>

                    <div class="popupuser">
                    <?php
                    $myModal7img2='<img src="system/themes/marketplace/images/block8_img7.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal7img2',$myModal7img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                <?php
                $myModal7text1='<h2>Keynote</h2>
                                    <h3>Jimmy Serrano</h3>
                                    <h4>Never Give Up on Your Dreams</h4>';
                echo $AI->get_defaulted_dynamic_area('myModal7text1',$myModal7text1);?>
                </div>

                <div class="popupdetail">
                <?php
                $myModal7text2='<h6>  Jimmy Serrano has been an exceptional motivation to millions</h6>';
                echo $AI->get_defaulted_dynamic_area('myModal7text2',$myModal7text2);?>





<?php
$myModal7text3='<p>

                        A former Major League pitcher with the Kansas City Royals, Jimmy brings his 10 years of professional baseball experience.
                        <br/><br/>
                        In his 10 year career, Jimmy pitched for 7 different organizations that included the Montreal Expos, New York Mets, Kansas City Royals, Oakland Athletics, Cincinnati Reds, Boston Red Sox, and Florida Marlins. His baseball background also includes three Arizona Fall League seasons, two seasons in the Puerto Rico winter league, one season in the Mexican winter league, and one season with the SK Wyverns of the Korean Baseball Organization.
                        <br/><br/>
                        Jimmy collected three organizational pitcher of the month awards as well as being selected to All-Star teams at the Single A, Double A, and Triple A levels. In 2008, He started Top Prospect Baseball in Southern Maryland.
                        <br/><br/>
                        As a major participant in the The Top Prospect Athletics program for youth Jimmy saw 12 of its players go on to play college baseball. Jimmy has been instrumental in advising players during the college recruiting process and helping them receive athletic and academic scholarships. Jimmy and his wife Caitlin have two sons, Ethan and Noah.</p>';

                echo $AI->get_defaulted_dynamic_area('myModal7text3',$myModal7text3);?>
                </div>


            </div>

        </div>

    </div>
</div>

<!-- popup8 -->
<div class="modal fade" id="myModal8" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="popuptop">
                    <div class="popuplogo">
                    <?php
                    $myModal8img1='<img src="system/themes/marketplace/images/popuplogo.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal8img1',$myModal8img1);?>
                    </div>

                    <div class="popupuser">
                    <?php
                    $myModal8img2='<img src="system/themes/marketplace/images/block8_img8.png" alt="#" >';
                    echo $AI->get_defaulted_dynamic_area('myModal8img2',$myModal8img2);?>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="popupdes">

                <?php
                $myModal8text1='<h2>Keynote</h2>
                                    <h3>Steve Maher</h3>
                                    <h4>Effective Measurement of Buyer Satisfaction</h4>';
                echo $AI->get_defaulted_dynamic_area('myModal8text1',$myModal8text1);?>
                </div>

                <div class="popupdetail">
                <?php
                $myModal8text2='<h6>  Buyer opinions matter online more now than ever.  Stay ahead of the curve.</h6>';
                echo $AI->get_defaulted_dynamic_area('myModal8text2',$myModal8text2);?>



<?php
$myModal8text3='<p>


    Steve Maher is Vice President for Medallia, leading the solution sales and partner solution organizations in customer metrics for several major automotive clients. Their customers range from Toyota to several of the major airlines.  Medallia makes software to measure and improve the customer experience in real time. We allow businesses to listen to, understand, and then act on their customers\' feedback.
<br/>
    What does this mean? Think about the last interaction you had with a business. Was it a good one? Could it have been better? As a customer in this scenario, these questions may seem obvious. But here\'s the thing — they\'re not obvious to most businesses. A lot of them don\'t know whether the interaction you just had was a good one or not, and if they do know, who\'s held accountable for improving it in the future.
    <br/>
    Before Medallia Steve was a Vice President for Computer Associates working with fortune 500 CIOs across the globe in customer satisfaction data analysis. He is considered one the authorities in the space on customer satisfaction and will bring incredible insights for your dealership in his keynote.


</p>';
echo $AI->get_defaulted_dynamic_area('$myModal8text3',$myModal8text3);?>

                </div>


            </div>

        </div>

    </div>
</div>