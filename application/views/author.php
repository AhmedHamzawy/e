<div class="row">
<div class="col s12 m9">




<div class="card">
<div class="card-content">
<span class="card-title">Card Title</span>


<?php
	

  foreach ($author_pages as $page) {

  	echo '<div class="card horizontal">';
	echo '<div class="card-image">';
    echo '<img src="https://lorempixel.com/100/190/nature/6">';
    echo '</div>';
	echo '<div class="card-stacked">';
	echo '<div class="card-content">';
	echo '<p>'.$page->name.'</p>';
	echo '</div>';
	echo '<div class="card-action">';
	echo '<a href="#">This is a link</a>';
	echo '</div>';
	echo '</div>';
	echo '</div>';	
  }

 ?>




</div>



</div>

<?php $this->load->view('templates/_parts/master_side_view'); ?>

</div>
</div>


