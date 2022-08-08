<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-1.12.3.js"></script> -->


<script>
$(document).ready(function() {
$.noConflict();
$('#table').DataTable( {
dom: 'Bfrtip',

buttons: [
    {
        extend: 'copy',
        text: 'Copy',
       
    },
    {
        extend: 'excel',
        text: 'Excel',
       
    },
    {
        extend: 'pdf',
        text: 'Pdf',
        orientation: 'landscape',
        pageSize: 'LEGAL'
       
    },
   
],
select: true
} );
} );
  
   
</script>