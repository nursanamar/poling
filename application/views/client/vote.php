<section class="portofolio">
  <div class="cut cut-top"></div>
  <div class="container">
    <div class="row intro-tables">
      <?php foreach ($data as $key => $value) { ?>
        <div class="col-md-<?php echo $col ?>">
          <div class="intro-table intro-table-hover" style="background-image:url(<?php echo base_url()."assets/img/portfolio/".$value['gambar']; ?>)">
            <h5 class="white heading hide-hover"><?php echo $value['judul']; ?></h5>
            <div class="bottom">
              <h4 class="white heading small-heading no-margin regular">Vote</h4>
              <h4 class="white heading small-pt">Atau Baca lebih lanjut</h4>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <a href="#" onclick="detail('<?php echo "id".$key ?>')" class="btn btn-white-fill expand">Register</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <a href="#" class="btn btn-white-fill expand" style="margin-left:0">Register</a>
                </div>
              </div>

            </div>
          </div>

        </div>

      <?php } ?>
    </div>
  </div>
</section>
