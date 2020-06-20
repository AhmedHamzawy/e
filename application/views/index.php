<div class="row" style="padding: 0;">

<div class="col l12 m10 offset-m1" style="padding: 0px;">
<?php    

$j = 0;
foreach ($latest as $l) {
if($j == 1){ $v = "col s12 m6 l6"; }else{ $v = "col s12 m3 l3"; }
if($j < 7){
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");
for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo "<div class='".$v."' style='padding:0px; margin:-5.5px 0px 0px 0px;


'>";
echo "<div class='card' style='margin:0px;
display:inline-block;
background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */

'>";
echo '<div class="card-image">';
echo '<img src="../../../e/uploads/pages/'.$l->id.'.'.$t[1].'" class="h-image" height="260" style="padding-top:-20px; 
z-index:-1;
" alt="random image">';
echo "<span class='card-title h-title'><a class='white-text' href=".base_url('page/'.$l->id).">".$l->name."</a></span>";
echo "</div>";
echo "</div>";
echo "</div>";
}

$j++;
}
}
?>
</div>
</div>



<div class="row">
<div class="col l9 m7 s12 offset-m1">
<div class="card">
<div class="card-content">
<span class="card-title m-title">Exclusives</span>

<div class="row">
<div class="col l6 m6 s12">


<?php
$counter = 0;
foreach ($pages_c1 as $p) {
if($counter == 0){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'"  class="m-cont-img" >';
}           
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';
echo '</div>';
echo '<div class="card-content m-cont-des"><p>'.$p->description.'</p></div>';
}
$counter++; 
}

?>
</div>
</div>


<div class="col l6 m6 s12">
<?php


$counter = 0;
foreach ($pages_c1 as $p) {
if($counter == 0){

} 
else if($counter < 3){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'"  class="img1" >';
}
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';

echo '</div>';

echo '</div>';

}
$counter++;
}
?>


</div>      

</div>
</div>

</div>











<div class="card">
<div class="card-content">
<span class="card-title m-title">Albums</span>

<div class="row">
<div class="col l6 m6 s12">
<?php
$counter = 0;
foreach ($pages_c2 as $p) {
if($counter == 0){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="m-cont-img" >';
}           
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';
echo '</div>';
echo '<div class="card-content m-cont-des"><p>'.$p->description.'</p></div>';
}
$counter++; 
}

?>
</div>
</div>


<div class="col l6 m6 s12">
<?php


$counter = 0;
foreach ($pages_c2 as $p) {
if($counter == 0){

} 
else if($counter < 3){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="img1">';
}
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';

echo '</div>';

echo '</div>';

}
$counter++;
}
?>


</div>      

</div>
</div>

</div>









<div class="card">
<div class="card-content">
<span class="card-title m-title">Facts</span>

<div class="row">




<div class="carousel ">
<?php
foreach ($pages_c2 as $p) {
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);
echo '<a class="carousel-item col l5 m8 s6" href="#!"><img  height="250" src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'">
<h6 class="white-text h-title" style="margin-top:-60px;">'.$p->name.'</h6>
</a>';
}

}



?>
</div>




<div class="col l6 m12 s12">
<h4 class="m-title"> Freestyles </h4>
<?php
$counter = 0;
foreach ($pages_c3 as $p) {
if($counter == 0){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="m-cont-img-2" >';
}           
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';
echo '</div></div>';
}
$counter++; 
}

?>

<?php

$counter = 0;

foreach ($pages_c3 as $p) {
if($counter == 0){

}
else if($counter < 3){  

echo '<div class="card horizontal">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img class="materialboxed col s3 m-cont-img-3"  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'"  alt="random image">';
}

echo '</div>';
echo '<div class="card-stacked">';
echo '<div class="card-content">';
echo '<p class="h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></p>';
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
$counter++;
}
?>

</div> 

