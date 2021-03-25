<!-- Backend Bundle JavaScript -->
<script src="{{asset('assets/js/backend-bundle.min.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/js/customizer.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/js/chart-custom.js')}}"></script>

<!--PDF-->
<script src="{{asset('assets/vendor/doc-viewer/include/pdf/pdf.js')}}"></script>
<!--Docs-->
<script src="{{asset('assets/vendor/doc-viewer/include/docx/jszip-utils.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/docx/mammoth.browser.min.js')}}"></script>
<!--PPTX-->
<script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/filereader.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/d3.min.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/nv.d3.min.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/pptxjs.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/PPTXjs/js/divs2slides.js')}}"></script>
<!--All Spreadsheet -->
<script src="{{asset('assets/vendor/doc-viewer/include/SheetJS/handsontable.full.min.js')}}"></script>
<script src="{{asset('assets/vendor/doc-viewer/include/SheetJS/xlsx.full.min.js')}}"></script>
<!--Image viewer-->
<script src="{{asset('assets/vendor/doc-viewer/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js')}}"></script>
<!--officeToHtml-->
<script src="{{asset('assets/vendor/doc-viewer/include/officeToHtml/officeToHtml.js')}}"></script>
<script src="{{asset('assets/js/doc-viewer.js')}}"></script>

{{--<!-- plugin js -->--}}
{{--<script src="{{asset('assets/js/dropzone.min.js')}}"></script>--}}
{{--<!-- init js -->--}}
{{--<script src="{{asset('assets/js/component.fileupload.js')}}"></script>--}}
<!-- app JavaScript -->
<script src="{{asset('assets/js/app.js')}}"></script>
@stack('addon-scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            // width: 'resolve',
            tags: true,
            // style: 'resolved'
        });

        // $('.file-upload').file_upload();
    });
</script>
