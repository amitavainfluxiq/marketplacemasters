

<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 9/19/16
 * Time: 10:56 AM
 */

$page_no=1;
$per_page = 8;
$pagination_index = 3;

if(isset($_GET['page'])){
    $page_no = intval($_GET['page']);
}
if($page_no < 1){
    $page_no = 1;
}

$offset = ($page_no-1)*$per_page;

$rescount=$AI->db->getAll("SELECT * FROM video_manager WHERE status = 1 ORDER BY priority DESC");

$totaldata = count($rescount);
$totalpage = $totaldata/$per_page;

if($totalpage > intval($totalpage)){
    $totalpage = intval($totalpage)+1;
}
if($page_no >$totalpage){
    $page_no = $totalpage;
}

$first_index = $page_no-1;
if($page_no == 1){
    $first_index = 1;
}
if(($first_index+$pagination_index) > $totalpage){
    $first_index = $totalpage-$pagination_index+1;
}
if($first_index < 1){
    $first_index = 1;
}



$res=$AI->db->getAll("SELECT * FROM video_manager WHERE status = 1 ORDER BY priority DESC limit $offset,$per_page");
//$reslast=$AI->db->getAll("SELECT * FROM video_manager WHERE status = 1 ORDER BY priority DESC limit 0,1");
$resval=$res[0];

 $expirationDate1 = $resval['time'];
 $toDay1 = time();
 $difference1 = abs($toDay1 - $expirationDate1);
 $difference1 = $toDay1 - $expirationDate1;
$days1 = floor($difference1 / 86400);
//echo count($res);
$days1=sec2view($difference1);



function sec2view($seconds)
{
    /**
     * Convert number of seconds into years, days, hours, minutes and seconds
     * and return an string containing those values
     *
     * @param integer $seconds Number of seconds to parse
     * @return string
     */

    $y = floor($seconds / (86400*365.25));
    $d = floor(($seconds - ($y*(86400*365.25))) / 86400);
    $h = date('H', $seconds);
    $m = date('i', $seconds);
    $s = date('s', $seconds);

    $string = '';

    if($y > 0)
    {
        $yw = $y > 1 ? ' years ago ' : ' year ago';
        $string .= $y . $yw;
    }

    if($d > 0)
    {
        $dw = $d > 1 ? ' days ago' : ' day ago';
        $string .= $d . $dw;
    }
    if($d < 1)
    {
        $dw1 = $d < 1 ? ' today ' : '  ';
        $string = $dw1;
    }

   /* if($h > 0)
    {
        $hw = $h > 1 ? ' hours ' : ' hour ';
        $string .= $h . $hw;
    }

    if($m > 0)
    {
        $mw = $m > 1 ? ' minutes ' : ' minute ';
        $string .= $m . $mw;
    }

    if($s > 0)
    {
        $sw = $s > 1 ? ' seconds ' : ' second ';
        $string .= $s . $sw;
    }*/

    return preg_replace('/\s+/',' ',$string);
}

?>

<div class="container-fluid conference_banner">

    <div class="conference_banner_img">

        <?php
        $mediaroombannerimg=' <img src="system/themes/marketplace/images/mediaroom_banner1.jpg">';
        echo $AI->get_defaulted_dynamic_area('mediaroombannerimg',$mediaroombannerimg);
        ?>




    </div>
    <div class="clearfix"></div>


    <div class="conference_banner_bgblock1"></div>


    <div class="clearfix"></div>



    <div class="conference_banner_text">
        <div class="bannertextblock3">
            <h6>

                <?php
                $mediaroombannerh6text='MarketPlace Master Dealership Series';
                echo $AI->get_defaulted_dynamic_area('mediaroombannerh6text',$mediaroombannerh6text);
                ?>
            </h6>

              <div class="mediaroombannerimg2"> <?php
                $mediaroombannerimg2=' <img src="system/themes/marketplace/images/mediaroom_bannerimg2.png">';
                echo $AI->get_defaulted_dynamic_area('mediaroombannerimg2',$mediaroombannerimg2);
                ?>
              </div>

            <div class="bannertextblock4">

                <h1>
                    <?php
                    $mediaroombannertext3='
                September 7th<br/>
                8th and 9th';
                    echo $AI->get_defaulted_dynamic_area('mediaroombannertext3',$mediaroombannertext3);
                    ?>
                </h1>



            </div>

        </div>



        <div class="clearfix"></div>
    </div>

</div>


<div class="container-fluid mediaroom_block2">

    <h2> <?php
        $mediaroomblock2h2='Media Room ';
        echo $AI->get_defaulted_dynamic_area('mediaroomblock2h2',$mediaroomblock2h2);
        ?></h2>
<h3><?php
    $mediaroomblock2h3='Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
                echo $AI->get_defaulted_dynamic_area('mediaroomblock2h3',$mediaroomblock2h3);
                ?></h3>

    </div>


<div class="container-fluid mediaroom_videoblock">
    <div class="mediaroom_videoblock_top">


        <div class="mediaroom_topvideo_left">

           <div class="mainvideo1">
               <div class="videocontainerdiv">
                   <?php if($resval['type']==1){?>
                       <video width="560" height="349" controls>
                           <source src="uploads/video_manager/<?php echo $resval['file'] ?>" type="video/mp4">
                       </video>
                   <?php }
                   if($resval['type']==0){?>
                       <iframe width="560" height="349" src="http://www.youtube.com/embed/<?php echo $resval['file'] ?>?rel=0&hd=1?rel=0" frameborder="0" allowfullscreen></iframe>
                   <?php }
                   ?>




              <!-- <iframe width="560" height="349" src="http://www.youtube.com/embed/<?php /*echo $resval['file'] */?>?rel=0&hd=1?rel=0" frameborder="0" allowfullscreen></iframe>-->
            </div>

           </div>
        </div>


        <div class="mediaroom_topvideo_right">

  <h2><?php echo $resval['title']?> </h2>

