<?php foreach ($data as $key => $value) { ?>
  <div class="mobile-nav" id="id<?php echo $key ?>">
    <div class="row" style="overflow-y:scroll;max-height:80%">
      <div class="col-md-12" >
        <div class="row">
          <h1><?php echo $value['judul'] ?></h1>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <img src="<?php echo base_url()."upload/".$value['gambar']; ?>" alt="" style="max-width:80%">

          </div>
          <div style="height:200px" class="col-sm-6 col-md-6" id="map<?php echo $key ?>">

          </div>
        </div>
        <div class="row">
        </div>
        <div class="row">
          <div style="text-align:left;margin-top:15px;" class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
            <?php echo $value['description'] ?>
          </div>

        </div>
        <div class="row" style="min-height:10%">

        </div>
      </div>
    </div>
    <a style="margin-top:10px" href="#" class="close-link"><i class="arrow_up"></i></a>
  </div>
<?php } ?>
<script>


      function initMap() {
        <?php foreach ($data as $key => $value) { ?>
          <?php $latlng = explode(",",$value['lokasi']) ?>
          var loc<?php echo $key ?> = {lat: <?php echo $latlng[0]; ?>, lng:  <?php echo $latlng[1]; ?>};
          var map<?php echo $key ?> = new google.maps.Map(document.getElementById('map<?php echo $key ?>'), {
            zoom: 7,
            center: loc<?php echo $key ?>
          });
          var marker<?php echo $key ?> = new google.maps.Marker({
            position: loc<?php echo $key ?>,
            map: map<?php echo $key ?>
          });
         <?php } ?>
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAW7RwL3Db-Qjj71xs8ZW0xj6kvpZgT9AQ&callback=initMap">
    </script>
<script type="text/javascript">
  function detail(id) {
    $('#'+id).addClass('active').on('click',".close-link",function() {
      this.removeClass('active');
    });
  }
</script>
