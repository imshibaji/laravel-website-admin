<!-- Required datatable js -->
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/plugins/tinymce/tinymce.min.js')}}"></script>
{{-- <script src="{{ URL::asset( $assetLink . '/pages/jquery.datatable.init.js')}}"></script> --}}

<!-- App js -->
<script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>
<script>
function darkCssLink(){
    $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}");
    $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}");
}
function lightCssLink(){
    $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}");
    $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-material.min.css')}}");
}
</script>
<script>
    $(function(){
        $('#datatable').DataTable();
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>

