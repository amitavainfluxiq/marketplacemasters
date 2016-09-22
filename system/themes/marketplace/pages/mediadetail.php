<?php
/**
 * Created by PhpStorm.
 * User: kt
 * Date: 9/20/16
 * Time: 11:54 AM
 */
if (isset($_SERVER['QUERY_STRING'])) {
   $str=$_SERVER['QUERY_STRING'];
  $arr=  explode('&',$str);
    $singlearr=array();
    $arr1=explode('=',$arr[1]);
    $id=$arr1[1];
    $resone=$AI->db->getAll("SELECT * FROM video_manager WHERE id = ".$id);
    $singlearr=$resone[0];
    if(count($resone[0])>0){
        $singlearr=$resone[0];
    }
    $res=$AI->db->getAll("SELECT * FROM video_manager WHERE id !=".$id." AND status=1 ORDER BY RAND() limit 0,3");
}
?>


<div class="container-fluid conference_banner">

    <div class="conference_banner_img">

        <?php
        $mediadetailbannerimg=' <img src="system/themes/marketplace/images/mediaroom_banner1.jpg">';
        echo $AI->get_defaulted_dynamic_area('mediadetailbannerimg',$mediadetailbannerimg);
        ?>




    </div>
    <div class="clearfix"></div>


    <div class="conference_banner_bgblock1"></div>


    <div class="clearfix"></div>



    <div class="conference_banner_text">
        <div class="bannertextblock3">
            <h6>

                <?php
                $mediadetailbannerh6text='MarketPlace Master Dealership Series';
                echo $AI->get_defaulted_dynamic_area('mediadetailbannerh6text',$mediadetailbannerh6text);
                ?>
            </h6>

            <div class="mediaroombannerimg2"> <?php
                $mediadetailbannerimg2=' <img src="system/themes/marketplace/images/mediaroom_bannerimg2.png">';
                echo $AI->get_defaulted_dynamic_area('mediadetailbannerimg2',$mediadetailbannerimg2);
                ?>
            </div>

            <div class="bannertextblock4">

                <h1>
                    <?php
                    $mediadetailbannertext3='
                September 7th<br/>
                8th and 9th';
                    echo $AI->get_defaulted_dynamic_area('mediadetailbannertext3',$mediadetailbannertext3);
                    ?>
                </h1>



            </div>

        </div>



        <div class="clearfix"></div>
    </div>

</div>


<div class="container-fluid mediaroom_block2">

    <h2> <?php
        $mediadetailblock2h2=' Media Details';
        echo $AI->get_defaulted_dynamic_area('mediadetailblock2h2',$mediadetailblock2h2);
        ?></h2>
    <h3><?php
        $mediadetailblock2h3=' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
        echo $AI->get_defaulted_dynamic_area('mediadetailblock2h3',$mediadetailblock2h3);
        ?></h3>

</div>
<div class="container-fluid mediadetailbody">

<div class="container-fluid mediadetail_block3">

    <div class="mediadetail_block3_left">


        <div class="videodetailblock1">
            <div class="videoWrapper">

<?php if($singlearr['type']==0){
    ?>

                <iframe width="560" height="349" src="http://www.youtube.com/embed/<?php echo $singlearr['file']?>?autoplay=1&rel=0&hd=1?rel=0" frameborder="0" allowfullscreen></iframe>
<?php }
if($singlearr['type']==1){
    ?>
    <video width="560" height="349" controls autoplay>
        <source src="uploads/video_manager/<?php echo $singlearr['file'] ?>" type="video/mp4">
    </video>
    <?php

}
?>
            </div>


            <h2><?php echo $singlearr['title']?></h2>
<!--            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>-->


        </div>



        <div class="videodetailblock2">

            <h2>Published on  <?php echo date('M d, Y',$singlearr['time'])?></h2>
<!--            <h2>Published on Feb 8, 2016</h2>-->

            <h3><?php echo $singlearr['description'] ?></h3>
<!--            <h3>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>-->


            </div>


        <div class="videodetailblock3">

            <div class="detailblock3_top">

                <div class="detailblock3_top_img"><img src="system/themes/marketplace/images/betoimg.jpg"></div>

                <div  class="detailblock3_top_con">
                    <h2>
                        Beto Paredes <br/>

                        <span>Lorem Ipsum is simply dummy text of the printing<br/>
                        and typesetting industry.</span>

                    </h2>

                    <label>1 hours ago</label>



                    <div class="clearfix"></div>
                </div>


                <div class="clearfix"></div>
            </div>

            <div class="detailblock3_bottom">

                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                <br/><br/>

                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

                <div class="detailblock3_bottom_img">
                    <img src="system/themes/marketplace/images/vdetail_img1.jpg">

                    <img src="system/themes/marketplace/images/vdetail_img2.jpg">

                    <img src="system/themes/marketplace/images/vdetail_img3.jpg">

                    <img src="system/themes/marketplace/images/vdetail_img4.jpg">

              <div class="clearfix"></div>

                    </div>

                </div>



          </div>



    </div>

    <div class="mediadetail_block3_right">
        <?php
        if(count($res)>0){
            foreach($res as $videoval){
                ?>
        <div class="allvideoblock2">

            <div class="allvideobox2">
                <?php if($videoval['type']==1){?>
                    <img src="system/themes/marketplace/images/vdetail_rimg1.jpg" class="videoimg2">
                <?php }
                if($videoval['type']==0){?>
                   <img src="https://i.ytimg.com/vi/<?php echo $videoval['file'] ?>/hqdefault.jpg" class="videoimg2">
                <?php }
                ?>


                <a href="/~mpmaster/mediadetail/?id=<?php echo $videoval['id'] ?>" ><img  src="system/themes/marketplace/images/play_icon2.png" class="videoplay2"></a>

              <!--  <img src="system/themes/marketplace/images/vdetail_rimg1.jpg" class="videoimg2">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay2">-->

            </div>



            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle"><?php echo $videoval['title'] ?></td>
                    <td  align="right" valign="middle"> <span>&nbsp;</span></td>
                </tr>
            </table>



        </div>
        <?php
            }
        }
        ?>

   <!--     <div class="allvideoblock2">

            <div class="allvideobox2">


                <img src="system/themes/marketplace/images/vdetail_rimg1.jpg" class="videoimg2">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay2">

            </div>



            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">Lorem Ipsum is simply text  (Lorem Ipsum)  </td>
                    <td  align="right" valign="middle"> <span>18,553 views</span></td>
                </tr>
            </table>



        </div>
        <div class="allvideoblock2">

            <div class="allvideobox2">


                <img src="system/themes/marketplace/images/vdetail_rimg1.jpg" class="videoimg2">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay2">

            </div>



            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">Lorem Ipsum is simply text  (Lorem Ipsum)  </td>
                    <td  align="right" valign="middle"> <span>18,553 views</span></td>
                </tr>
            </table>



        </div>
        <div class="allvideoblock2">

            <div class="allvideobox2">


                <img src="system/themes/marketplace/images/vdetail_rimg1.jpg" class="videoimg2">

                <img src="system/themes/marketplace/images/play_icon2.png" class="videoplay2">

            </div>



            <table border="0" width="100%">
                <tr>
                    <td align="left" valign="middle">Lorem Ipsum is simply text  (Lorem Ipsum)  </td>
                    <td  align="right" valign="middle"> <span>18,553 views</span></td>
                </tr>
            </table>



        </div>-->



    </div>


    <div class="clearfix"></div>

    </div>


    </div>