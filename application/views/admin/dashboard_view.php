<div  style="padding: 30px;">

<div class="card">
   
    <div class="card-content">
      

    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
</div>
<div class="row">
    <div class="col s6 m3">
          <div class="card blue-grey darken-1 center">
            <div class="card-content white-text">
              <i class="medium material-icons center">view_comfy</i>
              <span class="card-title">Categories</span>
              <p>4</p>
            </div>
          
          </div>
        </div>
      


        <div class="col s6 m3">
          <div class="card blue-grey darken-1 center">
            <div class="card-content white-text">
              <i class="medium material-icons center">person_pin</i>
              <span class="card-title">Users</span>
              <p>5</p>
            </div>
           
          </div>
        </div>


        <div class="col s6 m3">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text center">
              <i class="medium material-icons center">insert_drive_file</i>
              <span class="card-title">Pages</span>
              <p>5</p>
            </div>
          
          </div>
        </div>

        <div class="col s6 m3">
          <div class="card blue-grey darken-1 center">
            <div class="card-content white-text">
              <i class="medium material-icons center">access_time</i>
              <span class="card-title">Rendering Page</span>
              <p>{elapsed_time}</p>
            </div>
           
          </div>
        </div>


        </div>
  




<div class="row">
   
	<div class="col s12 m6">

 <div class="card">
        
        <div class="card-content">
          <p><ul class="collection">
                  <li class="collection-header"><h4>Latest Posts</h4></li>
    <hr/>


<?php

  foreach ($pages as $p) {
    
  
    echo '<li class="collection-item avatar">';
    $files = glob($_SERVER['DOCUMENT_ROOT']."/e/uploads/pages/".$p->id.".*");
            
            for ($i=0; $i<count($files); $i++)
            {
                $num = $files[$i];
                $img = getimagesize($num);            
                $t = explode("/" , $img["mime"]);
                echo '<img src="../../../e/uploads/pages/'.$p->id.'.'.$t[1].'" alt="" class="circle">';

                }
     echo '<span class="title">'.$p->name.'</span>';
     echo '<p>'.$p->description.'<br>';
     echo  'category problem occurs'.'</p>';
     echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';

  }

 ?>
   
   
   
  </ul></p>
        </div>
      



      </div>
</div>
  

    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="https://wallpaperscraft.com/image/eminem_rap_hip_hop_celebrity_bw_99354_1920x1080.jpg">
          <span class="card-title">About</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <?php echo '<p>'.$setting->description.'</p>' ?>
        </div>
      </div>
    </div>
  

<div class="col s12 m6">
      <div class="card">
        <div class="card-content">
        <p><ul class="collection">
                  <li class="collection-header"><h4>Logs</h4></li>
    <hr/>


<?php

  foreach ($logs as $l) {
    
  
    echo '<li class="collection-item avatar">';
     echo '<span class="title">'.$l->text.'</span>';
     echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';

  }

 ?>
   
   
   
  </ul></p>


        </div>
      </div>




    </div>
  

</div>
      




<div class="row">
   
	<div class="col s12 m6">
      <div class="card">
        <div class="card-content">
        <p><ul class="collection">
                  <li class="collection-header"><h4>Tags</h4></li>
    <hr/>


<?php

  foreach ($tags as $t) {
    
  
    echo '<li class="collection-item avatar">';
   
     echo '<span class="title">'.$t->name.'</span>';
     echo '<p>'.$t->description.'<br>';
     echo  'category problem occurs'.'</p>';
     echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';

  }

 ?>
   
   
   
  </ul></p>


        </div>
      </div>




    </div>


  

    <div class="col s12 m6">
      <div class="card">
        
        <div class="card-content">
          <p><ul class="collection">
                  <li class="collection-header"><h4>Categories</h4></li>
    <hr/>
    
    <?php

  foreach ($categories as $c) {
    
  
    echo '<li class="collection-item avatar">';
   
     echo '<span class="title">'.$c->name.'</span>';
     echo '<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';

  }

 ?>
  </ul></p>
        </div>
      </div>
    </div>
  

  

</div>
      




  </div>