<?php foreach ($data as $key => $value) { ?>
  <div class="mobile-nav" id="id<?php echo $key ?>">
    <div class="row" style="overflow-y:scroll;max-height:100%">
      <div class="col-md-8 col-md-offset-2" >
        <div class="row">
          <h1><?php echo $value['judul'] ?></h1>
        </div>
        <div class="row">
          <img src="<?php echo base_url()."assets/img/portfolio/".$value['gambar']; ?>" alt="" style="max-width:80%">
        </div>
        <div class="row">
          <?php echo $value['description'] ?>
        </div>
      </div>
    </div>
    <a href="#" class="close-link"><i class="arrow_up"></i></a>
  </div>
<?php } ?>
<script type="text/javascript">
  function detail(id) {
    $('#'+id).addClass('active').on('click',".close-link",function() {
      this.removeClass('active');
    });
  }
</script>
