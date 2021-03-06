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
    <link href="/assets/css/snackbar.min.css" rel="stylesheet">
    <title>ALALAH</title>
</head>
<body>

<div class="container login-register-container">
    <?php
    foreach ($aViews as $view){
        $this->load->view($view);
    }
    ?>
</div>



<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/js/material.min.js"></script>
<script type="text/javascript" src="/assets/js/ripples.min.js"></script>
<script type="text/javascript" src="/assets/js/snackbar.min.js"></script>

<?php
    if(isset($aJS) && is_array($aJS)){
        foreach ($aJS as $js){
            echo "<script type='text/javascript' src='" . $js . "'></script>" . PHP_EOL;
        }
    }
?>

<div class="user-container" style="display: none">
    <input type="hidden" name="iUserID" value="12"/>
</div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '161055383981422',
            xfbml      : true,
            version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    $.material.init();
    $('[data-toggle="tooltip"]').tooltip();
</script>

</body>
</html>