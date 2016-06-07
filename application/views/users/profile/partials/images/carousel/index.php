<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>

    </ol>

    <div class="carousel-inner" role="listbox">

        <?php
        $iCtr = 0;
        foreach ($aImages as $image):

            ?>
            <div class="item <?php if($iCtr ==0) echo "active" ?>">
            <img src="<?php echo base_url() . $image?>" alt="...">
            <div class="carousel-caption">
                ...
            </div>
            <?php

            $iCtr++;
        endforeach;
        ?>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>