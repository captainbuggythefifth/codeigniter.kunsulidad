<video autoplay loop poster="polina.jpg" id="bgvid">
    <!--<source src="polina.webm" type="video/webm">-->
    <source src="/assets/videos/home.mp4" type="video/mp4">
</video>
<section class="section-navigation">
    <div class="container-fluid">
        <div class="header-container-left">
            <div class="logo">
                <img src="">
            </div>
        </div>
        <div class="header-container-right">
            <div class="toggle-navigation-right">
                <i class="fa fa-th fa-3x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="members-container">
                    <div class="members">
                        <div class="row">
                            <!--<div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img class="img img-responsive img-members img-thumbnail img-circle img-rounded" src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.0-9/1937156_10206864744250477_5559134031423174693_n.jpg?oh=051997a7416de6ef4747d24bdd86107a&oe=57E37C20" alt="...">
                                    <div class="caption">
                                        <h3>Gaudencio Racho Teves V</h3>
                                        <p>Creator</p>
                                        <p>
                                            <a href="/members/gaudencio.html" class="btn btn-primary" role="button">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img class="img img-responsive img-members img-thumbnail img-circle img-rounded" src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.0-9/13241414_1335010166514105_7635893780068455148_n.jpg?oh=0651dcb64b1985a00d7b2bb0e9402fc6&oe=57E2EC62" alt="...">
                                    <div class="caption">
                                        <h3>Ronnel Rabino</h3>
                                        <p>Craftsman</p>
                                        <p>
                                            <a href="/members/ronnel.html" class="btn btn-primary" role="button">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img class="img img-responsive img-members img-thumbnail img-circle img-rounded" src="https://scontent-iad3-1.xx.fbcdn.net/v/t1.0-9/549044_394122020597826_1561316267_n.jpg?oh=dbdc13d78326d86e13a2dc60afbfbbf3&oe=57DCFB5B" alt="...">
                                    <div class="caption">
                                        <h3>Nikho Miguel</h3>
                                        <p>Pastor</p>
                                        <p>
                                            <a href="/members/nikho.html" class="btn btn-primary" role="button">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img class="img img-responsive img-members img-thumbnail img-circle img-rounded" src="https://scontent-iad3-1.xx.fbcdn.net/v/t1.0-9/1620650_10201635344425572_465045068_n.jpg?oh=64775c89ff87f0cf38820ccfb2603a51&oe=57C5735A" alt="...">
                                    <div class="caption">
                                        <h3>Paul John Siazon Vender</h3>
                                        <p>Data Entry</p>
                                        <p>
                                            <a href="/members/paul.html" class="btn btn-primary" role="button">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>-->

                            <?php foreach ($aUsers as $aUser): ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img class="img img-responsive img-members img-thumbnail img-circle img-rounded" src="<?php echo $aUser['photoProfile']['channel']?>" alt="...">
                                        <div class="caption">
                                            <h3><?php echo ($aUser['first_name'] . " " . $aUser['middle_name'] . " " . $aUser['last_name'])?></h3>
                                            <p><?php echo $aUser['profession'] ?></p>
                                            <p>
                                                <a href="/members/<?php echo $aUser['username'] ?>" class="btn btn-primary" role="button">Read More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>