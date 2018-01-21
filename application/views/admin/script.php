<script type="text/javascript">
var sTable;

function hapus(idVote) {
  $.get('<?php echo base_url()."admin/vote/hapus/" ?>'+idVote,function() {
    sTable.ajax.reload();
  })
}

function tutup(idVote) {
  $.get('<?php echo base_url()."admin/vote/close/" ?>'+idVote,function() {
    sTable.ajax.reload();
  })
}

function buka(idVote) {
  $.get('<?php echo base_url()."admin/vote/open/" ?>'+idVote,function() {
    sTable.ajax.reload();
  })
}

$(document).ready(function() {
  $("#vote").show();
  $('#tableview').DataTable();
   sTable = $('#vote').DataTable({
     "aaSorting":[[0, "desc"]],
     "processing": true,
     "serverSide": true,
     "ajax": {
     	'url': '<?php echo base_url()."admin/tabelvote" ?>',
     	'type': 'POST',
     },
     "columns": [
       {data : 'nama'},
       {data : 'description'},
       {data : 'kabupaten'},
       {data : 'status'},
       {data : 'total'},
       {data : 'aksi'}
      ]
   });



 });
</script>
