<?php



$pagename = AI_PAGE_NAME;



//IF IT HAS A PAGES FILE, USE THAT

if(file_exists('system/themes/marketplace/pages/'.$pagename.'.php')){

    require('system/themes/marketplace/pages/'.$pagename.'.php');

}

else {

    echo $AI->get_dynamic_area('Page-'.$pagename);

}

