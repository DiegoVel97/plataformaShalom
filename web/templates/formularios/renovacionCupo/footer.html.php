<!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
<script type="text/javascript">
  $(document).ready(function() {
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd'
    });
});
  Materialize.updateTextFields();

</script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/plugins/jquery-1.11.2.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('js/jquery.form.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/materialize.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/plugins/prism/prism.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/plugins.js')?>"></script>
  <script type="text/javascript" src="<?php echo addLib('templates/js/custom-script.js')?>"></script> 
  <script type="text/javascript" src="<?php echo addLib('js/select2.full.min.js') ?>"></script>

<!-- jQuery Validation -->
<script src="<?php echo addLib('templates/js/plugins/jquery-validation/jquery.validate.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo addLib('templates/js/plugins/jquery-validation/additional-methods.min.js') ?>" type="text/javascript"></script>

  <script type="text/javascript" src="<?php echo addLib('js/global.js') ?>"></script>



</body>

</html>