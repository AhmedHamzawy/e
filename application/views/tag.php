<div class="row">
<div class="col s12 m9">




<div class="card">
<div class="card-content">
<span class="card-title m-title"><?php echo $tag->name; ?></span>


<?php
	
  foreach ($pages as $page) {

  	echo '<div class="card horizontal">';
	echo '<div class="card-image">';
    $files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$page->id.".*");
            
    for ($i=0; $i<count($files); $i++)
    {
        $num = $files[$i];
        $img = getimagesize($num);            
        $t = explode("/" , $img["mime"]);
        
        echo '<img  src="../../../e/uploads/pages/'.$page->id.'.'.$t[1].'"  >';
    }     
    echo '</div>';
	echo '<div class="card-stacked">';
	echo '<div class="card-content">';
  echo '<p class="h-title"><a href="'.base_url('page/'.$page->id).'" class="black-text">'.$page->name.'</a></p>';
	echo '</div>';
	echo '<div class="card-action">';
  echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-facebook"></span></a>';
  echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-twitter"></span></a>';
  echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-youtube"></span></a>';
  echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-whatsapp"></span></a>';
  echo '</div>';
	echo '</div>';
	echo '</div>';	
  }

 ?>





</div>



</div>


</div>

<?php $this->load->view('templates/_parts/master_side_view'); ?>


</div>


