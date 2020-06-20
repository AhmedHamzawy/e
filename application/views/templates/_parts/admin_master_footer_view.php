<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<footer>
  
</footer>

<?php echo $before_body;?>
<script type="text/javascript">
  $(document).ready(function() {
      <?php if($this->session->flashdata('message')) { ?>
           Materialize.toast("<?php echo $this->session->flashdata('message') ?>", 4000);
      <?php  } ?>
   });

</script>
</body>
</html>