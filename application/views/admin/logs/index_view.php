<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<div class="col s12 m6">
<div class="card">

<div class="card-content">
<p><ul class="collection">
<li class="collection-header"><h4>Log Activity</h4></li>
<hr/>

<?php
if(!empty($logs))
{
foreach ($logs as $log) {

echo '<li class="collection-item avatar">';
echo '<img src="images/yuna.jpg" alt="" class="circle">';
echo '<span class="title">'.$log->text.'</span>';
echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>';
echo '</li>';

}


}

?>


</ul></p>
</div>


</div>
</div>