<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="center" style="margin-top: 5px;">
  <a href="<?php echo site_url('admin/pages/create');?>" class="btn-floating btn-large waves-effect waves-light">
    <i class="material-icons">add</i>
  </a>
</div>
<?php
if(!empty($pages))
{
echo '<table class="striped">';
echo '<thead>
  <tr>
    <td>ID</td>
    <td>Page title</td>
    <td>Created at</td>
    <td>Last update</td>
    <td>Operations</td>
  </tr>
</thead>';
foreach($pages as $page)
{
echo '<tr>';
echo '<td>'.$page->id.'</td>
<td>'.$page->name.'</td>
<td>'.$page->created_at.'</td>
<td>'.$page->updated_at.'</td>
<td>';
echo anchor('admin/pages/edit/'.$page->id,'<i class="material-icons">mode_edit</i>').' '.anchor('admin/pages/delete/'.$page->id,'
<i class="material-icons">delete</i>');
echo '</td>';
echo '</tr>';
}
echo '</table>';
}else{ 

echo '<div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Empty</span>
              <p>No Pages</p>
            </div>
          
          </div>';


 }
?>
 