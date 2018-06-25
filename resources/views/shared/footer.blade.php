<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © EventManager 2018</small>
        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="/vendor/datatables/jquery.dataTables.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.js"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(2000).slideUp(300);
</script>
<script>
    $(function() {
        $('.date').mask('00/00/0000');
        $('.hour').mask('00:00');
        $('.clear-if-not-match').mask("00-00-0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $(".real").inputmask('R$ 999.999.999,99', { numericInput: true});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                    pattern: /[\/]/,
                    fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });

        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    });


</script>