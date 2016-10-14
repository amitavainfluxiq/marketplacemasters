<!-----------------Showing popup when clicked on pa link in header------------------ -->

<!--<script>
    $(window).load(function(){
        $('#exhibitors').modal('show');
    })
</script>
<?php
/*/*----------------Show success popup after submit form----------------------
if (isset($_GET['ai_sid'])) {
    if(isset($_SESSION['marketplace']))
    {
        unset($_SESSION['marketplace']);

        ?>
        <script>
            $(window).load(function(){
                setTimeout(function () {
                    $('.txtclass').val('');

                },6000);
                $("#txModal").modal('show');
                $('#exhibitors').modal('hide');
                setTimeout(function(){
                    $("#txModal").modal('hide');
                    $('#exhibitors').modal('show');
                },8000);
            });
        </script>

    <?php /*}
}
else{
    ?>
    <script>
        $(function(){
            $('#exhibitors').modal('show');
            setTimeout(function(){
                $('#jonbox').css('z-index','9999999')
            },2000);
        })
    </script>



    --><?php
/*    unset($_SESSION['marketplace']);
}
?>
<div class="container-fluid homebannerblock">
    <div class="imgbgright">

        <img src="system/themes/marketplace/images/banner.jpg">
    </div>
    <div class="bannercontentblock">

        <h3>MarketPlace Master Dealership Series</h3>

        <img src="system/themes/marketplace/images/bannertxt_expo.png">
        <div class="bannercontent">
            <h3>JOIN US IN DALLAS, TEXAS  I September 18, 19, 20</h3>
            <h4>Presale Tickets Available October 15th, 2016 </h4>
            <p>Get On Top Of The Radically Changing Market Place.<br/>Put the POWER back into your Marketing Strategies.<br/>
                Digital Marketing is Going LOCAL. Are You Ready? </p>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="clearfix"></div>

<!--<div id="exhibitors" class="modal fade" role="dialog">

    <div class="modal-dialog">


        <div class="modal-content newmodalpopup">

            <div class="closenewpopup"><button type="button" class="btn btn-default closenewpopup" data-dismiss="modal"></button></div>
            <form  class='kform' name='landing_page' action="<?/*=$_SERVER['REQUEST_URI']*/?>" target="_self" method="post" id="exhibitors">
            <div class="modal-body">
                <img src="system/themes/marketplace/images/popuplogo2.png" alt="#"  class="popuplogo2">
                <h2>You will be able to get in early and pick
                    your booth space starting October 15th, 2017!
                </h2>

                <h3>Please fill this out to be informed the minute this goes live!</h3>

                <div class="contactform_divpopup">

                    <div class="form-groupd4">
                        <label>First name:</label>
                        <input class="form-control txtclass" type="text" name="first_name" value="">
                        <div class="clearfix"></div>
                    </div>


                    <div class="form-groupd4">
                        <label>Last name:</label>
                        <input class="form-control txtclass" type="text" name="last_name" value="">
                        <div class="clearfix"></div>
                    </div>



                    <div class="form-groupd4">
                        <label>Company: </label>
                        <input class="form-control txtclass" type="text" name="company" value="">
                        <div class="clearfix"></div>
                    </div>


                    <div class="form-groupd4">
                        <label>Email: </label>
                        <input class="form-control txtclass" type="text" name="email" value="">
                        <div class="clearfix"></div>
                    </div>



                    <div class="form-groupd4">
                        <label>Phone: </label>
                        <input class="form-control txtclass" type="text" name="phone" value="">
                        <div class="clearfix"></div>
                    </div>



                    <input class="delsubmit4" type="submit" value="Submit">



                </div>

            </div>
            </form>

        </div>

    </div>
</div>-->
