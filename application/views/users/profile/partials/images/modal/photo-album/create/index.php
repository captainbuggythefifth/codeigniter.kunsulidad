<div class="photo-album-add">
    <a href="#" class="btn btn-info btn-fab btn-fab-mini btn-raised" data-toggle="modal" data-target="#modal-photo-album-add"><i class="material-icons">library_add</i></a>
    <div class="modal" id="modal-photo-album-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Add Photo Album</h4>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('imageupload/doupload');?>
                    <div class="form-group label-floating">
                        <label class="control-label" for="photo-album-name">Photo Album Name</label>
                        <div class="input-group">
                            <input type="text" id="photo-album-name" class="form-control" name="photo-album-name">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-fab btn-fab-mini">
                                  <i class="material-icons">functions</i>
                              </button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" id="inputFile4" multiple="" class="create-photo-album" name="create-photo-album[]">
                        <div class="input-group">
                            <input type="text" readonly="" class="form-control" placeholder="">
                            <span class="input-group-btn input-group-sm">
                                <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="material-icons">attach_file</i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
                <?php
                    $this->load->view("users/profile/partials/images/modal/photo-album/preview/index")
                ?>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>