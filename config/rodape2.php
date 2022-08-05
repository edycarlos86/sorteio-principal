<?php
include_once '../ws/auxiliar.php';
    $versao = Auxiliar::get_versao();
    $versao_img = Auxiliar::get_versao_img();
?>
<script src="../config/js/jquery-3.6.0.min.js"></script>
<script src="../config/popper/popper.min.js"></script>
<script src="../config/js/bootstrap.min.js"></script>
<script src="../config/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../config/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="../config/js/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../config/js/moment.js"></script>
<script src="../config/js/jquery.mask.js"></script>

<script src="../js/auxiliar.js?<?php echo $versao; ?>"></script>
<script src="../js/ajax.js?<?php echo $versao; ?>"></script>
<script src="../js/basico.js?<?php echo $versao; ?>"></script>
<script>
    $(document).ready(function () {
        $('.date').mask('99/99/9999');
        $('.cep').mask('99.999-999');
        $('.cpf').mask('999.999.999-99');
        $('.celular').mask('(99) 99999-9999');
        $('.cartaocredito').mask('9999.9999.9999.9999');
        $('.money').mask('#.##0,00', {reverse: true});
    });
</script>

