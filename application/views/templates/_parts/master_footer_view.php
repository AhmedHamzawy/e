<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<footer class="footer-copyright black white-text">
<div class="center">
© 2018 Copyrights All Rights Reserved For &exist; Corporation
</div>
</footer>
            
<?php echo $before_body;?>
<script type="text/javascript">$('.carousel').carousel();</script>
<script src="<?php echo base_url('/assets/js/newsTicker.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/SmoothScroll.js'); ?>"></script>
<script type="text/javascript">$('.newsticker').newsTicker({	max_rows: 1});
var nt_example1 = $('.nt-example1').newsTicker({
    row_height: 200,
    max_rows: 4,
    duration: 4000,
});      $('.slider').slider();
</script>
<script>
$(document).ready(function(){
$('.parallax').parallax();
});
</script>

</body>
</html>