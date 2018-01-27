<div class="">
  <div class="row">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Buat vote</h3>
        </div>
      </div>
      <div class="clearfix">

      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_content">
              <form class="form-horizontal form-label-left" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Nama Vote</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="text" name="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Deskripsi Vote</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="text" name="description">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Kabupaten</label>
                  <div class="col-md-6 col-sm-6">
                    <input id="area" required class="form-control col-md-7" type="text" name="kabupaten">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3">Jumlah Pilihan</label>
                  <div class="col-md-6 col-sm-6">
                    <input required class="form-control col-md-7" type="number" name="option">
                  </div>
                </div>
                <div class="ln_solid">

                </div>
                <div class="form-group">
                  <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <input class="btn btn-primary" type="submit" name="submit" value="Buat">
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
<script type="text/javascript">
function cariKabupaten() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
          /** @type {!HTMLInputElement} */(document.getElementById('area')),
          {
            types: ['(cities)'],
            region: 'ID',
            componentRestrictions: {country: 'id'}
          }
        );
        autocomplete.addListener('place_changed', function(){
          var res = autocomplete.getPlace();
          var kabupaten;
          res.address_components.forEach(function(arr) {
            if(arr.types[0] === 'administrative_area_level_2'){
              kabupaten = arr.long_name;
              $('#area').val(kabupaten);
            }
          })
          console.log(res.address_components);
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9gAn0rzglRCeE-q18BZyzMz_oNymbRvA&libraries=places&language=id&callback=cariKabupaten" async defer></script>
