<div class="col l3 m3 s12">

<div class="card">
<div class="card-content" >
<span class="card-title black-text m-title-side">Latest From Exclusives</span>
<ul class="nt-example1">
<?php

foreach ($pages_c1 as $p) {

echo '<li><div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="s-height"  >';
}           
echo '<span class="card-title h-title h-t-side">'.$p->name.'</span>';
echo '</div></li>';

}
?>

</ul>
</div>

</div>
<br/><br/>

<iframe width="100%" height="300" src="https://www.youtube.com/embed/wfWIs2gFTAM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<br/><br/><br/>
<br/><br/>


<img src="/e/assets/img/adv1.jpg" width="100%">

<br/><br/>
<br/><br/>



<div class="card">
<div class="card-content">
<span class="card-title m-title-side">Latest From Exclusives</span>
<ul class="nt-example1">
<?php
foreach ($pages_c4 as $p) {

echo '<li><div class="card">';
echo '<div class="card-image">';
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" class="s-height" >';
}           
echo '<span class="card-title h-title h-t-side">'.$p->name.'</span>';
echo '</div></li>';

}

?>
</ul>
</div>

</div>

<br/><br/><br/>
<br/>

<iframe width="100%" height="300" src="https://www.youtube.com/embed/wfWIs2gFTAM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<br/><br/>

<img src="/e/assets/img/adv2.jpg" width="100%">


<br/><br/><br/>
<br/>

<div class="slider">
<ul class="slides">

<?php
$counter = 0;
foreach ($pages_c2 as $p) {
if($counter < 4){
echo "<li>";
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");

for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];
$img = getimagesize($num);            
$t = explode("/" , $img["mime"]);

echo '<img  src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" >';
} 
echo "<div class='caption center-align'>";
echo "<h5 class='slide-title'>".$p->name."</h5>";
echo  "</div>";
echo  "</li>";
}
$counter++;
}
?>

</ul>
</div>

<br/><br/><br/>
<br/>

<img src="/e/assets/img/adv3.jpg" width="100%">

<br/><br/>

<div class="fb-page" data-href="https://www.facebook.com/eminem" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/eminem" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/eminem">Eminem</a></blockquote></div>

<br/><br/>

<iframe width="100%" height="300" src="https://www.youtube.com/embed/wfWIs2gFTAM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>


