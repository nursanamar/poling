<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/froala_editor.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/froala_style.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/code_view.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/image_manager.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/image.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/table.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/video.css">
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
                  <div style="min-height:200px" class="col-sm-6 col-md-offset-3 col-md-6 col-sm-offset-3" id="map<?php echo $i ?>">

                  </div>
                </div>
                <input type="hidden" name="lokasi[]" id="lokasi<?php echo $i ?>">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Deskripsi</label>
                  <div style="min-height:50%" class="col-md-6 col-sm-6">
                    <textarea name="description[]" class="decri"></textarea>
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

<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>froala_editor.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/align.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/code_view.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/draggable.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/image.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/image_manager.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/link.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/lists.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/table.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/video.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/url.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/"; ?>plugins/entities.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW7RwL3Db-Qjj71xs8ZW0xj6kvpZgT9AQ&callback=initMap"
   async defer></script>
<script type="text/javascript">
  <?php for ($i=1; $i <= $option ; $i++) {
    echo "var map".$option."\n";
  } ?>

  function initMap(){
    var markerArray =[];
    <?php
      for ($i=1; $i <= $option ; $i++) { ?>
        var map<?php echo $i ?> = new google.maps.Map(document.getElementById('map<?php echo $i ?>'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
          });
        var marker<?php echo $i ?>;
        map<?php echo $i ?>.addListener('click',function(e) {
          console.log(marker<?php echo $i ?>);
          if (marker<?php echo $i ?> !== undefined) {
            marker<?php echo $i ?>.setMap(null);
            marker<?php echo $i ?> = new google.maps.Marker({
              position: {lat: e.latLng.lat(),lng: e.latLng.lng()},
              map : map<?php echo $i ?>,
            });
          }else {
            marker<?php echo $i ?> = new google.maps.Marker({
              position: {lat: e.latLng.lat(),lng: e.latLng.lng()},
              map : map<?php echo $i ?>,
            });
            console.log(marker<?php echo $i ?>);
          }
          document.getElementById('lokasi<?php echo $i ?>').value = e.latLng.lat()+','+e.latLng.lng();
        });
    <?php  }
     ?>
  }

  $(document).ready(function(){
      $('.decri').froalaEditor({ placeholderText: null});
  });
</script>
