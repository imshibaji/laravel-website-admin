<div class="table-responsive">
<table id="datatable-buttons" class="table table-bordered dt-responsive dataTables_wrapper dt-bootstrap4 no-footer" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    @if(isset($thead))
        {{ $thead }}
    @else
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>City</th>
            <th>Satus</th>
        </tr>
    @endif
    </thead>

    <tbody>
    @if(isset($tbody))
        {!! $tbody !!}
    @else
        <tr>
            <td>Shibaji Debnath</td>
            <td>Dum Dum Cantoment</td>
            <td>Kolkata</td>
            <td>Active</td>
        </tr>
        <tr>
            <td>Shibaji Debnath</td>
            <td>Dum Dum Cantoment</td>
            <td>Kolkata</td>
            <td>Active</td>
        </tr>
    @endisset
    </tbody>
</table>
</div>

@section('css_plugins')
@parent
{{-- <!-- DataTables --> --}}
<link href="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
{{-- <!-- Responsive datatable examples --> --}}
{{-- <link href="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> --}}
<link href="{{ URL::asset( $assetLink . '/plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">
<style>
.dataTables_length{
    float: left;
}
.dt-buttons{
    padding-left: 25px;
}
</style>
@endsection
@section('js_plugins')
@parent
<!-- Required datatable js -->
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
{{-- <!-- Buttons examples --> --}}
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.colVis.min.js')}}"></script>
{{-- <!-- Responsive examples --> --}}
{{-- <script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.responsive.min.js')}}"></script> --}}
{{-- <script src="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.js')}}"></script> --}}
<script>
var want_export = @json($export);
$(document).ready(function() {
  //Buttons examples
  var table = $('#datatable-buttons').DataTable({
      lengthChange: true,
      buttons: want_export ? ['excel', 'pdf', 'colvis'] : []
  });

  table.buttons().container()
      .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

      $('#row_callback').DataTable( {
        "createdRow": function ( row, data, index ) {
            if ( data[5].replace(/[\$,]/g, '') * 1 > 150000 ) {
                $('td', row).eq(5).addClass('highlight');
            }
        }
    } );
});
</script>
@endsection
