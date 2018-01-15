<table id="tableview" class="col-md-12 table table-bordered">
  <thead>
    <tr>
      <th>Kecamatan</th>
      <?php foreach ($data as $value) {
        echo "<th>".$value['judul']."</th>";
      } ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($table as $key => $values) {
      echo "<tr>
        <th>".$key."</th>
      ";
      foreach ($values as $value) {
        echo "<th>".$value."</th>";
      }
      echo "</tr>";
    }
     ?>
  </tbody>
</table>
