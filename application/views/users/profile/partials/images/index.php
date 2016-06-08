<div class="col-md-12">
    <div class="well">
        <h1>Images</h1>

        <?php
        $path = './uploads/users/' . $aUser['username'] . '/'; // '.' for current
        $aFolder = [];
        foreach (new DirectoryIterator($path) as $file) {
            if ($file->isDot()) continue;

            if ($file->isDir()) {
                $aFolder[] = $file->getFilename();
            }
        }
        ?>
        <div class="row">
        <?php
            foreach ($aFolder as $folder):
                ?>
                <div class="col-xs-6 col-sm-6 col-md-3 getPhotosFromDirectory" style="text-align: center" data-directory="<?php echo './uploads/users/' . $aUser['username'] . '/' . $folder . '/'?>">
                    <a href="javascript:void(0)" class="btn btn-danger btn-fab btn-raised btn-fab-lg" data-directory="<?php echo './uploads/users/' . $aUser['username'] . '/' . $folder . '/'?>"><i class="material-icons" data-directory="<?php echo './uploads/users/' . $aUser['username'] . '/' . $folder . '/'?>">folder</i></a>
                    <p><?php echo $folder?></p>
                </div>
                <?php
            endforeach;
        ?>
        </div>
        <div class="carousel-container">
            
        </div>
        <div class="custom-carousel carousel slide" data-ride="carousel" style="display: none">
            <!-- Indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href=".custom-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href=".custom-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>