<div class="col l6 m12 s12">
<h4 class="m-title"> Videos </h4>
<?php
$counter = 0;
foreach ($pages_c4 as $p) {
if($counter == 0){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="m-cont-img-2" >';
}           
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';
echo '</div></div>';
}
$counter++; 
}

?>


<?php

$counter = 0;

foreach ($pages_c4 as $p) {
if($counter == 0){

}  
else if($counter < 3){  

echo '<div class="card horizontal m-cont-3">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img class="col s3 m-cont-img-3" src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" alt="random image">';
}

echo '</div>';
echo '<div class="card-stacked">';
echo '<div class="card-content">';
echo '<p class="h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></p>';
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
$counter++;
}
?>
</div>


</div>



</div>

</div>




<div class="card">
<div class="card-content">
<span class="card-title m-title">D12</span>

<div class="row">

<div class="col l6 m6 s12">
<?php
$counter = 0;
foreach ($pages_c1 as $p) {
if($counter == 0){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="m-cont-img" >';
}           
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';
echo '</div>';
echo '<div class="card-content m-cont-des"><p>'.$p->description.'</p></div>';
}
$counter++; 
}

?>
</div>
</div>


<div class="col l6 m6 s12">
<?php


$counter = 0;
foreach ($pages_c1 as $p) {
if($counter == 0){

} 
else if($counter < 3){
echo '<div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="img1">';
}
echo '<span class="card-title h-title"><a class="white-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a></span>';

echo '</div>';

echo '</div>';

}
$counter++;
}
?>



</div>      



</div></div>
</div>


<div class="card">
<div class="card-content">
<span class="card-title m-title">Old Memories</span>

<div class="row">

<?php
$counter = 0;

foreach ($pages_c6 as $p) {
$counter++;
if($counter < 5){    
echo '<div class="card col l6 m12 s12">';
echo '<div class="card-image waves-effect waves-block waves-light">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img class="activator" height="300px"  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" >';
}           
echo '</div>';
echo '<div class="card-content">';
echo '<span class="card-title activator grey-text text-darken-4"><a class="black-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a><i class="material-icons right">more_vert</i></span>';
echo '</div>';
echo '<div class="card-reveal">';
echo '<span class="card-title grey-text text-darken-4"><a class="black-text" href='.base_url("page/".$p->id).'>'.$p->name.'</a><i class="material-icons right">close</i></span>';
echo '<p>'.$p->description.'</p><br/><br/><br/><hr>';
echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-facebook black-text"></span></a>
&nbsp;&nbsp;&nbsp;';
echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-twitter black-text"></span></a>
&nbsp;&nbsp;&nbsp; ';
echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-youtube black-text"></span></a>
&nbsp;&nbsp;&nbsp; ';
echo '<a href="#" class="pure-button button-socicon"><span class="socicon socicon-whatsapp black-text"></span></a>';
echo '</div>';
echo '</div>';
}
}
?>


</div>



</div>

</div>





</div>

<?php $this->load->view('templates/_parts/master_side_view'); ?>


</div>



<div class="row">
<div class="col l12 m10 offset-m1" style="padding: 0px;">

<?php    

$j = 0;
foreach ($latest as $l) {
if($j == 6){ $v = "col s12 m6 l6"; $h = "456px"; }else{ $v = "col s12 m3 l3"; $h = "228px"; }
if($j > 5 && $j < 11){
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$l->id.".*");
for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo "<div class='".$v."' style='padding:0px; margin:0px;


'>";
echo "<div class='card l-h-card' style='margin:0px;
display:inline-block;
background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */

'>";
echo "<div class='card-image'>";
echo '<img src="../../../e/uploads/pages/'.$l->id.'.'.$t[1].'" height="'.$h.'" style="margin:-5.9px 0px 0px 0px; 
z-index:-1;
" alt="random image">';
echo "<span class='card-title h-title'><a class='white-text' href=".base_url('page/'.$l->id).">".$l->name."</a></span>";
echo "</div>";
echo "</div>";
echo "</div>";
}

}
$j++;
}
?>

</div>

</div>

</div>