<div class="videoviews">&nbsp;</div>
<div class="videotime"><?php echo $days1?></div>

            <div class="clearfix"></div>

     <div class="videodevider"></div>


            <h4><?php echo $resval['description']?> </h4>
         <!--   <h4>"Lorem Ipsum is (simply dummy text)” from available now:</h4>-->


           <!-- <h5>Download on TIDAL:                 <a href="javascript:void(0)"> http://smarturl.it/tdSledge...</a>
                <br/> <br/>
                Download on iTunes:                 <a href="javascript:void(0)">http://smarturl.it/lpsum is simply</a>
                <br/> <br/>
                Download on Google Play:      <a href="javascript:void(0)"> http://smarturl.it/gSledgeh...</a>
                <br/> <br/>
                Download on Amazon:              <a href="javascript:void(0)">http://smarturllpsum is simply.it/aSledgeh...</a>
                <br/> <br/>
                Stream on TIDAL:                     <a href="javascript:void(0)">   http://smarturl.it/tSledgeh...</a>


            </h5>

            <h6>
                Production company: MarketPlace Master <br/> <br/>
                <a href="javascript:void(0)"> http://MPM.ly/sjaQnY </a>


            </h6>-->



            <a href="/~mpmaster/mediadetail/?id=<?php echo $resval['id'] ?>" class="videoreadmore"> Read more</a>

        </div>



        <div class="clearfix"></div>

    </div>


    <div class="mediaroom_videoblock_bottom">

<?php
if(count($res)>0)
{
    foreach($res as $val){
        $expirationDate = $val['time'];
        $toDay = time();
        $difference = abs($toDay - $expirationDate);
       // $days = floor($difference / 86400);
        $days = sec2view($difference);
        ?>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <!--<img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">-->
                <?php if($val['type']==1){?>
                    <img src="system/themes/marketplace/images/defaultimages.jpg" class="videoimg">
               <?php }
                    if($val['type']==0){?>
                    <img src="https://i.ytimg.com/vi/<?php echo $val['file'] ?>/hqdefault.jpg" class="videoimg">
                <?php }
                ?>


                <a href="/~mpmaster/mediadetail/?id=<?php echo $val['id'] ?>"><img  src="system/themes/marketplace/images/play_icon2.png" class="videoplay"></a>

            </div>

            <h2><?php echo $val['title'] ?></h2>
          <!--  <h2>Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. (Lorem Ipsum)</h2>-->

            <h3><a href="/~mpmaster/mediadetail/?id=<?php echo $val['id'] ?>">See Full Interview</a></h3>
           <!-- <h3>See Full Interview</h3>-->

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">&nbsp;</td>
                    <td  align="right" valign="middle"> <?php echo $days?></td>
                </tr>
            </table>



        </div>
     <?php
    }
}
?>

        <div style="clear: both;"></div>
<div class="text-center">
    <ul style="list-style: none;" class="pagination">
        <li <?php echo ($page_no==1)?'class="disabled"':'';?>><a href="mediaroom1?page=1">First</a></li>
        <li <?php echo ($page_no==1)?'class="disabled"':'';?>><a href="mediaroom1?page=<?php echo ($page_no > 1)?$page_no-1:1;?>">Prev</a></li>
        <?php
        for($i=$first_index;$i<($first_index+$pagination_index);$i++){
            if($i <=$totalpage ){
            ?>
            <li <?php echo ($page_no==$i)?'class="active"':'';?>><a href="mediaroom1?page=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php
        }}
        ?>
        <li <?php echo ($page_no==$totalpage)?'class="disabled"':'';?>><a href="mediaroom1?page=<?php echo ($page_no < $totalpage)?$page_no+1:$totalpage;?>">Next</a></li>
        <li <?php echo ($page_no==$totalpage)?'class="disabled"':'';?>><a href="mediaroom1?page=<?php echo $totalpage;?>">Last</a></li>
    </ul>
</div>



      <!-- <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>
        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-12 allvideoblock">

            <div class="allvideobox">


                <img src="system/themes/marketplace/images/videodemoimg.jpg" class="videoimg">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay">

            </div>

                <h2>Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. (Lorem Ipsum)</h2>

            <h3>See Full Interview</h3>

            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">5,034,694 views    </td>
                    <td  align="right" valign="middle"> 4 days ago</td>
                </tr>
            </table>



        </div>-->



        <div class="clearfix"></div>

        </div>




    </div>


<div class="container-fluid mediaroom_block3">

    <h2> <?php
        $mediaroomblock3h2='Please enter in your information here to receive updates from our
media room to your email as they are added!
';
        echo $AI->get_defaulted_dynamic_area('mediaroomblock3h2',$mediaroomblock3h2);
        ?></h2>

</div>


<div class="container-fluid mediaroom_formblock">
    <div class="container-fluid mediaroom_formblock_wrapper">

        <div class=" mediaroom_formblockcon">

            <div class=" mediaroom_formblockdiv">
            <img src="system/themes/marketplace/images/mediaroom_formlogo.png" class="formlogo">

            <div class="form-groupd2">
                <label>First name</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>
            <div class="form-groupd2">
                <label>Last name</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>
            <div class="form-groupd2">
                <label>Company </label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>
            <div class="form-groupd2">
                <label>eMail</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>
            <div class="form-groupd2">
                <label>Telephone</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>
            <div class="form-groupd2">
                <label>zip code</label>
                <input type="text" class="form-control">
                <div class="clearfix"></div>

            </div>


            <div class="clearfix"></div>

            <input type="submit" value="SUBMIT" class="delsubmit2">
            </div>
    </div>
    </div>

</div>