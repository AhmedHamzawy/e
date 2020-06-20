<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="center" style="margin-top: 5px;">
  <a href="<?php echo site_url('admin/tags/create');?>" class="btn-floating btn-large waves-effect waves-light">
    <i class="material-icons">add</i>
  </a>
</div>
<?php
if(!empty($tags))
{
echo '<table class="striped">';
echo '<thead>
  <tr>
    <th>ID</th>
    <th>Tag title</th>
    <th>Created at</th>
    <th>Last update</th>
    <th>Operations</th>
  </tr>
</thead>';
foreach($tags as $tag)
{
echo '<tr>';
echo '<td>'.$tag->id.'</td>
<td>'.$tag->name.'</td>
<td>'.$tag->created_at.'</td>
<td>'.$tag->updated_at.'</td>
<td>';
echo anchor('admin/tags/edit/'.$tag->id,'<i class="material-icons">mode_edit</i>').' '.anchor('admin/tags/delete/'.$tag->id,'
<i class="material-icons">delete</i>');
echo '</td>';
echo '</tr>';
}
echo '</table>';
}
?>
 

