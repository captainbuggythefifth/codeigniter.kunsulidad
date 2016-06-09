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
        
        <?php
            $this->load->view('users/profile/partials/images/carousel/index');
        ?>
        
        <?php
            $this->load->view('users/profile/partials/images/modal/photo-album/create/index');
        ?>
    </div>
</div>