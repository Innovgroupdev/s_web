<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

<div class="table-responsive p-4">
    <table class="table " id="table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Numero</th>
            <th class="p-3 text-right">Date  de création</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informers as $informer)
            <tr>
                <td class="p-4">{{ $informer->id }}</td>
                <td class="p-4">{{ $informer->email }}</td>
            <td class="p-4">{{ $informer->pays }}</td>
            <td class="p-4">{{ $informer->numero }}</td>
                <td class="p-4 text-right">
                {{ $informer->created_at }}
{{--                    {!! Form::open(['route' => ['informers.destroy', $informer->id], 'method' => 'delete']) !!}--}}
                    <!-- <div class='btn-group'>
                        <a href="{{ route('informers.show', [$informer->id]) }}"
                           class='btn btn-primary py-2 px-3 btn-xs'>
                            Détails
                        </a>
                     </div> -->
{{--                        <a href="{{ route('informers.edit', [$informer->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                   
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
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

<style>
    .br {
        border-radius: 6px !important;
    }

    .form-group label {
        color: #8D8D8D;
    }


    .entrep {
        display: none
    }

    /* =======Circular chex box=================== */
    .round {
        position: relative;
    }

    .round label {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
        height: 28px;
        left: 0;
        position: absolute;
        top: 0;
        width: 28px;
    }

    .round label:after {
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        content: "";
        height: 6px;
        left: 7px;
        opacity: 0;
        position: absolute;
        top: 8px;
        transform: rotate(-45deg);
        width: 12px;
    }

    .round input[type="checkbox"] {
        visibility: hidden;
    }

    .round input[type="checkbox"]:checked+label {
        background-color: #66bb6a;
        border-color: #66bb6a;
    }

    .round input[type="checkbox"]:checked+label:after {
        opacity: 1;
    }

    /* =========================================== */
    #btnSave {
        display: none
    }

    .terrain {
        display: none;
    }

    .blockTitle {
        font-size: 1.5rem;
    }

    td {
        max-width: 40rem !important;
        white-space: wrap !important;
        align-items: center;
    }

    tr {
        white-space: normal !important;
    }

    .modal {
        border: none !important
    }
    .buttons-excel{
        background-color: #346B37!important;
        border-color: #346B37!important;
        border-radius: 5px!important;
        color:#fff!important;
        background-image:none!important
    }
    .buttons-copy{
        background-color: #3C68E2!important;
        border-color: #3C68E2!important;
        border-radius: 5px!important;
        color:#fff!important;
        background-image:none!important
    }
    .buttons-pdf{
        background-color: #E23C3C!important;
        border-color: #E23C3C!important;
        border-radius: 5px!important;
        color:#fff!important;
        background-image:none!important
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background-color: #E28C3C!important;
        border-color: #E28C3C!important;
        border-radius: 5px!important;
        color:#fff!important;
        background-image:none!important 
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.disabled{
        background-color: #8A8989!important;
        border-color: #8A8989!important;
        border-radius: 5px!important;
        color:#fff!important;
        background-image:none!important 
    }
    .dataTables_info,.dataTables_paginate {
            margin-top: 1rem;
    }
    table.dataTable.no-footer {
    border-bottom: 1px solid #D4D4D4!important;
    border-top: 1px solid #D4D4D4!important;
    
}
thead tr th{
    border-bottom: 1px solid #D4D4D4!important;
}
</style>