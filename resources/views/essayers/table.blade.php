<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">

<div class="table-responsive p-4">
    <table class="table" id="table">
        <thead>
        <tr>
         <th class="p-4">Id</th>
        <th class="p-4">Nom</th>
        <th class="p-4">Numero</th>
        <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Profession</th>
        <th colspan="3" class="p-4">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($essayers as $essayer)
            <tr>
                <td class="p-4">{{ $essayer->id }}</td>
                <td class="p-4">{{ $essayer->nom }}</td>
                <td class="p-4">{{ $essayer->numero }}</td>
                <td class="p-4">{{ $essayer->email }}</td>
                <td class="p-4">{{ $essayer->pays }}</td>
                <td class="p-4">{{ $essayer->profession }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('essayers.show', [$essayer->id]) }}" data-toggle="modal" data-target="#exampleModalCenter{{ $essayer->id }}"
                            class='btn btn-primary py-2 px-3 btn-xs'>
                            Details
                        </a>
                    </div>
                </td>
            </tr>
            <div class="modal fade" id="exampleModalCenter{{ $essayer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $essayer->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: none;">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body text-left pb-0 pt-0">
                                               
                                           
                                            
                                             <!-- Comments areas -->
                                         <div class="container-fluid">
                                       
                                            <div class="item-comment-area comtainer-fluid">
                                                <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="{{asset('images/cible-app-avatar.png')}}" style="border-radius:50%" alt="" width="50" height="50">
                                                    </div>
                                                    <div class="name ml-3 mt-2">
                                                        <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{ $essayer->nom }}</h3>
                                                        <span class="small mt-3" style="line-height: .5rem">{{ $essayer->email }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                
                                                </div>
                                                </div>
                                                <div class="comment-text">
                                                <p class="text-secondary mt-3 ">
                                                {{ $essayer->pays }}, {{ $essayer->numero }} 
                                                </p>
                                                <p class="text-secondary mt-3 ">
                                               <strong>Profession </strong> | {{ $essayer->profession }}
                                                </p>
                                                <p class="text-secondary mt-3 " > 
                                                <strong>Raison </strong> <br>
                                                <span class="m-0 me-2 text-info" style="font-size:1.75rem;color:gray"> &#128630;</span>
                                                {{ $essayer->raison }}
                                                </p>
                                                <p class="small text-right text-secondary">
                                                {{ $essayer->created_at }}
                                                </p>
                                                </div>
                                            </div>
                                          
                                        
                                        </div>
                                        <!-- End Comments areas -->
                                            </div>
                                           
                                        </div>
                                        </div>
                                    </div>
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
dataSrc: "Data",
ajax: {},
aoColumns : [
    null,
    null,
    null,
    null,
    null,
    null,
],
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