<div class="">
  <div class="row">
    <div class="page-title">
      <div class="title_left">
        <h3>Buat Pilihan</h3>
      </div>
    </div>
    <div class="clearfix">

    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <form class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url().'admin/add/option' ?>" method="post">
          <input type="hidden" name="idVote" value="<?php echo $vote ?>">
          <?php for ($i=1; $i <= $option; $i++) { ?>
            <div class="x_panel">
              <div class="x_title">
                <h2><?php echo 'Pilihan '.$i ?></h2>
                <div class="clearfix">

                </div>
              </div>
              <div class="x_content">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Nama</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="text" name="judul[]">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">gambar</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="file" name="gambar[]">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Deskripsi</label>
                  <div class="col-md-6 col-sm-6">
                    <textarea name="description[]" rows="8" cols="80"></textarea>
                  </div>
                </div>
              </div>
            </div>
      <?php } ?>
          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
              <input type="submit" class="btn btn-primary btn-large" value="Buat">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
