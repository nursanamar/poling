<div class="">
  <div class="row top-tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count"><?php echo $today; ?></div>

        <h3>Vote Hari ini</h3>
        <p></p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count"><?php echo $total; ?></div>

        <h3>Vote total</h3>
        <p></p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
        </div>
        <div class="count"><?php echo $kecamatan; ?></div>

        <h3>Kecamatan</h3>
        <p></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12">
      <div class="dashboard_graph x_panel">
        <div class="row x_title">
          <h3>Grafik Vote</h3>
        </div>
        <div class="x_content">
          <canvas id="graph"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="x_panel">
        <div class="x_title">
          <h3>Tabel vote Perkecamatan</h3>
        </div>
        <div class="x_content">
          <?php $this->load->view('client/tabel') ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  var ctx = document.getElementById("graph");
  var mybarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php foreach ($option as $key => $value) {
      echo "'".$key,"',";
    } ?>],
    datasets: [{
    label: '# of Votes',
    backgroundColor: "#26B99A",
    data: [<?php foreach ($option as $value) {
      echo $value.",";
    } ?>]
    }]
  },

  options: {
    scales: {
    yAxes: [{
      ticks: {
      beginAtZero: true
      }
    }]
    }
  }
  });
});
</script>
