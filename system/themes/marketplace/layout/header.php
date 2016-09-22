<?php
/**
 * Created by PhpStorm.
 * User: Iftekar
 * Date: 9/8/2016
 * Time: 2:25 PM
 */
global $AI;

//$AI->skin->css('system/themes/Dnaofsuccess/styles.live.css','high');
//$AI->skin->css('system/themes/emerald/styles.live.css');
$AI->skin->css('system/themes/marketplace/css/bootstrap.min.css');
$AI->skin->css('system/themes/marketplace/css/style.css');
$AI->skin->css('system/themes/marketplace/css/media.css');
$AI->skin->js('system/themes/marketplace/js/bootstrap.min.js');

/*<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>*/

?>


<div class="container-fluid topblock">

    <div class="topblok_wrapper">

        <div class="toplogo">
         <?php   $hometoplogo='<a href="index1.html"><img src="system/themes/marketplace/images/logo2.png" alt="#"></a>';

           echo $AI->get_defaulted_dynamic_area('hometopblock',$hometoplogo);
            ?>
        </div>
        <div class="container-fluid menutopwrap">
            <div class="top-menu">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <span class="responsivemenu">MENU</span>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                         <?php $navmenu='<ul class="nav navbar-nav">

                                <li><a href="javascript:void(0)" class="active">Home</a></li>
                                <li><a href="javascript:void(0)">Conference Info</a></li>
                                <li><a href="javascript:void(0)">Speak Info</a></li>
                                <li><a href="javascript:void(0)">Get Passes</a></li>
                                <li><a href="javascript:void(0)">Exhibitors</a></li>
                                <li><a href="javascript:void(0)">T & A</a></li>
                                <li><a href="javascript:void(0)">DS eZine</a></li>
                                <li><a href="javascript:void(0)">Media Room</a></li>
                                <li><a href="javascript:void(0)">Contact</a></li>
                            </ul>';

                            echo $AI->get_defaulted_dynamic_area('navmenu',$navmenu);
                            ?>


                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

</div>
