<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" media="all" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" media="all" href="/assets/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" media="all" href="/assets/css/ripples.min.css">
    <link rel="stylesheet" media="all" href="/assets/css/animate.css">
    <link rel="stylesheet" media="all" href="/assets/css/style.css">
    <title>ALALAH</title>
</head>
<body>

<!--
    Start rendering of individual pages
-->

<?php
    @$aUsers = $aUsers;
    @$aUser = $aUser;


    $aLoad['aUsers'] = $aUsers;
    $aLoad['aUser'] = $aUser;
    foreach ($aViews as $view){
        $this->load->view($view, $aLoad);
    }
?>

<!--
    End rendering
-->

<div class="navigation-menu-right">

</div>
<div class="navigation-container">
    <div class="navigation-body">
        <div class="navigation">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="navigation-items">
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="navigation-item navigation-item-members">
                                <div class="icon-text-container">
                                    <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                                    <h3>
                                        Members
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="navigation-item navigation-item-photos">
                                <div class="icon-text-container">
                                    <i class="fa fa-file-archive-o fa-3x" aria-hidden="true"></i>
                                    <h3>
                                        Files
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="navigation-items">
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="navigation-item navigation-item-adventures">
                                <div class="icon-text-container">
                                    <i class="fa fa-plane fa-3x" aria-hidden="true"></i>
                                    <h3>
                                        Adventures
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="navigation-item navigation-item-photos">
                                <div class="icon-text-container">
                                    <i class="fa fa-file-archive-o fa-3x" aria-hidden="true"></i>
                                    <h3>
                                        Files
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/material.min.js"></script>
<script type="text/javascript" src="/assets/js/ripples.min.js"></script>

<script type="text/javascript">
    $('.toggle-navigation-right').on('click', function () {
        console.log("clicked");
        var bodyOffset = $('body').offset();
        var bodyHeight = $('body').height();
        $('.navigation-menu-right').css({
            'top': bodyOffset.top,
            'left': bodyOffset.left,
            'height': bodyHeight
        }).show();
        $('.navigation-container').show();
        $('.navigation-container').find(".navigation-items").addClass("animated slideInRight");

    });
    $('.navigation-menu-right').on('click', function () {
        $(this).hide();
        $('.navigation-container').hide();
    })
</script>
</body>
</html>