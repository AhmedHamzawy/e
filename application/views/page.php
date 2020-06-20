<div class="parallax-container" style="height: 500px; background: rgba(0,0,0,0); background: rgba(0,0,0,0.5);">

<h1 class="center page-title" style="padding-top: 160px; z-index: 1; color: #fff; ">
            <?php echo $page->name ?>
        </h1>
<div class="parallax">


<?php
$files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$page->id.".*");
            
            for ($i=0; $i<count($files); $i++)
            {
                $num = $files[$i];
                $img = getimagesize($num);            
                $t = explode("/" , $img["mime"]);
                
                echo '<img style="z-index: -1;" class="page-img"  src="../../../e/uploads/pages/'.$page->id.'.'.$t[1].'" >';
                }    

?>

</div>

</div>




<div class="container">
<h5 style="line-height: 38px;"><?php echo $page->content ?></h5>
</div>


