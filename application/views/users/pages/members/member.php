<?php var_dump($aUser);die()?>
<div class="background-member-solo" style="background-image: url(<?php echo (base_url() . $aUser['photoBackground']['channel']); ?>)">

</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="member-solo-container">
                    <div class="member-solo">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="member-solo-header"></div>
                            </div>
                        </div>
                        <div class="member-solo-body col-sm-12 col-md-12">
                            <div class="member-solo-body-left col-sm-4 col-md-4">
                                <div class="img-container img-responsive img-thumbnail">
                                    <img src="<?php echo base_url() . $aUser['photoProfile']['channel']; ?>" alt="">
                                </div>
                            </div>
                            <div class="member-solo-body-right col-sm-8 col-md-8">
                                <div class="info-container">
                                    <div class="info">
                                        <div class="info-name-container">
                                            <div class="hello">
                                                <p>HELLO</p>
                                            </div>
                                            <div class="name">
                                                <p><span>I'm </span><span><b><?php echo $aUser['first_name'] . " " . $aUser['middle_name'] . " " . $aUser['last_name']; ?></b></span></p>
                                            </div>
                                            <div class="profession">
                                                <p><?php echo ($aUser['profession'] != "" ? $aUser['profession'] : "Not yet specified")?></p>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="info-details-container">
                                            <div class="info-details-title-left col-xs-4 col-sm-6 col-md-4">
                                                <div class="details-title-age">
                                                    <b>AGE</b>
                                                </div>
                                                <div class="details-title-address">
                                                    <b>ADDRESS</b>
                                                </div>
                                                <div class="details-title-email">
                                                    <b>E-MAIL</b>
                                                </div>
                                                <div class="details-title-phone">
                                                    <b>PHONE</b>
                                                </div>
                                            </div>
                                            <div class="info-details-output-right col-xs-8 col-sm-6 col-md-6">
                                                <div class="details-output-age">
                                                    <?php echo ($aUser['age']  != "" ? $aUser['age'] : "Not yet specified")?>
                                                </div>
                                                <div class="details-output-address">
                                                    <?php echo ($aUser['address']  != "" ? $aUser['address'] : "Not yet specified")?>
                                                </div>
                                                <div class="details-output-email">
                                                    <?php echo ($aUser['email']  != "" ? $aUser['email'] : "Not yet specified")?>
                                                </div>
                                                <div class="details-output-phone">
                                                    <?php echo ($aUser['phone']  != "" ? $aUser['phone'] : "Not yet specified")?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="member-solo-footer col-xs-12 col-sm-12 col-md-12">
                            <div class="member-footer">
                                <div class="social-media-container">
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                        <div class="social-media-icon-container">
                                            <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>