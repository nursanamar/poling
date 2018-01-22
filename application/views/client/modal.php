<?php foreach ($data as $key => $value) { ?>
  <div class="mobile-nav" id="id<?php echo $key ?>">
    <div class="row" style="overflow-y:scroll;max-height:100%">
      <div class="col-md-12" >
        <div class="row">
          <h1><?php echo $value['judul'] ?></h1>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6">
            <img src="<?php echo base_url()."upload/".$value['gambar']; ?>" alt="" style="max-width:80%">

          </div>
          <iframe class="col-sm-6 col-md-6" height="80%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyDwUZr6bwczKCgOOjWnHWeN50ePoqtpnUE&q=record+stores+in+Seattle" allowfullscreen>
</iframe>
        </div>
        <div class="row">
        </div>
        <div class="row">
          <div style="text-align:left;margin-top:15px;" class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
            <?php echo $value['description'] ?>
          </div>

        </div>
      </div>
    </div>
    <a style="margin-top:10px" href="#" class="close-link"><i class="arrow_up"></i></a>
  </div>
<?php } ?>
<script type="text/javascript">
  function detail(id) {
    $('#'+id).addClass('active').on('click',".close-link",function() {
      this.removeClass('active');
    });
  }
</script>
