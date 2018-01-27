<div class="">
  <div class="row">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Ganti password</h3>
        </div>
      </div>
      <div class="clearfix">

      </div>
      <div class="row">

      </div>
      <div class="clearfix">

      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_content">
              <form class="form-horizontal form-label-left" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Password lama</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="password" name="old">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Password baru</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="password" name="new">
                  </div>
                </div>
                <?php if ($this->session->has_userdata("error")) { ?>
                  <div class="clearfix"></div>
                  <span class="alert alert-danger">
                    <b>Gagal</b> <?php echo $this->session->flashdata('error'); ?>
                  </span>
              <?php  }
                ?>
                <?php if ($this->session->has_userdata("message")) { ?>
                  <div class="clearfix"></div>
                  <span class="alert alert-info">
                    <b>Berhasil</b> <?php echo $this->session->flashdata('message'); ?>
                  </span>
              <?php  }
                ?>
                <div class="ln_solid">

                </div>
                <div class="form-group">
                  <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <input class="btn btn-primary" type="submit" name="submit" value="Ganti">
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
